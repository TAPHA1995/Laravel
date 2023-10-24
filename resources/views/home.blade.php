@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <a href="/posts/create" class="btn btn-lg btn-primary" style="margin-bottom:15px">Ajouter un utilisateur </a>
                
                  <hr>
                  <h3>Vos utilisateurs</h3>

                  @if(count($posts) > 0)
                  <table class="table table-striped">
                    <tr>
                        <th>Nom et prénom</th>
                        <th>Last login</th>
                        <th>Status</th>
                        <th>Editer</th>
                        <th>Supprimer</th>
                    </tr>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td><a href="" class="btn btn-info">12/052022 </a></td>
                        <td><a href="" class="btn btn-info">Inactive </a></td>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Editer </a></td>
                        <td>
                            {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST'])!!} 
                            {{Form::hidden('_method', 'DELETE')}} 
                            {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
                            {!!Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                    </table>
                    @else
                    <p>Vous n'avez aucun utilisateur</p>
                    @endif
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
