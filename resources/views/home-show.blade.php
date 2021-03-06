@extends('adminlte::page')

@section('content')

<h1 class="text-center">Home</h1>

<div class="row">
    <div class="col-2">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-presentation-list" data-toggle="list" href="#list-presentation" role="tab" aria-controls="home">Présentation</a>
        <a class="list-group-item list-group-item-action" id="list-video-list" data-toggle="list" href="#list-video" role="tab" aria-controls="profile">Vidéo</a>
        <a class="list-group-item list-group-item-action" id="list-temoignage-list" data-toggle="list" href="#list-temoignage" role="tab" aria-controls="messages">Témoignages</a>
        <a class="list-group-item list-group-item-action" id="list-services-list" data-toggle="list" href="#list-services" role="tab" aria-controls="settings">Services</a>
        <a class="list-group-item list-group-item-action" id="list-team-list" data-toggle="list" href="#list-team" role="tab" aria-controls="settings">Team</a>
      </div>
    </div>
    <div class="col-10">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-presentation" role="tabpanel" aria-labelledby="list-presentation-list">
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
                          </table>
                          <button type="submit" class="btn btn-success">Modifier</button>
                              </form>
                                    
                                
        </div>
        <div class="tab-pane fade" id="list-video" role="tabpanel" aria-labelledby="list-video-list">
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
        <div class="tab-pane fade" id="list-temoignage" role="tabpanel" aria-labelledby="list-temoignage-list">
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
        <div class="tab-pane fade" id="list-services" role="tabpanel" aria-labelledby="list-services-list">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Icone</th>
                <th scope="col">Titre</th>
                <th scope="col">Texte</th>
                
              </tr>
            </thead>
            <form action="/services" method="POST">
                @csrf
                @method('POST')
            <tbody>
              <th scope="row">#</th>
                <h3 class="text-center">Ajout et modification de services</h3>
                <td><input type="text" name="icone"></td>
                <td><input type="text" name="titre_service"></td>
                <td><input type="text" name="texte_service"></td>
            </tbody>
                      </table>
                      <button type="submit" class="btn btn-success">Ajouter</button>
                          </form>
                      <a href="/services/create" class="btn btn-primary">Voir tous les services</a>
        </div>
        <div class="tab-pane fade" id="list-team" role="tabpanel" aria-labelledby="list-team-list">
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
                    <form action="/team" method="POST" enctype="multipart/form-data">
                        @csrf
                    <tbody>
                      <th scope="row">#</th>
                        <h3 class="text-center">Ajout de profil à la team</h3>
                        <td><input type="file" name="photo"></td>
                        <td><input type="text" class="w-100" name="prenom"></td>
                        <td><input type="text" name="nom"></td>
                        <td><input type="text" name="fonction"></td>
                    </tbody>
                              </table>
                              <button type="submit" class="btn btn-success">Ajouter</button>
                                  </form>
                              <a href="/team" class="btn btn-primary">Voir touts les profils</a>
        </div>

              
      </div>
    </div>
  </div>

@endsection