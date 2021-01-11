@extends('adminlte::page')

@section('content')

<h1 class="text-center">Home</h1>

<div class="row">
    <div class="col-2">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Présentation</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Vidéo</a>
        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Témoignages</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
      </div>
    </div>
    <div class="col-10">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Texte</th>
                    
                  </tr>
                </thead>
                <form action="/homeS1/{{$text[0]->id}}" method="POST">
                    @csrf
                    @method('PUT')
                <tbody>
                  
                        <th scope="row">Texte 1</th>
                
                                  <h3 class="text-center">Modification de text</h3>
                            <td><input type="text" class="w-100" name="text1" value="{{$text[0]->text1}}"></td>
                              
                            </tbody>
                            <tbody>
                  
                                <th scope="row">Texte 2</th>
                                    <td><input type="text" class="w-100" name="text2" value="{{$text[0]->text2}}"></td>
                                      
                                    </tbody>
                            <tbody>
                  
                                <th scope="row">Bouton</th>
                                    <td><input type="text" class="w-100" name="btntext" value="{{$text[0]->btntext}}"></td>
                                      
                                    </tbody>
                          </table>
                          <button type="submit" class="btn btn-success">Modifier</button>
                              </form>
                                    
                                
        </div>
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Lien</th>
                            
                          </tr>
                        </thead>
                        <form action="/video/{{$video[0]->id}}" method="POST">
                            @csrf
                            @method('PUT')
                        <tbody>
                          
                                <th scope="row">Lien de la vidéo</th>
                        
                                          <h3 class="text-center">Modification de la vidéo</h3>
                                    <td><input type="text" class="w-100" name="lien" value="{{$video[0]->lien}}"></td>
                                      
                                    </tbody>
                                  </table>
                                  <button type="submit" class="btn btn-success">Modifier</button>
                                      </form>
        </div>
        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Fonction</th>
                        <th scope="col">Témoignage</th>
                        
                      </tr>
                    </thead>
                    <form action="/temoignage" method="POST" enctype="multipart/form-data">
                        @csrf
                    <tbody>
                      <th scope="row">#</th>
                        <h3 class="text-center">Ajout et modification de témoignages</h3>
                        <td><input type="file" name="photo"></td>
                        <td><input type="text" class="w-100" name="nom" value=""></td>
                        <td><input type="text" name="prenom"></td>
                        <td><input type="text" name="fonction"></td>
                        <td><input type="text" name="temoignage"></td>
                    </tbody>
                              </table>
                              <button type="submit" class="btn btn-success">Ajouter</button>
                                  </form>
                              <a href="/temoignage" class="btn btn-primary">Voir tous les témoignages</a>
        </div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
      </div>
    </div>
  </div>

@endsection