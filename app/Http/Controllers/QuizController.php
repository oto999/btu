<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function create()
    {
        return view('createOrUpdate');
    }

    public function update($id)
    {
        $quiz = Quiz::find($id);

        if (!$quiz) {
            abort(404); // Quiz not found, return a 404 response
        }

        return view('createOrUpdate', compact('quiz'));
    }

    public function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required',
            'status' => 'required',
        ]);

        if ($id) {
            $quiz = Quiz::find($id);
            $quiz->fill($request->all())->save();
        } else {
            $quiz = new Quiz();
            $quiz->fill($request->all())->save();
        }

        return redirect()->route('quiz.list');
    }
}

