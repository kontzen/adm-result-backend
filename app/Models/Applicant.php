<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'course', 'status', 'letter_status', 'letter_path'
    ];
}
