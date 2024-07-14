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
          <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cart">keranjang</a>
        </li>
        <li class="nav-item">
          <a href="logout" class="nav-link" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
            Logout
          </a>
          <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
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
<div class="container-fluid">
  <div class="mx-5 row">
    <div class="col-md-12 ">
      @foreach ($produks as $x)
      <div class="flex-row col-12 card mx-2 my-2 d-flex" style="background-color: rgba(230, 185, 166, 1);">
        <div class="col-2 overflow-hidden" style="height: 100px;">
          <img class="card-img-top img-fluid" src="{{asset($x->produks->foto)}}" alt="Card image cap ">
        </div>
        <div class="col-6 card-body">
          <h5 class="card-title" style="color: black;">{{$x->produks->nama}}</h5>
          <p class="card-text" style="color: rgba(238, 237, 235, 1); font-size: 16px;">{{$x->produks->harga}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  @endsection