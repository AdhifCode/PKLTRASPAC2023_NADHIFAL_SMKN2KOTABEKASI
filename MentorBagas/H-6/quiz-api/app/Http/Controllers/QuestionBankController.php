<?php

namespace App\Http\Controllers;

use App\Models\QuestionBank;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class QuestionBankController extends Controller
{
    public function index()
    {
        $questionBanks = QuestionBank::all();
        return response()->json($questionBanks);
    }

    public function show($id)
    {
        $questionBank = QuestionBank::find($id);
        if (!$questionBank) {
            return response()->json(['error' => 'QuestionBank not found'], 404);
        }
        return response()->json($questionBank);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'subject_id' => 'required',
            'topic_id' => 'required',
        ]);

        $slug = Str::slug($request->input('question_tags'));
        $request->merge(['slug' => $slug]);

        $questionBank = QuestionBank::create($request->all());

        return response()->json($questionBank, 201);
    }

    public function update(Request $request, $id)
    {
        $questionBank = QuestionBank::find($id);

        if (!$questionBank) {
            return response()->json(['error' => 'QuestionBank not found'], 404);
        }

        $this->validate($request, [
            'subject_id' => 'required',
            'topic_id' => 'required',
        ]);

        $slug = Str::slug($request->input('question_tags'));
        $request->merge(['slug' => $slug]);

        $questionBank->update($request->all());

        return response()->json($questionBank);
    }

    public function destroy($id)
    {
        $questionBank = QuestionBank::find($id);

        if (!$questionBank) {
            return response()->json(['error' => 'QuestionBank not found'], 404);
        }

        $questionBank->delete();

        return response()->json(['message' => 'QuestionBank deleted']);
    }
}
