@extends('adminlte::page')

@section('content')

<div class="container d-flex align-items-center justify-content-center">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom de la rubrique</th>
                <th scope="col">Nom du bouton</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            @foreach($datas as $element)
            <tbody>
              
                    <th scope="row"></th>
                            <td>{{$element->rubrique}}</td>
                            <td>{{$element->btntext}}</td>
                          <td>
                          <a href="/button/{{$element->id}}/edit">
                                <button type="submit" class="btn btn-success">Modifier</button>
                            </a>
                          </td>
                
                        </tbody>
                        @endforeach
                        
                      </table>

@endsection