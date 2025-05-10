<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | Film</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">


    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
 crossorigin="anonymous">

</head>
<body class="login">
<div class="container text-center  justify-content-center align-items-center">
    @if (Session::has('status'))
        <div class="alert alert-danger" role="alert">
            {{Session::get('message')}}
        </div>
    @endif
    <div class="card3">
        <form method="POST" action="" id="loginForm" class="loginForm">
            @csrf
          <img class="mb-4 my-2" src="img/gs-logo.jpg" alt="" width="200">
          <h1 class="h3 mb-3 fw-normal">Please Log in</h1>
      
          <div class="form-floating mb-4 justify-content-center  align-items-center">
            <input type="email" name="email" value="{{Session::get('email')}}" class="email form-control" id="email" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-5">
            <input type="password" name="password" class="password form-control" id="Password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
          </div>
      
          
          <button class="btn3 btn btn-lg btn-light rounded-5 text-white" id="btn3" type="submit" disabled>Log In </button><br>
          <a href="/signup">Don't have account yet?</a>
          <p class="mt-3 mb-3 text-muted">&copy; 2023</p>
        </form>
    </div>
</div>

<script type="text/javascript" src="/js/button.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
crossorigin="anonymous"></script>
</body>
</html>