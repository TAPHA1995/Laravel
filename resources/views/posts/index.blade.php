@extends('layouts.app')

@section('content')
<div class="ajouter">
    <h1> les Utilisateurs</h1>
    <br>
    <a href="/posts/create" class="btn btn-lg btn-primary" style="margin-buttom:15px;"> Ajouter un utilisateur</a>
    <br>
    @if(count($posts) >= 1)
    @foreach($posts as $post)
    <br> 
    <div class="well">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>ecrit le{{$post->created_at}} </small>
        <p>{{$post->body}}</p>
        <p><a href="/posts/{{$post->id}}">Lire la suite...</a></p>
        <hr>
    </div>
    @endforeach
    @else
    <p>Aucun utilisateur existant</p>
    @endif
</div>
@endsection
<style>
    .ajouter{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
</style>