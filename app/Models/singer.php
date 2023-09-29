<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singer extends Model
{
     public function  songs(){
        return $this->belongsToMany(song::class,'singer_songs');
     }
}
