<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  
@extends('layouts.app') <!-- Extiende el layout base -->
@section('content') <!-- Contenido específico de esta vista -->
   
@endsection
</body>
</style>

</html>
