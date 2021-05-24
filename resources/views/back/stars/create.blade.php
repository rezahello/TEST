@extends('back.index')

@section('title')
Nouvelle Star
@endsection

@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <!-- Réza : Page Title Header Starts-->
        <div class="row page-title-header">
            <div class="col-12">
                <div class="page-header">
                    <h4 class="page-title">Nouvelle Star</h4>
                </div>
            </div>

        </div>
        <!-- Page Title Header Ends-->


        <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @include('back.messages')
                        <form action="{{route('admin.stars.store')}}" method="POST"  enctype="multipart/form-data" > 
                            @csrf
                            <div class="form-group">
                                <label for="title">Nom </label>
                                <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom"
                                    value="{{old('nom')}}">
                                @error('nom')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="title">Prenom </label>
                                <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                    value="{{old('prenom')}}">
                                @error('prenom')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>

                          <div class="form-group">
                                <label for="title">Description </label>
                                <textarea id="editor" type="text"
                                    class="form-control @error('description') is-invalid @enderror"
                                    name="description">{{old('description')}}</textarea>
                                @error('description')
                                <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        
                            
                            <div class="form-group">
                                <label for="title">Image </label>
                           
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"  
                                    value="{{old('image')}}"    value="{{old('image')}}"      >

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