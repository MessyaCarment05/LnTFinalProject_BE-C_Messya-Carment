<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>PT. Meksiko</title>
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
  <div class="mx-5 mt-5">
    <h1>Edit Product</h1>
<form action="{{route('update', $data2->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="" class="form-label">Category</label>
      <br>
      <select name="category_id" id="">
        @foreach ($category as $i)
        <option value="{{$i->id}}"
          @if ($data2->category_id == $i->id)
                    selected
                @endif
      >{{$i->CategoryName}}</option>
        @endforeach
      </select>
    </div>
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Nama Product</label>
      <input type="text" class="form-control" id="validationDefault01" name="nama_barang"  value="{{$data2->nama_barang}}" required minlength="5" maxlength="80">
    </div>
    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Harga Product</label>
        <div class="input-group">
          <span class="input-group-text" id="inputGroupPrepend2">Rp. </span>
           <input type="integer" class="form-control" id="validationDefault01" name="harga" value="{{$data2->harga}}">
          </div> 
      </div>
      <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Jumlah Product</label>
        <input type="integer" class="form-control" id="validationDefault01" name="jumlah" value="{{$data2->jumlah}}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Foto Product</label>
        <input type="file" name="gambar_barang2" value="{{$data2->gambar_barang2}}" >
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Edit</button>
    </div>
  </form>
  </div>    
</body>
</html>