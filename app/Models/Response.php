<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $dates=[
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'questionnaire_id',
        'student_id',
        'response'
    ];
}
