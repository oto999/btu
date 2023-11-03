<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class CrudController extends Controller
{
    public function createOrUpdate($id = null, Request $request)
    {
        $quiz = null;

        if ($id) {
            $quiz = Quiz::find($id);
        }

        if (!$quiz) {
            $quiz = new Quiz();
        }

        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',
                'photo' => 'required',
                'status' => 'required',
            ]);

            $quiz->fill($request->all())->save();

            return redirect()->route('quiz.list');
        }

        return view('createOrUpdate', compact('quiz'));
    }
}
