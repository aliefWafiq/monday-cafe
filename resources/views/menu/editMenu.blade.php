@extends('layout.form1')

@section('form')
<form action="/editMenu/{{$produks->id}}" method="post" id="quickForm" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="card-body">
        <div class="form-group">
            <div class="d-flex justify-content-center">
                <div class="col-6 overflow-hidden justify-content-center d-flex">
                    <img src="{{asset($produks->foto)}}" alt="" class="rounded elevation-3">
                </div>
            </div>
            <div class="mb-2">
                <label>Foto :</label>
                <p>Foto saat ini : {{$produks->foto}}</p>
                <input type="file" name="foto" value="{{$produks->foto}}">
            </div>
            <label for="nama">Nama :</label>
            <input class="form-control" type="text" name="nama" id="nama" value="{{$produks->nama}}">
            <label for="harga">harga :</label>
            <input class="form-control" type="number" name="harga" id="harga" value="{{$produks->harga}}">
            <label for="desc">desc :</label>
            <textarea class="form-control" type="text" name="desc" id="desc">{{$produks->desc}}</textarea>
            <div class="my-2">
                <select name="category">
                    <option value="{{$produks->category}}">{{$produks->category}}</option>
                    <option value="sarapan">Sarapan</option>
                    <option value="makan siang">Makan siang</option>
                    <option value="cemilan">Cemilan</option>
                    <option value="minuman">Minuman</option>
                </select>
                <select name="status">
                    <option value="{{$produks->status}}">{{$produks->status}}</option>
                    <option value="tersedia">Tersedia</option>
                    <option value="habis">Habis</option>
                </select>
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
@endsection