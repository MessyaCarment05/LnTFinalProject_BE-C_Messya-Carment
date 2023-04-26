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
              {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/login">Login</a>
                </li>
            </ul> --}}
            {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/register">Register</a>
              </li>
            </ul> --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/dashboard">Dashboard</a>
              </li>
          </ul>
            
             <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
       
      <div class="row row-cols-1 row-cols-md-3 g-4 m-2 mb-5">
        <div class="col">
        
            @foreach ($data as $data2)
            <div class="card">
                <div class="card-body">
                    <img src="{{asset("storage/".$data2->image)}}" alt="{{$data2->image}}">
                    <h4 class="card-title">Category Product: {{$data2->category->CategoryName}}</h4>
                    <h4 class="card-title">Nama Product: {{$data2->nama_barang}}</h4>
                    <h4 class="card-title">Harga Product: {{$data2->harga}}</h4> 
                    <h4 class="card-title">Jumlah Product: {{$data2->jumlah}}</h4>
                    <a href="{{route('edit', $data2->id)}}" class="btn btn-success">Edit</a>
                    <form action="{{route('delete', $data2->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
       
        </div>
    </div>
    
</body>
</html> 
