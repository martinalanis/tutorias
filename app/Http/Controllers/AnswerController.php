<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\Answer;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    
    public function showPolls() {

    	$polls = Poll::all();
        return view('encuestas.lista', compact('polls', $polls));

    }

    public function answerPoll($id) {

    	$poll = Poll::find($id);
    	return view('encuestas.responder', compact('poll', $poll));
    }
}
