<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $dates=[
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'question',
        'options',
         'correct_answer',
         'type'
        ];

    public function questionnaires()
    {
        return $this->belongsToMany(Questionnaire::class);
    }
}
