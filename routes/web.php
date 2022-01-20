<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\managerController;
use App\Http\Controllers\employeeController;



//Login Routes
Route::get('/',[loginController::class,'index'])->name('signin');
Route::post('/',[loginController::class,'logout'])->name('logout');

Route::post('/dashboard',[loginController::class,'login'])->name('login');
Route::middleware('auth.check')->group(function (){
        //manager Routes
        Route::get('/dashboard',function (){return view('manager_dashboard');})->name('manager_dashboard');
        Route::get('/department_employee',[managerController::class,'manager_control_panel'])->name('department_employee');
        Route::get('/account',[managerController::class,'account'])->name('manager_account');
        Route::get('/create_employee',[managerController::class,'employee_form'])->name('employee_create');
        Route::post('/store_employee',[managerController::class,'employee_store'])->name('employee_store');

        //employee Routes
        Route::get('/dashboard',function (){return view('employee_dashboard');})->name('employee_dashboard');
        Route::get('/my_salaries',[employeeController::class,'salaries_page'])->name('employee_salaries');
        Route::get('/account',[employeeController::class,'account'])->name('employee_account');
        
});
