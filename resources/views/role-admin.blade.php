@extends('adminlte::page')

@section('content')

<h1 class="text-center">Tous les utilisateurs</h1>


<div class="container d-flex align-items-center justify-content-center">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
        </tr>
      </thead>
      @foreach($datas as $element)
      <tbody>
        
              <th scope="row"></th>
                      <td>{{$element->name}}</td>
                      <td>{{$element->prenom}}</td>
                      <td>{{$element->email}}</td>
                      <td>{{$element->role_id}}</td>
                    <td>
                    <a href="/user/{{$element->id}}/edit">
                          <button type="submit" class="btn btn-success">Modifier</button>
                      </a>
                    </td>
          
                  </tbody>
                  @endforeach
                  
                </table>

@endsection