@extends ('layout')
@section('title', 'home')

@section('content')
<img class="img-fluid page-header" src="img/ghibli-studio.png" alt="responsive">
  <div class="container col-xxl-8 px-4 py-2">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-4 col-sm-8 col-lg-6 pt-3">
        <img src="img/totoro-.jpg" class="d-block mx-lg-auto img-fluid rounded" alt="responsive" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Little explanation</h1>
        {{-- <h1>selamat datang {{Auth::user()->name}}.</h1> --}}
        <p class="lead">Studio Ghibli, acclaimed Japanese animation film studio that was founded in 1985 by animators and directors Miyazaki Hayao and Takahata Isao and producer Suzuki Toshio. Studio Ghibli is known for the high quality of its filmmaking and its artistry. Its feature films won both critical and popular praise and influenced other animation studios. The headquarters are in Tokyo.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a role="button" class="btn btn-primary btn-lg px-4 me-md-2" href="/about#about">See more Detail >></a>
          <a role="button" class="btn btn-outline-success btn-lg px-4" href="/paints">All Films -></a>
        </div>
      </div>
    </div>

    </div>
    </div>
<div class="container">
  <h5 class="mx-auto">Most Watched</h5>
  <hr>
  
  <div class="row">
    @foreach ($homelist as $item)
        
   
      <div class="col-lg-4 h-100">
        <img class="bd-placeholder-img rounded" width="140" height="190" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false" src="img/{{$item->image}}"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/>
        <h2 class=" my-4 mb-1">{{$item->judul}}</h2>
        <p>{{$item->caption}}</p>
        
      </div><!-- /.col-lg-4 -->
      @endforeach
  </div>  

   
    

</div>@include('.footer')
@endsection

