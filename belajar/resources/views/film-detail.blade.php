<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | Film</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
 crossorigin="anonymous">

</head>
<body>
  <div class="navbar">
    <div class="sticky-top justify-content-between" style="z-index: 99; position:fixed; width:100%;">
      <header class="d-flex flex-wrap justify-content-between py-2 border-bottom">
        <a href="/home" class="d-flex col-md-3 align-items-center justify-content-start mb-3 mb-md-0 me-md-auto text-dark text-decoration-none" style="margin-left: 5%;">
          <img src="../img/gs-logo.jpg" alt="" width="80">
        </a>
      
        <ul class=" nav nav-pills nav-fill gap-1 p-1 small bg-dark rounded-5 shadow-sm mx-auto text-bold align-items-center text-center" role="tablist"
         style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);">
          <li class="nav-item">
            <form action="/home">
            <button class="nav-link rounded-5" fill="current color" aria-selected="true" data-bs-toggle="tab">Home</button>
            </form>
          </li>
          <li class="nav-item">
            <form action="/film">
            <button class="nav-link active rounded-5" data-bs-target="#film" fill="current color" aria-selected="true" data-bs-toggle="tab">Film</button>
            </form>
          </li>
          <li class="nav-item">
            <form action="/merchandise">
            <button class="nav-link rounded-5" fill="vurrent color" aria-selected="true" data-bs-toggle="tab">Merchandise</button>
            </form>
          </li>
          <li class="nav-item">
            <form action="/about">
            <button class="nav-link rounded-5" fill="current color" aria-selected="true" data-bs-toggle="tab">About</button>
            </form>
          </li>
        </ul>
      
        <div  class="d-flex flex-row-reverse col-md-4 p-1 small text-bold align-items-center text-center me-3"
              style="--bs-nav-link-color: var(--bs-white);">
          <a role="button" class="btn btn-dark rounded-5 text-center" href="/logout">Log Out</a>
        </div>
        
      </header>
    </div>
  </div>

<div id="progress">
  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
  </svg>
</div>

@include('.film-delete')

<div class="container" style="margin-top: 1%;">

<div class="container col-xxl-8 px-4" style="margin-top: 2%;">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      
      <div class="d-grid gap-1 d-md-flex justify-content-between mb-0">
        <div class="d-grip gap-2 d-md-flex"> 
        <a style="text-decoration: none" href="/film" role="button" >
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-arrow-left-circle btn-outline-dark" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
          </svg>
          </a> 
          <a style="text-decoration: none" class="text-muted ps-2 pt-2" href="/film">Film</a> 
          <p class="ps-2 pt-2"> / </p>
          <a style="text-decoration: none" class="text-muted ps-2 pt-2" href="/film/{{$film->id}}">{{$film->judul}}</a>
        </div>
        
        <div class="d-grip d-md-flex">  
        <button type="button" class="btn btn-info px-4 me-sm-2" 
        data-bs-toggle="modal" data-bs-target="#films{{$film->id}}" data-bs-whatever="@getbootstrap">Edit</button>

        <button type="submit" class="btn btn-danger px-4 me-sm-2" data-bs-toggle="modal" data-bs-target="#film{{$film->id}}">Delete</button>
        </div>
      </div>
        <div class="col-lg-6 md-0 ">          
          
            <h1 class="display-5 fw-bold lh-1 mb-3">{{$film->judul}}</h1>
            <p class="lead">Year :{{$film->tahun}}</p> <hr>
            <p class="lead">Rating :{{$film->rating}} <i class="bi bi-star-fill"></i></p> <hr>
            <p class="lead">Director :{{$film->director->director}}</p> <hr>

            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a role="button" class="btn btn-outline-primary btn-lg px-4 me-md-2" href="#sinopsis">Synopsis >></button>
                <a role="button" class="btn btn-outline-success btn-lg px-4 me-md-2" href="#trailer">Trailer -></a>
            </div>
        </div>
        <div class="col-10 col-sm-2 col-lg-6 ml-auto">
          
          <img src="../img/{{$film->image}}" class="d-block mx-lg-auto img-fluid rounded" alt="responsive" width="300" height="200" loading="lazy">
      </div>
    </div>
</div>
<div class="container" id="sinopsis">
    <h2 >Synopsis</h2>
    <p>{{$film->sinopsis}}</p>
    <h2 id="trailer">Trailer</h2>
    <iframe class="mx-auto" width="100%" height="400" src="{{$film->link}}" title="YouTube video player" frameborder="2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>




