<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    public function index()
    {
        return view('employee');
    }

    public function salaries_page()
    {
        $employee = Employee::with('dept_emp')->where([
            ['first_name','=',session('userSessions')['first_name']],
            ['last_name','=',session('userSessions')['last_name']]
        ])->first();

        $salaries = Employee::with('salaries')->where('emp_no','=',$employee->emp_no)->first();
        return view('employee_salaries',compact('employee','salaries'));
    }

    public function account()
    {
        $employee = Employee::with('dept_emp')->where([
            ['first_name','=',session('userSessions')['first_name']],
            ['last_name','=',session('userSessions')['last_name']]
        ])->first();
        return view('employee_account',compact('employee'));
    }

}
