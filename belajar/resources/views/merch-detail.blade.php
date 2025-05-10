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
      
        <div  class="d-flex flex-row-reverse col-md-4 p-1 small text-bold align-items-center text-center"
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



<div class="container" style="margin-top: 1%;">

<div class="container col-xxl-8 px-4" style="margin-top: 2%;">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      
      <div class="d-grid gap-1 d-md-flex justify-content-start mb-0">
        <div class="d-grip gap-2 d-md-flex"> 
        <a style="text-decoration: none" href="/merchandise" role="button" >
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-arrow-left-circle btn-outline-dark" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
          </svg>
          </a> 
          <a style="text-decoration: none" class="text-muted ps-2 pt-2" href="/merchandise">Merchandise</a> 
          <p class="ps-2 pt-2"> / </p>
          <a style="text-decoration: none" class="text-muted ps-2 pt-2" href="/merch/{{$merch->id}}">{{$merch->name}}</a>
        </div>
      </div>
        <div class="col-lg-6 md-0 ">          
          <form action="/cart/{{$merch->id}}" method="POST">
            @csrf
            <h1 class="display-5 fw-bold lh-1 mb-3">{{$merch->name}}</h1>
            <p class="lead">Price : Rp. {{$merch->harga}}</p> <hr>
            <div class="mb-3 row">
                <p class="col-sm-2 col-form-label lead">Order</p>
                <div class="col-sm-10">
                  <input type="number" min="1" value="1" name="order" class="form-control" id="stok">
                </div>
              </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-outline-primary btn-lg px-4 me-md-2">Add To Cart >></button>
            </div></form>
        </div>
        <div class="col-10 col-sm-2 col-lg-6 ml-auto">
          
          <img src="../img/{{$merch->image}}" class="d-block mx-lg-auto img-fluid rounded" alt="responsive" width="300" height="200" loading="lazy">
      </div>
    
    </div>
</div>
</div>



<footer
   class="text-center text-lg-start text-dark mt-5"
   style="background-color: #ECEFF1;"
   >
<!-- Section: Links  -->
<section style="margin-left: 7%; margin-top:5px;">

 <!-- Grid row -->
 <div class="row container text-center text-md-start">
   <!-- Grid column -->
   <div class="col-md-3 col-lg-4 col-xl-3 mx-auto justify align-item-center  my-5">
     <!-- Content -->
     
         <img src="../img/logo-footer.png" class="text-center" width="200" alt="">
     <p class="justify-content text-center">
       Here you can use rows and columns to organize your footer
       content. Lorem ipsum dolor sit amet, consectetur adipisicing
       elit.
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-3 col-lg-2 col-xl-2 mx-auto my-5">
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
   <div class="col-md-3 col-lg-2 col-xl-2 mx-auto my-5">
     <!-- Links -->
     <h6 class="text-uppercase fw-bold">Useful links</h6>
     <hr
         class="mb-4 mt-0 d-inline-block mx-auto"
         style="width: 60px; background-color: #7c4dff; height: 2px"
         />
     <p>
       <a href="#!" class="text-dark">Your Account</a>
     </p>
     <p>
       <a href="#!" class="text-dark">Become an Affiliate</a>
     </p>
     <p>
       <a href="#!" class="text-dark">Shipping Rates</a>
     </p>
     <p>
       <a href="#!" class="text-dark">Help</a>
     </p>
   </div>
   <!-- Grid column -->

   <!-- Grid column -->
   <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 my-5">
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

<script type="text/javascript" src="/js/app.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
  crossorigin="anonymous"></script>

 <!-- Footer -->
 

</body>
</html>