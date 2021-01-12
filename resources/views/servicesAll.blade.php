@extends('adminlte::page')

@section('content')

<h1 class="text-center">Tous les services</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Icone</th>
        <th scope="col">Titre</th>
        <th scope="col">Service</th>
        <th scope="col"></th>
        <th scope="col"></th>
        
      </tr>
    </thead>
        @foreach($datas as $data)
    <tbody>
      <th scope="row">#</th>
        <td><p>{{$data->icone}}</p></td>
        <td><p>{{$data->titre_service}}</p></td>
        <td><p>{{$data->texte_service}}</p></td>
        <td><a href="/services/{{$data->id}}/edit" class="btn btn-primary">Voir</a></td>
        <td>
        <form action="/services/{{$data->id}}" method="post">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger">Supprimer</button>
            </form>
            
        </td>
    </tbody>
    @endforeach
              </table>

@endsection