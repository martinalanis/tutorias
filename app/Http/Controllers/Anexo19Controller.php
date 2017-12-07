<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Anexo19;
use App\Group;
use App\User;

class Anexo19Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $anexos = Anexo19::where('user_id', Auth::id())->get();
        return view('anexo19.lista', compact('anexos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $anexoGroups = Anexo19::pluck('group_id')->all();
        $groups = Group::whereNotIn('id', $anexoGroups)->pluck('identifier', 'id');
        return view('anexo19.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $anexo = new Anexo19($request->all());
        $anexo->user_id = Auth::id();
        $anexo->data = json_encode($request->input('data'));

        if($anexo->save()){
            return redirect()->route('anexo19.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $anexo = Anexo19::find($id);
        return view('anexo19.ver', compact('anexo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAlumnos($group) {

        $group = Group::find($group);
        $alumnos = $group->alumnos;
        $semestre = $group->semestre;

        return response()->json([
            'alumnos' => json_encode($alumnos),
            'semestre' => $semestre
        ]);
    }
}
