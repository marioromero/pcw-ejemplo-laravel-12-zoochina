<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

</head>
<body>
<h1>Bienvenido a la aplicación de creación de nombre para panda recién nacido</h1>
<img src="https://images5.alphacoders.com/369/369059.jpg" alt="" style="max-height: 500px">
<br><br>

<form action="{{ route('crear-nombre') }}" method="post" style="border: solid 1px #19140035; padding: 20px; border-radius: 10px; background-color: cyan">
    @csrf
    <input type="submit" value="Crea el Nombre :)">
</form>

@if(@$nombrePanda)
    El nombre del panda es: <strong> {{ $nombrePanda }} </strong>
@endif
</body>
</html>
