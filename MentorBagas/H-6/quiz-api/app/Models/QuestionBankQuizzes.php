<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionBankQuizzes extends Model
{
    protected $table = 'questionbank_quizzes';
    protected $fillable = [
        'questionbank_id',
        'quize_id',
        'marks',
        'created_at',
        'updated_at',
    ];
    
    public function questionBank()
    {
        return $this->belongsTo(QuestionBank::class, 'questionbank_id');
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'quize_id');
    }
}