</div>

<div class="modal fade" id="films{{$film->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Movie</h1>
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/film/{{$film->id}}">
          @csrf    
          {{ method_field('PUT') }}
          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Title" value="{{$film->judul}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Synopsis</label>
            <input type="text" name="sinopsis" class="form-control" id="sinopsis" aria-multiline="true" placeholder="Synopsis" value="{{$film->sinopsis}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Released Year</label>
            <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Year" value="{{$film->tahun}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Rating</label>
            <input type="text" name="rating" class="form-control" id="rating" placeholder="Rating" value="{{$film->rating}}" required>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Image</label><br>
            <img id="output" src="../img/{{$film->image}}" class="img-thumbnail mb-3" width="100" alt="..."/>
            <input type="file" name="image" class="form-control"  id="image" value="{{$film->image}}" onchange="loadFile(event)">
          </div>
          {{-- <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{$film->image}}" required>
          </div> --}}
          <div class="mb-3">
            <label class="form-label">Link</label>
            <input type="text" name="link" class="form-control" id="link" placeholder="Link" value="{{$film->link}}" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Director</label>
            <select name="directors_id" id="director" class="form-select" required>
              <option value="{{$film->director->id}}">{{$film->director->director}}</option>
              @foreach ($director as $item)
                <option value="{{$item->id}}">{{$item->director}}</option>
              @endforeach
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn  col-lg-4 btn-primary">Add</button>
      </div>
    </form>
    </div>
  </div>
</div>

<footer
   class="text-center text-lg-start text-dark mt-5"
   style="background-color: #ECEFF1;"
   >
<!-- Section: Links  -->
<section style="margin-left: 12%; margin-top:5px;">

 <!-- Grid row -->
 <div class="row container text-center text-md-start">
   <!-- Grid column -->
   <div class="col-lg-2 col-xl-3 my-5">
     <!-- Content -->
     
         <img src="../img/logo-footer.png" class="text-center ms-4"  width="200" alt="">
     <p>
        (株式会社スタジオジブリ) Japanese animation studio headquartered in Koganei, Tokyo. <br>
       
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-3 col-lg-2 col-xl-2 mx-auto my-5 ms-5 me-3">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold">FAQ's</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color: #7c4dff; height: 2px"
         />
     <p>
       <a href="/about#history" class="text-dark">What is Studio Ghibli?</a>
     </p>
     <p>
       <a href="/about#nama" class="text-dark">Why Studio Ghibli?</a>
     </p>
     <p>
       <a href="/about#gaya" class="text-dark">How Ghibli Art Style?</a>
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-1 col-lg-1 col-xl-1 my-5 ms-5 me-4">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold">Page</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color: #7c4dff; height: 2px"
         />
     <p>
       <a href="/home" class="text-dark">Home</a>
     </p>
     <p>
       <a href="/film" class="text-dark">Film</a>
     </p>
     <p>
       <a href="/merchandise" class="text-dark">Merchandise</a>
     </p>
     <p>
       <a href="/about" class="text-dark">About</a>
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-6 col-lg-3 col-xl-3 mx-auto mb-md-0 my-5 me-5 ms-5">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold">Contact</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color: #7c4dff; height: 2px"
         />
     <p><i class="bi bi-house "></i> New York, NY 10012, US</p>
     <p><i class="bi bi-envelope mr-3"></i> info@example.com</p>
     <p><i class="bi bi-phone mr-3"></i> + 01 234 567 88</p>
     
       <a class="btn btn-floating mr-3">
         <i class="bi bi-facebook"></i>
       </a>
       <a class="btn  btn-floating mr-3">
         <i class="bi bi-twitter"></i>
       </a>
       <a class="btn btn-floating mr-3">
         <i class="bi bi-google"></i>
       </a>
       <a class="btn btn-floating mr-3">
         <i class="bi bi-instagram"></i>
       </a> 
   </div>
 </div>
 <!-- Grid row -->

</section>
<div
  class="text-center p-2"
  style="background-color: rgba(0, 0, 0, 0.2);"
  >
© 2020 Copyright, inc
</div>

<!-- Copyright -->
</footer>


<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>
<script type="text/javascript" src="/js/app.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
  crossorigin="anonymous"></script>

 <!-- Footer -->
 

</body>
</html>