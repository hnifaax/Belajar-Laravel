
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
      <div class="container d-flex justify-content-between">
        <h2 class="pt-3 pb-3" id="top">MOVIES</h2>
        <form action="" method="GET" class="d-flex" role="search">
            <div class="search-box bg-dark">
              <button type="button" class="btn">
                <div class="mb-2">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search text-white" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                  </svg>
                </div>
              </button>
            <input type="text" placeholder="search here..." name="keyword" class="search-input rounded-5 ">
            </div>
        </form>
        @if ($errors->any())
              <div class="alert alert-danger col-lg-7 p-2">
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
                </ul>
              </div>
        @endif
        @if (Session::has('status'))
            <div class="alert alert-success col-lg-7 p-2 mt-3 mb-3 text-center" role="alert">
               <i class="bi bi-check-circle-fill"></i>
                {{Session::get('message')}}
            </div>
        @endif
        <button type="button" class="btn btn-info btn-line-height mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-plus-circle-fill"></i> Add Movie</button>
      
      </div>
      
      
    </div>
  </div>

<div id="progress">
  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
  </svg>

</div>

<div class="container" style="margin-top: 10%;">
  <hr>
  


<div class="row row-cols-2 row-cols-md-4 g-4">
  @foreach ($filmlist as $data)
  <div class="col">
    <a class="card2 h-100" href="/film/{{$data->id}}">
      <img src="img/{{$data->image}}" class="card-img-top rounded" alt="...">
       <h5 class="card-title my-3 text-black">{{$data->judul}}</h5>
       <p class="text-dark">{{$data->tahun}} | Rating : {{$data->rating}}</p>
       {{-- <form action="/film/{{$data->id}}"> --}}
       {{-- <button type="submit" data-bs-toggle="modal" data-bs-target="#film{{$data->id}} class="go-corner" >
        <div class="go-arrow">
          <i class="bi bi-trash"></i>
        </div>
      </button> --}}
    {{-- </form> --}}
    </a>
  </div>
@endforeach
  
</div>
<br>
{{$filmlist->links()}}
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Movie</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="films" method="POST" enctype="multipart/form-data">
          @csrf    
          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Title" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Synopsis</label>
            <input type="text" name="sinopsis" class="form-control" id="sinopsis" placeholder="Synopsis" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Released Year</label>
            <input type="text" name="tahun" class="form-control" id="tahun" placeholder="Year" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Rating</label>
            <input type="text" name="rating" class="form-control" id="rating" placeholder="Rating" required>
          </div>
          
          <div class="mb-3">
            <label for="image" class="form-label">Image</label><br>
            <img id="output" class="img-thumbnail mb-3" width="100" alt="..."/>
            <input type="file" name="image" class="form-control"  id="image" onchange="loadFile(event)">
          </div>
          <div class="mb-3">
            <label class="form-label">Link</label>
            <input type="text" name="link" class="form-control" id="link" placeholder="Link" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Director</label>
            <select name="directors_id" id="director" class="form-select" required>
              <option selected="">Select One</option>
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


<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

    
@include('.footer')




    
