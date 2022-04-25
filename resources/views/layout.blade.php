<?php
?>
    <!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
<header>

    <img class="logo" alt="" src="{{asset('img/logo.png')}}">
    <h1 class="titulo"> Gestión de clientes </h1>
</header>
<nav>
    <a class="btn-nav" href="principal">Principal</a>
    <a class="btn-nav" href="{{route("clientes.index")}}"> Mis clientes </a>
    <a class="btn-nav" href="{{route("clientes.create")}}">Añadir cliente</a>
    <a class="btn-nav" href="principal">Contacto</a>
</nav>
<main>
    @yield('contenido')
</main>

</body>
</html>
