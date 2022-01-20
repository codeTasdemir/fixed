<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function department_by_manager(){
        return $this->belongsToMany(Employee::class,'dept_emp','dept_no','emp_no','dept_no','emp_no');

    }
}
