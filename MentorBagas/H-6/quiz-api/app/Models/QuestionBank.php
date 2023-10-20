<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    protected $table = 'questionBank';
    protected $fillable = [
        'question_tags',
        'slug',
        'question_type',
        'question',
        'question_file',
        'question_file_is_url',
        'total_answers',
        'answers',
        'total_correct_answers',
        'correct_answers',
        'marks',
        'time_to_spend',
        'difficulty_level',
        'hint',
        'explanation',
        'explanation_file',
        'status',
        'created_at',
        'updated_at',
        'question_l2',
        'explanation_l2',
        'user_submitted',
    ];

    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class, 'questionbank_quizzes', 'questionbank_id', 'quize_id');
    }
}

