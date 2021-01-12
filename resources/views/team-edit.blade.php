@extends('adminlte::page')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Photo</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>
        <th scope="col">Fonction</th>
        
      </tr>
    </thead>
    <form action="/team/{{$edit->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    <tbody>
      <th scope="row">#</th>
        <h3 class="text-center">Ajout et modification de témoignages</h3>
      <td><input type="file" name="photo" value="{{$edit->photo}}"></td>
      <td><input type="text" class="w-100" name="nom" value="{{$edit->nom}}"></td>
      <td><input type="text" name="prenom" value="{{$edit->prenom}}"></td>
      <td><input type="text" name="fonction" value="{{$edit->fonction}}"></td>
    </tbody>
              </table>
              <button type="submit" class="btn btn-success">Modifier</button>
                  </form>

@endsection