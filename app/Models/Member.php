<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function position(){
        return $this->belongsTo(Position::class);
    }

    public function salaryType()
    {
        return $this->belongsTo(SalaryType::class);
    }
}
