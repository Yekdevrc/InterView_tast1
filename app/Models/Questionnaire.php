<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    use HasFactory;

    protected $dates=[
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'title',
        'expired_at'
    ];

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }

}
