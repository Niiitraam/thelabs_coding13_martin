@extends('adminlte::page')

@section('content')

<h1 class="text-center">Tous les profils</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Photo</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">Fonction</th>
        <th scope="col"></th>
        <th scope="col"></th>
        
      </tr>
    </thead>
        @foreach($team as $data)
    <tbody>
      <th scope="row">#</th>
        <td><p>{{$data->photo}}</p></td>
        <td><p>{{$data->nom}}</p></td>
        <td><p>{{$data->prenom}}</p></td>
        <td><p>{{$data->fonction}}</p></td>
        <td><a href="/team/{{$data->id}}/edit" class="btn btn-primary">Voir</a></td>
        <td>
        <form action="/team/{{$data->id}}" method="post">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger">Supprimer</button>
            </form>
            
        </td>
    </tbody>
    @endforeach
              </table>


@endsection