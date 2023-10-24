@extends('layouts.app')

@section('content')
<div class="ajouter">
<h1>{{$post->title}}</h1>
    <small>ecrit le{{$post->created_at}} </small>
    <div>
        {{!!$post->body!!}}
    </div>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-lg btn-primary">Editer utilisateur</a>
                {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST']) !!} <br>
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Supprimer', ['class' => 'btn btn-lg btn-danger'])}}
                {!! Form::close() !!}
        @endif
    @endif
    <div>
@endsection

<style>
      .ajouter{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
</style>