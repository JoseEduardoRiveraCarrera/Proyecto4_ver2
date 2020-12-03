
@extends('layaut');
@section('title')
Home
@endsection
@section('content')
<body>
  
<div>
    <h1></h1>
  </div>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    
    <h1 class="display-4"><b>NEXUS</b></h1>
    <h5>TECH & CONSULTING</h5>
    <p align="center">You think you know me</p>
    <p class="lead text-center">On this day, i see clearly everithing has come to life. <br/>Bitter place and a broken dream, and we'll leave it all behind
    <br/>On this Day it's so real to me, Everithing has come to life, <br/>Another chance to chase a dream, Another chance to feel
    Chance to feel alive</p>
</div>


<!-----Inicio del carrusel----->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

<!----Rayitas debajo del carrucel---->

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!--Estructura del carrucel-->
    <div class="carousel-inner ">
      <div class="carousel-item active">
       <img src="Img/EdgeWWE.jpg" alt="EdgeWWE" width="1400" height="500">
        <div class="container">    
          <div class="carousel-caption text-left">
            <h1>Galeria de fotos.</h1>
            <p>Aqui se mostrara una extensa cantidad de fotos proporcionadas por la empresa</p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('Galeria') }}" role="button">Ver galeria</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="Img/Edge2R.jpg" alt="Edge2R" width="1400" height="500">
        <div class="container">
          <div class="carousel-caption">
            <h1>Nuestra experiencia.</h1>
            <p>Revisa nuestro trabajo que le hemos brindado a otras empresas</p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('Experiencia') }}" role="button">Conócenos</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
       <img src="Img/Edge3Champ.jpg" alt="Edge3Champ" width="1400" height="500">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Blog.</h1>
            <p>Revisa nuestras ultimas novedades en nuestro blog</p>
            <p><a class="btn btn-lg btn-primary" href="{{ route('Blog') }}" role="button">Leer mas</a></p>
          </div>
        </div>
      </div>
    </div>
      <!----Flechas para adelantar o regresar imagenes del corrussel----->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previo</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>

  <div class="container marketing">

  <div>
    <h1></h1>
  </div>

    <!-- TRES COLUMNAS DEBAJO DEL CARRUCEL-->
    <div class="row">
      <div class="col-lg-4">
  <img src="Img/EdgeWWE.jpg" alt="EdgeWWE" width="140" height="140">
       <h2>Galeria de fotos</h2>
        <p>Texto por definir</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Experiencia</h2>
        <p>Texto por definir</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Blog</h2>
        <p>Texto por definir</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->

  

  

@endsection
  
</body>