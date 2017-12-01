<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    
    public function showPolls() {

    	// $aux = User::find(Auth::id());

    	// $aux->answe

    	$polls = Poll::all();
        return view('encuestas.lista', compact('polls'));

    }

    public function answerPoll($id) {

    	$poll = Poll::find($id);
    	return view('encuestas.responder', compact('poll'));
    }

    public function storeAnswer(Request $request) {

    	$json = "";
    	$answers = [];
    	$respuestas = $request->input('respuesta');
    	$poll = Poll::find($request->input('poll'));

    	foreach($request->input('pregunta') as $index => $pregunta) {
                // $poll_quiz .= [$i => $pregunta];
            array_push($answers, ['pregunta' => $pregunta, 'respuesta' => $respuestas[$index]]);
        }

        $json = json_encode($answers);

        try {

        	$poll->answers()->attach(Auth::user()->id,['answer' => $json, 'active' => 1]);


        } catch(\Exception $e){

        	return redirect()->back();
        }

        	return redirect()->route('encuestas');

    }

    public function showAnswer($id) {

    	$respuestas = DB::table('answers')->where('id', $id)->get();
    	// dd(json_decode($respuestas,true));
    	$encuesta = Poll::find($respuestas[0]->poll_id);
    	$respuestas = $respuestas[0]->answer;


    	return view('encuestas.ver', compact('respuestas', 'encuesta'));
    }
}
