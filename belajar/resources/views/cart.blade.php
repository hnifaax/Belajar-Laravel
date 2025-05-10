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
            <button class="nav-link rounded-5" fill="vurrent color" aria-selected="true" data-bs-toggle="tab">Merchandise</button>
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
      <div class="d-flex gap-1 d-md-flex justify-content-between mb-2" style="margin-left: 2%">
        <div class="d-grip gap-2 d-md-flex"> 
            <a style="text-decoration: none" href="/merchandise" role="button" >
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="bi bi-arrow-left-circle btn-outline-dark mt-2" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
              </svg>
            </a>
            <div >
                <h2 class="text-center mt-2">UNOFFICIAL</h2>
            </div>
        </div> 
        <div>
          @if (Session::has('status'))
            <div class="alert alert-success col-lg-15 p-2 me-5 mb-2 mt-2 text-center" role="alert">
               <i class="bi bi-check-circle-fill"></i>
                {{Session::get('message')}}
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>


<div id="progress">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
    </svg>
</div>
<div  style="margin-top: 8%; margin-right:0%"> 
    @if (empty($cartdetaillist) || count($cartdetaillist) ==0)
        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th class="text-dark">h</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><h1 class="text-center">No Product Added To Cart</h1></th>
                </tr>
            </tbody>
        </table>
    @else
    @php
            $grandtotal = 0
        @endphp
<table class="table table-hover" >
    <thead>
        <tr class="table-dark">
            <th>No</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th></th>
        </tr>
        
    </thead>
    <tbody>
        @foreach ($cartdetaillist as $item)
            <tr class="table-light">
                <td class="mb-3">{{$loop->iteration}}</td>
                <td><img src="img/{{$item->merch->image}}" width="90" alt="">{{$item->merch->name}}</td>
                <td>Rp. {{$item->merch->harga}}</td>
                <td class="cart-product-quantity" width="140px">
                  <div class="input-group quantity">
                    @if ($item->jumlah>1)
                    <a role="button" class="btn btn-dark" href="/cart/{{$item->id}}/-1">-</a>
                    @endif
                    <input type="text" class="qty-input form-control" width="130px" value="{{$item->jumlah}}">
                    <a role="button" class="btn btn-dark" href="cart/{{$item->id}}/1">+</a>                      
                  </div>
                </td>
                <td>Rp. {{$item->merch->harga*$item->jumlah}}</td>
                <td>
                    <button type="submit" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#cart{{$item->id}}"><i class="bi bi-trash ms-1 text-center"></i></button>
                </td>
            </tr>
            @php
                $grandtotal +=  $item->jumlahHarga;
            @endphp
        @endforeach
    </tbody>
        <tr class="table-info">
            <th></th>
            <th></th>
            <th></th>
            <th colspan="1">Sub Total</th>
            <th>Rp. {{$grandtotal}}</th>
            <th></th>  
        </tr>
     @endif
</table>
</div>



{{-- <script type="text/javascript" src="/js/quantity.js"></script> --}}
@include('.cart-delete')
@include('.footer')