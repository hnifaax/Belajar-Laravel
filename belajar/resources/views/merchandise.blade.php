<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | Merchandise</title>
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
          <img src="img/gs-logo.jpg" alt="" width="80">
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
            <button class="nav-link rounded-5" data-bs-target="#film" fill="current color" aria-selected="true" data-bs-toggle="tab">Film</button>
            </form>
          </li>
          <li class="nav-item">
            <form action="/merchandise">
            <button class="nav-link active rounded-5" fill="vurrent color" aria-selected="true" data-bs-toggle="tab">Merchandise</button>
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
      <div class=" d-flex justify-content-between bg-dark">
        <h3 class="container my-1 mb-1 text-white"> UNOFFICIAL</h3>
        @if (Session::has('status'))
            <div class="alert alert-success col-lg-7 p-2 mt-2 text-center" role="alert">
               <i class="bi bi-check-circle-fill"></i>
                {{Session::get('message')}}
            </div>
        @endif
        <a class="ms-5" href="/cart">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart4 text-white container mt-1" viewBox="0 0 16 16">
          <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
        </svg>
      </a>
      </div>
    </div>
  </div>


<div id="progress">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
    </svg>

</div>



<main style="margin-top: 4%">

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="margin-top: -2%;">
      <div class="carousel-item active" data-bs-interval="3000">
        <img class="bd-placeholder-img-mask" src="img/spirited-hoodie.png" width="100%" style="background-color: rgba(0, 0, 0, 0.6);" height="30%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="carousel-caption">
            <h1 class="text-black">H O O D I E</h1>
          </div>
        
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img class="bd-placeholder-img" src="img/mononoke-paint.png" width="100%" height="30%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1 class="text-white">P A I N T</h1>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img class="bd-placeholder-img" src="img/ghibli-sweater.png" width="100%" height="30%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1 class="text-black">S W E A T E R</h1>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<div class="container my-5">
  <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-4">
    @foreach($merchlist as $data)
    <div class="col">
      <div class="card h-100">
        <div class="card-header">
        <div class="header-img">
        <a href="/merch/{{$data->id}}"><img src="img/{{$data->image}}" class="card-img-top" alt="..."></a>
        </div>
        </div>
        <div class="card-body">
          <h5 class="card-title"><b>{{$data->name}}</b></h5>
          <p class="card-text">Price : Rp. {{$data->harga}}</p>
        </div>
      </div>
    </div> 
    @endforeach
  </div>

</div>

@include('.footer')

<script type="text/javascript" src="/js/app.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
  crossorigin="anonymous"></script>
 <!-- Footer -->
 

</body>
</html>