<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected function getApplicationStatusAttribute($value){
       switch ($value) {
        case 'Process start':
            return '<span class="badge bg-label-info me-1">'.$value.'</span>';
            break;
        case 'Completed':
            return '<span class="badge bg-label-success me-1">'.$value.'</span>';
            break;
        case 'Not started':
            return '<span class="badge bg-label-secondary me-1">'.$value.'</span>';
            break; 
        default:
            return '<span class="badge bg-label-warning me-1">'.$value.'</span>';
            break;
       }
    }

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
