<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        return redirect()->back()->with('success', 'You have successfully subscribed!');
    }
}
