<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css')}}">
        <!-- Styles -->
     <style>
        body{
        background-color: #dce3f4;
    }

    input{
        border-radius: 30px;
        height: 35px;
    }

    label{
        font-size: 20px;
        margin-top: 10px;
    }
     </style>

        <!-- Styles -->
    </head>
    <body class="antialiased">
    <div class="mx-5 mt-3">
        <div class="d-flex justify-content-between">
            <img src="{{asset('img/logo-monday.png')}}" alt="" width="250">
            <div>
                <a href="daftar" class="btn btn-primary">Daftar</a>
            </div>
        </div>
        <div>
            <form action="/loginAction" method="post" class="d-flex flex-column col-6 mt-5">
                @csrf
                <label for="username">Nama :</label>
                <input type="text" name="username" id="username">
                <label for="email">Email :</label>
                <input type="text" name="email" id="email">
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
                <div class="mt-3">
                    <button type="submit">submit</button>
                </div>
            </form>
        </div>
    </body>
</html>
