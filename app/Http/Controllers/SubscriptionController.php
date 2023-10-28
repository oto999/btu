<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        return redirect()->back()->with('success', 'You have successfully subscribed!');
    }

    public function showQuizzes()
    {
        $quizzes = Quiz::all();
    
        return view('main', compact('quizzes'));
    }
}
