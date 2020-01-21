<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = ['emp_name', 'salary', 'job_description'];

    //uses for soft delete
    protected $dates = ['deleted_at'];
}
