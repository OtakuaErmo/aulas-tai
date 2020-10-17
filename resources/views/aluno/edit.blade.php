<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar - Aluno</title>
</head>
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar ALUNO') }}</div>

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
                    <form action="{{action('AlunoController@update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$aluno->id}}" />
                        <!-- nome-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Nome do Aluno') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" value="{{$aluno->nome}}" name="nome">
                            </div>
                        </div>
                        <!-- /nome-->
                        <!-- curso-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Curso') }}</label>
                            <div class="col-md-6">
                                <input id="curso" type="text" class="form-control" value="{{$aluno->curso}}" name="curso">
                            </div>
                        </div>
                        <!-- /curso-->
                        <!-- turma-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Turma') }}</label>
                            <div class="col-md-6">
                                <input id="turma" type="text" class="form-control" value="{{$aluno->turma}}" name="turma">
                            </div>
                        </div>
                        <!-- /turma-->
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning btn-outline-dark"> <i class="fa fa-save"> </i>
                                    Salvar</button>
                                <a href="{{url('aluno')}}" class="btn btn-danger btn-outline-light"> <i class="fa fa-arrow-left"> </i>
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
