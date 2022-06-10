<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function notes(){
        return $this->hasMany(Note::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function targeted_city(){
        return $this->belongsTo(City::class);
    }

    public function institute(){
        return $this->belongsTo(Institute::class);
    }

}
