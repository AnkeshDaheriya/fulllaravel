<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $table = 'student_data';
    protected $fillable = [
        'name',
        'email',
        'moblie_no',
         
       
    ];
}
