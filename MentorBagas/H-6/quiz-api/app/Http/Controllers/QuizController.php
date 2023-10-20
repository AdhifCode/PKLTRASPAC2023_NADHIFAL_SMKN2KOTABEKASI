<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return response()->json($quizzes);
    }

    public function showAll()
    {
        $quizzes = Quiz::with('questionBankQuizzes.questionBank')->get();
        
        $response = [];
        
        foreach ($quizzes as $quiz) {
            $wleowleo = [];
            foreach ($quiz->questionBankQuizzes as $questionBankQuiz) {
                
                $questionBank = $questionBankQuiz->questionBank;
                
                $wleowleo[] = [
                    'id' => $questionBank->id,
                    'question' => str_replace("\r\n", "", strip_tags($questionBank->question)),
                    'published_at' => Carbon::parse($questionBank->created_at)->format('d F Y'),
                    'choices' => json_decode($questionBank->answers, true),
                ];

            }
            $quizData = [
                'quiz_title' => $quiz->title,
                'quiz_duration' => $quiz->dueration,
                'question_data' => $wleowleo,
            ];
            
            $response[] = $quizData;
        }
        
        return response()->json($response);
    }

    public function show($id)
    {
        $quiz = Quiz::with('questionBankQuizzes.questionBank')->find($id);

        if (!$quiz) {
            return response()->json(['error' => 'Quiz not found'], 404);
        }

        return response()->json($quiz);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'dueration' => 'required',
        ]);

        $slug = Str::slug($request->input('title'));
        $request->merge(['slug' => $slug]);

        $quiz = Quiz::create([
            'title' => $request->input('title'),
            'slug' => $request->input('slug'),
            'dueration' => $request->input('dueration'),
            'category_id' => $request->input('category_id'),
            'is_paid' => $request->input('is_paid'),
            'cost' => $request->input('cost'),
            'validity' => $request->input('validity'),
            'total_marks' => $request->input('total_marks'),
            'having_negative_mark' => $request->input('having_negative_mark'),
            'negative_mark' => $request->input('negative_mark'),
            'pass_percentage' => $request->input('pass_percentage'),
            'tags' => $request->input('tags'),
            'publish_results_immediately' => $request->input('publish_results_immediately'),
            'description' => $request->input('description'),
            'total_questions' => $request->input('total_questions'),
            'instructions_page_id' => $request->input('instructions_page_id'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'record_updated_by' => $request->input('record_updated_by'),
            'show_in_front' => $request->input('show_in_front'),
            'exam_type' => $request->input('exam_type'),
            'section_data' => $request->input('section_data'),
            'has_language' => $request->input('has_language'),
            'image' => $request->input('image'),
            'language_name' => $request->input('language_name'),
            'is_popular' => $request->input('is_popular'),
            'package_id' => $request->input('package_id'),
        ]);

        return response()->json($quiz, 201);
    }

    public function update(Request $request, $id)
{
    $this->validate($request, [
        'title' => 'required',
        'dueration' => 'required',
    ]);

    $quiz = Quiz::find($id);

    if (!$quiz) {
        return response()->json(['error' => 'Quiz not found'], 404);
    }

    $slug = Str::slug($request->input('title'));
    $request->merge(['slug' => $slug]);

    $quiz->update([
        'title' => $request->input('title'),
        'slug' => $request->input('slug'),
        'dueration' => $request->input('dueration'),
        'category_id' => $request->input('category_id'),
        'is_paid' => $request->input('is_paid'),
        'cost' => $request->input('cost'),
        'validity' => $request->input('validity'),
        'total_marks' => $request->input('total_marks'),
        'having_negative_mark' => $request->input('having_negative_mark'),
        'negative_mark' => $request->input('negative_mark'),
        'pass_percentage' => $request->input('pass_percentage'),
        'tags' => $request->input('tags'),
        'publish_results_immediately' => $request->input('publish_results_immediately'),
        'description' => $request->input('description'),
        'total_questions' => $request->input('total_questions'),
        'instructions_page_id' => $request->input('instructions_page_id'),
        'start_date' => $request->input('start_date'),
        'end_date' => $request->input('end_date'),
        'record_updated_by' => $request->input('record_updated_by'),
        'show_in_front' => $request->input('show_in_front'),
        'exam_type' => $request->input('exam_type'),
        'section_data' => $request->input('section_data'),
        'has_language' => $request->input('has_language'),
        'image' => $request->input('image'),
        'language_name' => $request->input('language_name'),
        'is_popular' => $request->input('is_popular'),
        'package_id' => $request->input('package_id'),
    ]);

    return response()->json($quiz);
}


    public function destroy($id)
    {
        $quiz = Quiz::find($id);

        if (!$quiz) {
            return response()->json(['error' => 'Quiz not found'], 404);
        }

        $quiz->delete();

        return response()->json(['message' => 'Quiz deleted']);
    }
}
