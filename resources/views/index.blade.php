<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja Bem Vindo</title>
</head>
@extends('layouts.app')

@section('content')

    <div class="row align-items-center">
        <div class="col">
        </div>
        <div class="col">
            <a type="button" class="btn btn-warning btn-outline-dark btn-lg btn-block" href="{{ route("aluno.home") }}">ALUNOS</a>
            <a type="button" class="btn btn-warning btn-outline-dark btn-lg btn-block" href="{{ route("curso.home")}}">CURSOS</a>
            <a type="button" class="btn btn-warning btn-outline-dark btn-lg btn-block" href="{{ route("turma.home")}}">TURMAS</a>
        </div>
        <div class="col">
        </div>
    </div>

@endsection
