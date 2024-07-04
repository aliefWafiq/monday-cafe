<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    </head>
    <body class="antialiased">
        <form action="/loginAction" method="post">
            @csrf
            <label for="username">Nama :</label>
            <input type="text" name="username" id="username">
            <label for="email">Email :</label>
            <input type="text" name="email" id="email">
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
            <button type="submit">submit</button>
        </form>
    </body>
</html>
