<!DOCTYPE html>
<html lang="en">
<head>

 

  <title>Un test pour HelloCSE</title>
  <meta charset="UTF-8">

  <meta name=”csrf-token” content=”{{ csrf_token() }}”>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
function showHint(str,str1,str2) {
         var str3 = "<?php echo '/uploads/' ?>";
     str3=str3+str2
     show(str3);
  document.getElementById("info").innerHTML = '<h2 style="font-weight: bold"; >'+str+'</h2>' +'<br>'+str1 ;
     
    }
  function show(src1) {
      //supprimer le contenu de DIV
      var element = document.getElementById("image");
      while (element.firstChild) {
       element.removeChild(element.firstChild);
      }
    var img = document.createElement("img");
    //img.setAttribute("src",src1);
    img.src = src1;
    img.width = 150;
    img.height =150;
    img.alt = "mon_image";
    img.style.position="float:left ";
    img.style.border = "5px solid lightgray";
    img.style.boxShadow="5px 5px 5px gray";
    //---------------------------------
    var block = document.getElementById("image");
    block.appendChild(img);
   }
</script>
{{---------------------------------------------------------------------------------------}} 
<style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Page Test pour :</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="https://www.hellocse.fr/">HelloCSE</a>
      </li>
     </ul>
  </div>  
</nav>
<div class="container" style="margin-top:20px">
  <div class="row">
    <div  class="col-sm-4">
      <h2>Nos stars</h2>
   @foreach ($stars as $star)
    <div> 
    <ul class="nav nav-pills flex-column">
     <li class="nav-item">
     <input type="button" class="list-group-item list-group-item-action list-group-item-info" value="{{$star->prenom.' '.$star->nom}}"
                          onclick="showHint('{{$star->prenom.'  '.$star->nom}}','{{$star->description}}','{{$star->image}}')">
    </li>
    </ul>
     </div> 
   @endforeach
   
  </div>
    <div class="col-sm-8" >
      <h2 style="font-weight: bold;">Profile Browser</h2>
 
{{--------------}}
<div>
  <div id="image" style="float: left; margin-right :10px" ></div>
  <div id="info" style="margin:15px 30px -15px 0px" ></div>
<br>
</div>
</div>
{{--------------------------}}
 
  </div>
</div>



</body>
</html>
