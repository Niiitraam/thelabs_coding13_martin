@extends('adminlte::page')

@section('content')

<h1 class="text-center">Tous les Témoignages</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Photo</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">Fonction</th>
        <th scope="col">Témoignage</th>
        <th scope="col"></th>
        <th scope="col"></th>
        
      </tr>
    </thead>
        @foreach($datas as $data)
    <tbody>
      <th scope="row">#</th>
        <td><p>{{$data->photo}}</p></td>
        <td><p>{{$data->nom}}</p></td>
        <td><p>{{$data->prenom}}</p></td>
        <td><p>{{$data->fonction}}</p></td>
        <td><p>{{$data->temoignage}}</p></td>
        <td><a href="/temoignage/{{$data->id}}/edit" class="btn btn-primary">Voir</a></td>
        <td>
        <form action="/temoignage/{{$data->id}}" method="post">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger">Supprimer</button>
            </form>
            
        </td>
    </tbody>
    @endforeach
              </table>

@endsection