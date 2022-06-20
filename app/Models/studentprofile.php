<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentprofile extends Model
{
    use HasFactory;
    protected $table='profile';
    protected $fillable=['image','phone','lecturer_id','country','student_id'];
}
