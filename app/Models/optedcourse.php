<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class optedcourse extends Model
{
    use HasFactory;
    protected $table='optedcourses';
    protected $fillable =['student_id','course_id','is_active'];
}