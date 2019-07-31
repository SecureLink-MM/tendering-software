<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;

class Department extends Model
{
    public function tenders(){
        return $this->hasMany(Department::class, 'department_id');
    }
}
