@extends('layouts.App')

@section('content')
<div class="ajouter">
    <h1>Ajout utilisateur</h1>
    {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Non et prénom')}} <br>
        {{Form::text('title', $post->title, ['class' => 'Form-control', 'placeholder' => 'le nom et prenom ...'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'email')}} <br>
        {{Form::text('body', $post->body, ['class' => 'Form-control', 'placeholder' => 'Eami'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('ajouer utilisateur', ['class' => 'btn btn-lg btn-primary'])}}
    {!! Form::close() !!}
    @endsection
<div>
<style>
     .ajouter{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
</style>