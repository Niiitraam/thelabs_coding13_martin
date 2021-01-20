@extends('adminlte::page')

@section('content')

<h1 class="text-center">Modification de la map</h1>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Lien</th>
            
          </tr>
        </thead>
    <form action="/map/{{$map[0]->id}}" method="POST">
            @csrf
            @method('PUT')
        <tbody>
                <th scope="row">Lien de la map</th>           
                    <td><input type="text" class="w-100" name="map" value="{{$map[0]->lien}}"></td>
                      
                    </tbody>
                  </table>
                  <button type="submit" class="btn btn-success">Modifier</button>
                </form>
</div>

@endsection