<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Question;

use App\Mail\QuestionMail;

use Auth;

class QuestionController extends Controller
{
    public function send(Request $request){
        Question::create([
            'question' => $request->question,
            'user_id' => Auth::user()->id
        ]);

        $data = [
            'name' => Auth::user()->name
        ];

        Mail::to(Auth::user()->email)->send(new QuestionMail($data));

        return back();
    }
}
