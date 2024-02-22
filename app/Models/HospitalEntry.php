<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalEntry extends Model
{
    use HasFactory;


   /* public function user()
    {
        return $this->belongsTo(User::class);
       return $this->hasMany('App\Models\User');
    }*/


    public function branch(){
        return $this->belongsTo(Branch::class,'branch_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}