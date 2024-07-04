@extends('layout.main')

@section('content')
@foreach ($data as $x)
<div class="card mx-2 my-2" style="width: 18rem;">
    <div class="bg-danger overflow-hidden" style="height: 250px">
        <img class="card-img-top img-fluid" src="{{asset($x->foto)}}" alt="Card image cap " style="object-fit: cover;">
        </div>
    <div class="card-body">
        <h5 class="card-title">{{$x->nama}}</h5>
        <p class="card-text">{{$x->harga}}</p>
        <p class="card-text">{{$x->desc}}</p>
        <a href="#" class="btn btn-primary">Masukan keranjang</a>
    </div>
</div>
@endforeach
@endsection