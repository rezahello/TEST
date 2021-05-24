


<h6 style="color: blue"> Réza : Session du test " CRUD LARAVEL  / Gestion de contenu" pour HelloCSE</h6>

@extends('back.index')
@section('title')
    Gestion de "Stars"
@endsection
@section('content')

 <div class="main-panel">
    <div class="content-wrapper"> <!-- Page Title Header Starts-->
         <div class="page-header">
          <h4 class="page-title">{{$pagetitle}} </h4>
          </div>   
         
    <nav aria-label="breadcrumb ">
    <ol class="breadcrumb bgcolor">
     <li class="breadcrumb-item active" aria-current="page">Gestion de contenus</li>
     <li class="breadcrumb-item active" aria-current="page">Tous les stars</li>

         <li class="breadcrumb-item"> 
            <a class=" btn btn-primary" href="{{route('admin.stars.create')}}" >  Nouvelle star </a>
           
         </li>  
    
      </ol>
    <hr>
  </nav>
        <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
           <div class="card">
              <div class="card-body">
                   @include('back.messages')
                   <table class="table table-hover">
                      <thead>
                       <tr>
                        <th>image </th>
                        <th>Nom</th>
                         <th>Prenom</th>
                         <th>Gestion</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($stars as $star)
                            <tr>
                              <td>
                                 <img src=" <?php echo '/uploads//'.basename($star->image) ?> "
                                   width="150px" height="150px"  alt="Photo"> 
                              </td>
                               <td>{{$star->nom}}</td>
                               <td>{{$star->prenom}}</td>
                                
                              <td>
                                <a href="{{route('admin.stars.edit',$star->id)}}"
                                 
                                  class="badge badge-success">Editer</a>  

                                    <a href="{{route('admin.stars.destroy',$star->id)}}"
                                    
                                      
                                        onclick="return confirm('Supprimer vraiment ?');"
                                        class="badge badge-warning"> Supprimer </a>
                                        
                              </td>
                                
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$stars->links()}}
                </div>
            </div> 
        </div><!--row -->


    </div> <!--End  wrapper -->
    @include('back.footer')
   
  </div> <!-- end main panel--->
  
@endsection  