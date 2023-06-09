<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT. Meksiko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">PT. Meksiko</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <form  method="POST" action="{{route('register')}}" class="container">
        @if ($errors->any())
        {{$errors->first()}}
       @endif
        @csrf
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputPassword1" required minlength="3" maxlength="40">
        </div>
         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input name="email"type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
             <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password"type="password" class="form-control" id="exampleInputPassword1" required minlength="6" maxlength="12">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password Confirmation</label>
            <input name="password_confirmation" type="password" class="form-control" id="exampleCheck1" required minlength="6" maxlength="12">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
            <input name="phone_number" type="text" class="form-control" id="exampleInputPassword1">
        </div>
         <button type="submit" class="btn btn-primary">Register</button>
      </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>