<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <title> @yield('title') </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{url('/back/assets/css/shared/style.css')}}">
    <link rel="stylesheet" href="{{url('/back/assets/css/demo_1/style.css')}}">
    <link rel="shortcut icon" href="{{url('/back/assets/images/favicon.ico')}}">


</head>

<body>
  <div class="container-scroller">
        <div class="container-fluid page-body-wrapper ">
        @include('back.sidebar')
            @yield('content')
          </div> 
       
  </div> 
 
  
</body>

</html>