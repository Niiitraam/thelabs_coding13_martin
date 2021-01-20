@extends('adminlte::page')


@section('content')

<h1 class="text-center">Création d'article</h1>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Date</th>
        <th scope="col">Titre</th>
        <th scope="col">Auteur</th>
        
      </tr>
    </thead>

    <tbody>
      <th scope="row">#</th>
    <form action="/article/{{$edit->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <td><input type="file" name="image" value="{{$edit->image}}"></td>
      <td><input type="text" name="date" value="{{$edit->date}}"></td>
      <td><input type="text" name="titre" value="{{$edit->titre}}"></td>
      <td><input type="text" name="auteur" value="{{$edit->auteur}}"></td>
        
    </tbody>
    <th scope="col">Texte</th>
<td><input type="text" name="texte" value="{{$edit->texte}}"></td>
        
              </table>
        <td><button class="btn btn-success">Modifier</button></td>
      </form>
       



@endsection