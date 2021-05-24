@extends('back.index')

@section('title')
EDIT 
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Réza : Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                <h4 class="page-title"> {{$pagetitle}}</h4>
                </div>
            </div>

        </div>
        <!-- Page Title Header Ends-->

        <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @include('back.messages')
                        <form action="{{route('admin.stars.update', $star->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Nom </label>
                                <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom"
                                    value="{{$star->nom}}">
                                @error('nom')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Prenom </label>
                                <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                    value="{{$star->prenom}}">
                                @error('prenom')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="title">Description</label>
                                <textarea id="editor" type="text"
                                    class="form-control @error('description') is-invalid @enderror"
                                    name="description">{{$star->description}}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                              <div class="form-group">
                                <label for="title">Image chosie </label>  <p>"{{$star->image}}"</p>

                               <img src=" <?php echo '/uploads//'.basename($star->image) ?> "
                                    width="100px" height="100px"  alt="Photo"> 


                               <input id="holder" type="file" class="form-control @error('image') is-invalid @enderror" name="image"  accept="image/png, image/jpeg"
                                value= "{{$star->image}}">
                                @error('image')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror


                            </div>
      
                            <div class="form-group">
                                <label for="title"></label>
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                                <a href="{{route('admin.stars')}}" class="btn btn-warning"> Retour </a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    @include('back.footer')
</div>
@endsection