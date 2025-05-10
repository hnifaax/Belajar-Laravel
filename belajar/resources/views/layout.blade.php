<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/style.css') }}">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
 crossorigin="anonymous">
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

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
          <button class="nav-link active rounded-5" fill="current color" aria-selected="true" data-bs-toggle="tab">Home</button>
          </form>
        </li>
        <li class="nav-item">
          <form action="/film">
          <button class="nav-link rounded-5" data-bs-target="#film" fill="current color" aria-selected="true" data-bs-toggle="tab">Film</button>
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



@yield('content')

