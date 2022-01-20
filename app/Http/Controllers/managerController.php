<?php

namespace App\Http\Controllers;

use App\Http\Requests\employeeStoreRequest;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class managerController extends Controller
{
    public function manager_control_panel(){

        $manager = Employee::with('dept_manager')->where([
            ['first_name','=',session('userSessions')['first_name']],
            ['last_name','=',session('userSessions')['last_name']],
        ])->first();


        foreach ($manager->dept_manager as $managerr) {
            $department_name = $managerr->dept_name;
        }

        $employees_by_department =Employee::whereHas('dept_emp',function ($query) use($department_name){
            return $query->where([
                ['dept_name','=',$department_name],
                ['to_date','9999-01-01'],
            ]);
        })->get();
        return view('manager',compact('manager','employees_by_department'));
    }
    public function account()
    {
        $manager = Employee::with('dept_manager')->where([
            ['first_name','=',session('userSessions')['first_name']],
            ['last_name','=',session('userSessions')['last_name']],
        ])->first();

        return view('manager_account',compact('manager'));
    }

    public function employee_form(){
        $manager = Employee::with('dept_manager')->where([
            ['first_name','=',session('userSessions')['first_name']],
            ['last_name','=',session('userSessions')['last_name']],
        ])->first();
        $title_names = DB::table('titles')->select('title')->distinct()->get();
        return view('create_employee',compact('title_names','manager'));
    }

    public function employee_store(employeeStoreRequest $request)
    {
        $latestUser = Employee::latest('emp_no')->select('emp_no')->first();
        try {
            $employee = new Employee();
            $employee->emp_no  = $latestUser->emp_no+1;
            $employee->first_name = $request->first_name;
            $employee->last_name = $request->last_name;
            $employee->gender = $request->gender;
            $employee->birth_date = Carbon::parse($request->birth_date);
            $employee->hire_date = Carbon::parse($request->hire_date);
            $employee->save();

            if($employee){
                DB::table('dept_emp')->insert([
                    'emp_no'=>$employee->emp_no,
                    'dept_no'=>$request->dept_no,
                    'from_date'=>Carbon::parse($request->hire_date),
                    'to_date'=>'9999-01-01'
                ]);

                DB::table('titles')->insert([
                   'emp_no'=>$employee->emp_no,
                   'title'=>$request->title,
                   'from_date'=> Carbon::parse($request->hire_date),
                    'to_date'=>'9999-01-01'
                ]);

            }
            return redirect()->back()->with('success','Employee Created');
        }
        catch (\Throwable $th)
        {
            return $th;
        }
    }



}
