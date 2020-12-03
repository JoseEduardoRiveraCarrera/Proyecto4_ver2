
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
</head>
<body>
<div>
    <!----BARRA DE NAVEGACION------->
    <nav class="navbar navbar-light navbar-expand-md navbar-white fixed-top bg-white shadow-sm">
    <a class="navbar-brand" href="{{ route ('Home')}}">
    <img src="img/tworobot.png"width="100" height="55" >
    </a>
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('Home') }}" 
                            href="{{ route('Home') }}">
                            @lang('Home')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('Experiencia') }}"
                            href="{{ route('Experiencia') }}">
                            @lang('Experiencia TwoRobot')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('Galeria') }}"
                            href="{{ route('Galeria') }}">
                            @lang('Galeria de fotos')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('Blog') }}"
                            href="{{ route('Blog') }}">
                            @lang('Blog')</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ setActive('Contacto') }}"
                            href="{{ route('Contacto') }}">
                            @lang('Contacto')</a>
                    </li>              
                </ul>
            </div>
    </nav>
</div>
   <!---@include('partials.nav') --->
   @yield('content')

    <!-------------Pie de pagina / derechos de autor----------------->

  <footer class="container  bg-dark" >
    <p class="float-right"><a href="#">Regresar arriba</a></p>
    <p style="color:white">&copy; 2020-2021 NEXUS tech & consulting &middot; <a href="{{ route('Administracion')}}">Administracion</a> &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos</a></p>
  </footer>
   <!-------------------------------------------------------------------------------------------------->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
</body>
</html>