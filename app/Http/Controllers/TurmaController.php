<?php

namespace App\Http\Controllers;

use App\CursoModel;
use App\TurmaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('http://localhost:8000/api/turma/');

        //dd($response->json());
        $objTurma = json_decode(json_encode($response->json()));
        //$objCurso = CursoModel::findOrfail($objTurma->curso_id);//traz o nome do curso

        return view('turma.list')->with('turmas', $objTurma);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $objCurso = new TurmaModel();
        $objCurso->fill($request->all());
        $objCurso->save();

        return response()->json($objCurso, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TurmaModel  $turmaModel
     * @return \Illuminate\Http\Response
     */
    public function show(TurmaModel $turmaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TurmaModel  $turmaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TurmaModel $turmaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TurmaModel  $turmaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TurmaModel $turmaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TurmaModel  $turmaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TurmaModel $turmaModel)
    {
        //
    }
}
