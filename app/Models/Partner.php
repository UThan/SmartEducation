<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    public function courses(){
        return $this->belongsToMany(Course::class,'offered_courses');
    }

    public function cities(){
        return $this->belongsToMany(City::class,'campuses');
    }
}
