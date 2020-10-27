<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar - Turma</title>
</head>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar TURMA') }}</div>

                <div class="card-body">
                    @if($errors->any())
                        <div>
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{action('TurmaController@update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$turma->id}}" />
                        <!-- nome-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Nome do Turma') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" value="{{$turma->nome}}" name="nome">
                            </div>
                        </div>
                        <!-- /nome-->
                        <!-- sigla-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Sigla') }}</label>
                            <div class="col-md-6">
                                <input id="sigla" type="text" class="form-control" value="{{$turma->sigla}}" name="sigla">
                            </div>
                        </div>
                        <!-- /sigla-->
                        <!-- c_id-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Curso Id') }}</label>
                            <div class="col-md-6">
                                <input id="curso_id" type="text" class="form-control" value="{{$turma->curso_id}}" name="curso_id">
                            </div>
                        </div>
                        <!-- /c_id-->
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning btn-outline-dark"> <i class="fa fa-save"> </i>
                                    Salvar</button>
                                <a href="{{url('turma')}}" class="btn btn-danger btn-outline-light"> <i class="fa fa-arrow-left"> </i>
                                    Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

