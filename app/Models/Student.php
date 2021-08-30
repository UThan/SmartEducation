<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;
use App\Models\City;
use App\Models\Course;
use App\Models\Institute;

class Student extends Model
{
    use HasFactory;

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }
}
