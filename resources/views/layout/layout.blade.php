<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
        {{-- <link rel="stylesheet" href="{{URL::asset('css/layout.css')}}"> --}}
        
        <!-- Archivos JS de bootstrap -->
        <script src="{{URL::asset('js/jquery-2.1.4.min.js')}}"></script>
        <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

    </head>

    <body itemscope itemtype="http://schema.org/Blog">
        <!-- Contenido principal -->
        @yield('contenido')

    </body>
</html>