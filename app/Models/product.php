<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
     protected $guarted=[];
     
     
     public function catdata()
    {
        return $this->hasMany('App\Models\product','catogory_id','id');
    }
    
}
