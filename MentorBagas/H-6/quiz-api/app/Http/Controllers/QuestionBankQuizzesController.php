<?php

namespace App\Http\Controllers;

use App\Models\QuestionBankQuizzes;
use Illuminate\Http\Request;

class QuestionBankQuizzesController extends Controller
{
    public function showAll()
    {
        $questionBankQuizzes = QuestionBankQuizzes::all();
        return response()->json($questionBankQuizzes);
    }

    public function show($id)
    {
        $questionBankQuiz = QuestionBankQuizzes::find($id);
        if (!$questionBankQuiz) {
            return response()->json(['error' => 'QuestionBankQuiz not found'], 404);
        }
        return response()->json($questionBankQuiz);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'questionbank_id' => 'required',
            'quize_id' => 'required',
            'subject_id' => 'required',
            'marks' => 'required',
        ]);
// dd($request->all());
        $questionBankQuiz = QuestionBankQuizzes::create($request->all());

        return response()->json($questionBankQuiz, 201);
    }

    public function update(Request $request, $id)
    {
        $questionBankQuiz = QuestionBankQuizzes::find($id);

        if (!$questionBankQuiz) {
            return response()->json(['error' => 'QuestionBankQuiz not found'], 404);
        }

        $this->validate($request, [
            'marks' => 'required',
        ]);

        $questionBankQuiz->update($request->all());

        return response()->json($questionBankQuiz);
    }

    public function destroy($id)
    {
        $questionBankQuiz = QuestionBankQuizzes::find($id);

        if (!$questionBankQuiz) {
            return response()->json(['error' => 'QuestionBankQuiz not found'], 404);
        }

        $questionBankQuiz->delete();

        return response()->json(['message' => 'QuestionBankQuiz deleted']);
    }
}
