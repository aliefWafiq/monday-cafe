@extends('layout.main')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
    <div class="mx-5 col-11 d-flex">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Monday Cafe</a>

  <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">shope</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>
@endsection

@section('content')
@foreach ($data as $x)
<div class="card mx-2 my-2" style="width: 17rem; background-color: rgba(230, 185, 166, 1);">
    <div class="bg-danger overflow-hidden" style="height: 200px">
        <img class="card-img-top img-fluid" src="{{asset($x->foto)}}" alt="Card image cap " style="object-fit: cover;">
    </div>
    <div class="card-body">
        <h5 class="card-title" style="color: black;">{{$x->nama}}</h5>
        <p class="card-text" style="color: rgba(238, 237, 235, 1); font-size: 16px;">{{$x->harga}}</p>
        <p class="card-text">{{Str::limit($x->desc, 25)}}</p>
        <a href="#" class="btn" style="background-color: rgba(238, 237, 235, 1); color: rgba(47, 54, 69, 1);">Masukan keranjang</a>
    </div>
</div>
@endforeach
@endsection