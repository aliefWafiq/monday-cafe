<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css')}}">
    <style>
        .content {
            background-color: rgba(17, 39, 72, 1);
        }

        .dua {
            background-color: rgba(220, 227, 244, 1);
        }
    </style>
</head>

<body>

    <section class="content" style="width: 100%; height: 100vh;">
        <div class="container-fluid" style="width: 100%; height: 100vh;">
            <div class="row d-flex justify-content-center align-items-center" style="width: 100%; height: 100vh;">
                <img src="{{asset('img/logo-monday.png')}}" alt="">
            </div>
        </div>

    </section>
    <>
        <section class="dua">
            <div class="container-fluid" style="width: 100%; height: 100vh;">
                <div class="row d-flex justify-content-center align-items-center" style="width: 100%; height: 100vh;">
                    <div class="text-center mt-5">
                        <h3>Segarkan pagi mu dan hidupkan malam mu<br>
                            dengan secangkir coffe premium dari ...
                        </h3>
                        <img src="{{asset('img/logo-monday.png')}}" class="lima" style="margin-top: 70px; margin-bottom: 10px; margin-left: 30px; width: 90%;">
                    </div>
                    <img src="{{asset('img/gambar-satu.png')}}" style="margin-top: 20px; margin-left: 300px;" width="30%">
                </div>
            </div>
            <div class="dua d-flex justify-content-center">
                <a href="/daftar" class="btn btn-primary my-2">Login</a>
            </div>
        </section>

    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('')}}adminlte/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
</body>

</html>