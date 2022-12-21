<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parenttbl extends Model
{
    use HasFactory;
    protected $table = 'parents';
    protected $fillable = ['name','email'];
}
