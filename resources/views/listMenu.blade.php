@extends('layout.list')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title col-sm-10 py-2">Cast List</h3>
        <a href="/createMenu" class="btn btn-success col-2 fileinput-button">
            <i class="fas fa-plus"></i>
            <span>Create</span>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $x)
                <tr>
                    <td class="text-center py-3">{{$x->id}}</td>
                    <td class="py-3">{{$x->nama}}</td>
                    <td class="py-3">{{$x->harga}}</td>
                    <td class="py-3">{{$x->status}}</td>
                    <td class="py-3">{{Str::limit($x->desc, 10)}}</td>
                    <td class="py-3">{{$x->category}}</td>
                    <td>
                        <div class="col-12 d-flex row">
                            <a href="/menu/edit/{{$x->id}}" class="btn mx-2 btn-warning col-5 fileinput-button">
                                <span>Edit</span>
                            </a>
                            <form action="/menu/{{$x->id}}" method="post" class="col-5 mx-2" id="delete-{{$x->id}}">
                                @csrf
                                <button type="submit" class="btn btn-danger col-12 fileinput-button">
                                    <span>Delete</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
