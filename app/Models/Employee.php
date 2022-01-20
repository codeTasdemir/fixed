<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable =['emp_no','birth_date','first_name','last_name','gender','hire_date'];

    public function dept_emp(){
        return $this->belongsToMany(Department::class,'dept_emp','emp_no','dept_no','emp_no','dept_no')->select('to_date','from_date','dept_name');
    }

    public function dept_manager(){
        return $this->belongsToMany(Department::class,'dept_manager','emp_no','dept_no','emp_no','dept_no')->select('to_date','from_date','dept_name');
    }

    public function salaries(){
        return $this->hasMany(Salary::class,'emp_no','emp_no');
    }

}
