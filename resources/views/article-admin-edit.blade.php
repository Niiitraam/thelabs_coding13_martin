@extends('adminlte::page')

@section('content')

<h1 class="text-center">Modification de l'article</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Date</th>
        <th scope="col">Titre</th>
        <th scope="col">Auteur</th>
         <th scope="col">Texte</th>
         <th scope="col"></th>
         <th scope="col"></th>
      </tr>
    </thead>
        @foreach($datas as $element)
    <tbody>
      <th scope="row">#</th>
      <td>{{$element->image}}</td>
      <td>{{$element->date}}</td>
      <td>{{$element->titre}}</td>
      <td>{{$element->auteur}}</td>
      <td>{{$element->texte}}</td>
      <td>
        @if ($element->check == 'oui')
            L'article a été publié
        @else
            <form action="/articleEdit/{{$element->id}}" method="post">
          @csrf
          <input type="text" class="d-none" value="oui" name="check">
          <button type="submit" class="btn btn-warning">Publier</button>
        </form>
        @endif
        
        </td>
    
        <td><a href="/article/{{$element->id}}/edit" class="btn btn-primary">Voir</a></td>
        <td>
        <form action="/article/{{$element->id}}" method="post">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger">Supprimer</button>
            </form>
            
        </td>
    </tbody>
    @endforeach
              </table>

@endsection