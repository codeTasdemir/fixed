<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(loginRequest $request)
    {
        $control = Employee::whereHas('dept_manager', function ($query) use($request){
            return $query->where('first_name', '=', $request->first_name)
                ->where('last_name','=',$request->last_name)
                ->where('to_date','=','9999-01-01');
        })->first();

        $control2 = Employee::whereHas('dept_emp', function ($query) use($request){
            return $query->where('first_name', '=', $request->first_name)
                ->where('last_name','=',$request->last_name)
                ->where('to_date','=','9999-01-01');

        })->first();

        if ($control) {
            $request->session()->put('userSessions', ['first_name' => $request->first_name , 'last_name'=> $request->last_name]);
            return view('manager_dashboard',);
        }

        elseif ($control2){

            $request->session()->put('userSessions', [ 'first_name' => $request->first_name , 'last_name' => $request->last_name]);
            return  view('employee_dashboard');
        }

        else {
            return redirect("/")->with('alert1','Oops!!  Please check the relevant fields !! ')->with('alert2',' Please make sure you have an account !! ');
        }
    }


    public function logout() {
        if(session()->has('userSessions')){
            session()->pull('userSessions');
            return redirect()->route('signin');
        }
    }


}
