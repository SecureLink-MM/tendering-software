<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tender;

class Tender extends Model
{
    public function department(){
        return $this->belongsTo(Tender::class, 'department_id');
    }
}
