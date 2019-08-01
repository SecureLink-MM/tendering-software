<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;

class Department extends Model
{
    public function tenders(){
        return $this->hasMany(Tender::class, 'department_id');
    }
}
