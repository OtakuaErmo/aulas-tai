<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar - Curso</title>
</head>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar CURSO') }}</div>

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
                    <form action="{{action('CursoController@update')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$curso->id}}" />
                        <!-- nome-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Nome do Curso') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" value="{{$curso->nome}}" name="nome">
                            </div>
                        </div>
                        <!-- /nome-->
                        <!-- abv-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('Abreviatura') }}</label>
                            <div class="col-md-6">
                                <input id="abreviatura" type="text" class="form-control" value="{{$curso->abreviatura}}" name="abreviatura">
                            </div>
                        </div>
                        <!-- /abv-->
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning btn-outline-dark"> <i class="fa fa-save"> </i>
                                    Salvar</button>
                                <a href="{{url('curso')}}" class="btn btn-danger btn-outline-light"> <i class="fa fa-arrow-left"> </i>
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

