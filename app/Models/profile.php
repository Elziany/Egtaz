<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $table='profile';
    protected $fillable=['image','phone','lecturer_id','country','student_id','studentphone'];
    function lecturer(){
        return $this->belongsTo(Lecturer::class,'lecturer_id');
    }

    function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
}
