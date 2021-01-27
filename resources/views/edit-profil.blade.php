@extends('adminlte::page')

@section('content')

<h1 class="text-center">Modification de {{$data->prenom}} {{$data->name}}</h1>


<div class="container d-flex align-items-center justify-content-center">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Email</th>
          <th scope="col">Role</th>
          <th scope="col"></th>
        </tr>
      </thead>
      
      <tbody>
        <form action="/user/{{$data->id}}" method="POST">
            @csrf
            @method('PUT')
              <th scope="row"></th>
                    <td><input type="text" name="name" value="{{$data->name}}"></td>
                    <td><input type="text" name="prenom" value="{{$data->prenom}}"></td>
                    <td><input type="text" name="email" value="{{$data->email}}"></td>
                    <td><input type="text" name="role_id" value="{{$data->role_id}}"></td>
                        <td>
                            <button type="submit" class="btn btn-success">Modifier</button>
                            </td>
                    </form>
          
                  </tbody>
                 
                  
                </table>


@endsection