<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes';
    protected $fillable = [
        'title',
        'slug',
        'dueration',
        'category_id',
        'is_paid',
        'cost',
        'validity',
        'total_marks',
        'having_negative_mark',
        'negative_mark',
        'pass_percentage',
        'tags',
        'publish_results_immediately',
        'description',
        'total_questions',
        'instructions_page_id',
        'start_date',
        'end_date',
        'record_updated_by',
        'show_in_front',
        'exam_type',
        'section_data',
        'has_language',
        'image',
        'language_name',
        'is_popular',
        'package_id',
    ];

    public function questionBankQuizzes()
    {
        return $this->hasMany(QuestionBankQuizzes::class, 'quize_id');
    }

    // public function questionBankQuizzes()
    // {
    //     return $this->hasMany(QuestionBankQuizzes::class, 'quize_id');
    // }
}

