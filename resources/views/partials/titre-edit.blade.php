@extends('adminlte::page')


@section('content')

<h1 class="text-center">Titre de la section {{$edit->rubrique}}</h1>

<div class="container d-flex align-items-center justify-content-center">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom de la rubrique</th>
          <th scope="col">Titre</th>
          <th scope="col">action</th>
        </tr>
      </thead>
      <tbody>
        
              <th scope="row"></th>
                      <td>{{$edit->rubrique}}</td>
                      <form action="/titre/{{$edit->id}}" method="POST">
                        @csrf
                        @method('PUT')
                    <td><input type="text" name="titre" value="{{$edit->titre}}"></td>
                    <td>
                        <button type="submit" class="btn btn-success">Modifier</button>
                    </form>
                          
                      
                    </td>
          
                  </tbody>
                </table>

@endsection