@extends('layouts.App')

@section('content')
<div class="ajouter">
<h1>Ajouter un utilisateur</h1>
{!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('title', 'nom et prénom')}} <br>
    {{Form::text('title', '', ['class' => 'Form-control', 'placeholder' => 'Nom et prénom '])}}
</div>
<div class="form-group">
    {{Form::label('body', 'email')}} <br>
    {{Form::text('body', '', ['class' => 'Form-control', 'placeholder' => 'Email'])}}
</div>
{{Form::submit('ajouter utilisateur', ['class' => 'btn btn-lg btn-primary'])}}
{!! Form::close() !!} 
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