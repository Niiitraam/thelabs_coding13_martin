@extends('adminlte::page')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Icone</th>
        <th scope="col">Titre</th>
        <th scope="col">Texte</th>
        
      </tr>
    </thead>
    <form action="/services/{{$edit->id}}" method="POST">
        @csrf
        @method('PUT')
    <tbody>
      <th scope="row">#</th>
        <h3 class="text-center">Ajout et modification de témoignages</h3>
      <td><input type="text" name="icone" value="{{$edit->icone}}"></td>
      <td><input type="text" class="w-100" name="titre_service" value="{{$edit->titre_service}}"></td>
      <td><input type="text" name="texte_service" value="{{$edit->texte_service}}"></td>
    </tbody>
              </table>
              <button type="submit" class="btn btn-success">Modifier</button>
                  </form>

@endsection