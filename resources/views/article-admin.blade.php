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
      <form action="/article" method="post" enctype="multipart/form-data">
        @csrf
        <td><input type="file" name="image"></td>
        <td><input type="text" name="date"></td>
        <td><input type="text" name="titre"></td>
        <td><input type="text" name="auteur"></td>
        
    </tbody>
    <thead>
      <tr>
    <th scope="col">Texte</th>
    </tr>
    </thead>
    <tbody>
      <td><input type="text" name="texte"></td>
    </tbody>
    
        
              </table>
        <td><button class="btn btn-success">Créer</button></td>
            <td><a href="/article/create" class="btn btn-primary">Voir</a></td>
      </form>
       



@endsection