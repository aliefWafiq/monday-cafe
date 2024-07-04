@extends('layout.form1')

@section('form')
<form action="/tambahMenu" method="post" id="quickForm" enctype="multipart/form-data" id="form">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <div class="mb-2">
                <label>Foto :</label>
                <input type="file" name="foto">
            </div>
            <label for="nama">Nama :</label>
            <input class="form-control" type="text" name="nama" id="nama">
            <label for="harga">harga :</label>
            <input class="form-control" type="number" name="harga" id="harga">
            <label for="desc">desc :</label>
            <textarea class="form-control" type="text" name="desc" id="desc"></textarea>
            <div class="my-2">
                <select name="category">
                    <option value="sarapan">Sarapan</option>
                    <option value="makan siang">Makan siang</option>
                    <option value="cemilan">Cemilan</option>
                    <option value="minuman">Minuman</option>
                </select>
                <select name="status">
                    <option value="tersedia">Tersedia</option>
                    <option value="habis">Habis</option>
                </select>
            </div>
            <div class="my-3">
                <button type="submit" class="btn btn-primary" id="create">Submit</button>
            </div>
        </div>
    </div>
</form>
@endsection
@push('script')
<script>
    $(function() {
        $(document).on('click', '#create', function(e) {
            let link = $(this).attr('action')
            Swal.fire({
                title: "Berhasil!",
                text: "Menu berhasil di buat",
                icon: "success"
            }).then((result) => {
                if (result.value) {
                    document.getElementById('create').submit(); // Submit the form if confirmed
                }
            });
        })
    })
</script>
@endpush