<!DOCTYPE html>

<html lang="es">
  
  <head>
      <meta charset="UTF-8">
      <title>Comunidad Atl</title>
      <link rel="shortcut icon" href="img/index_Atl.png" />
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet"> 
  </head>

  <body>
  <!-- Header -->
  <?php require_once('resources/templates/header.php');?>

  <div class="pt-5 px-2">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/Eslogan_Atl.png" class="d-block w-100" alt="img/imagen_Alternativa.png">
        </div>
        <div class="carousel-item">
          <img src="img/Eslogan_Lyso.png" class="d-block w-100" alt="img/imagen_Alternativa.png">
        </div>
      </div>
    </div>
  </div>
 
  <div class="m-2">
    <h1>
      <p>Comunidad Atl</p>
    </h1>
  </div>
  <div class="cards_query">
    <div class="row_card">
      <div class="column_card">
        <div class="card m-2">
          <div class="card-body">
            <img src="img/index_Atl.png" class="card-img-top" alt="img/imagen_Alternativa.png">
           <h5 class="card-title">Comunidad Atl</h5>
           <p class="card-text">Comunidad formada para el desarrollo</p>
           <a href="acerca_de_atl.php" class="btn btn-primary ">Visitar</a>
          </div>
        </div>
      </div>
      <div class="column_card">
        <div class="card m-2">
          <div class="card-body">
            <img src="img/index_Lyso.png" class="card-img-top" alt="img/imagen_Alternativa.png">
            <h5 class="card-title">LLantas y Servicios Ocotlán</h5>
            <p class="card-text">Empresa de servicios en movilidad</p>
            <a href="llantasocotlan.php" class="btn btn-primary">Visitar</a>
          </div>
        </div>
      </div>
      <div class="column_card">
        <div class="card m-2">
          <div class="card-body">
          <img src="img/index_Proyectos.png" class="card-img-top" alt="">
            <h5 class="card-title">Proyectos</h5>
            <p class="card-text">Nuevos proyectos de la comunidad</p>
            <a href="proyectos_atl.php" class="btn btn-primary" >Visitar</a>
          </div>
        </div>
      </div>
      <div class="column_card">
        <div class="card m-2">
          <div class="card-body">
          <img src="img/index_Construccion.png" class="card-img-top" alt="">
            <h5 class="card-title">Próximamente</h5>
            <p class="card-text">Construyendo...</p>
            <a href="" class="btn btn-primary disabled">Visitar</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="m-2">
    <h1>
      <p>Noticias</p>
    </h1>
  </div>
 
  <div class="carousel_query">
    <div class="row_carousel">
      <div class="column_carousel m-2">
        <div id="carousel2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel2" data-slide-to="1"></li>
            <li data-target="#carousel2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner rounded">
            <div class="carousel-item active">
              <a href="https://es.unesco.org/commemorations/racialdiscriminationday" target="_blank">
                <img src="img/interes_Unesco.jpg" class="d-block w-100" alt="img/imagen_Alternativa.png">
              </a>
              <div class="carousel-caption d-none d-md-block">
                <h5 > Día Internacional de la Eliminación de la Discriminación Racial</h5>
                <p>El Día Internacional de la Eliminación de la Discriminación Racial se celebra el 21 de marzo de cada año...</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="http://www.internacionales.cdmx.gob.mx/index.php/es/144-feria-culturas-amigas" target="_blank">
                <img src="img/interes_Mexico.jpg" class="d-block w-100" alt="img/imagen_Alternativa.png">
              </a>
              <div class="carousel-caption d-none d-md-block">
                <h5>Feria de las Culturas Amigas en la CDMX</h5>
                <p>La Feria de las Culturas Amigas es uno de eventos culturales de carácter internacional más importantes...</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="http://turismotlaxcala.com/Luciernagas2019/" target="_blank">
                <img src="img/interes_Tlaxcala.jpg" class="d-block w-100" alt="Imagen no disponibe">
              </a>
              <div class="carousel-caption d-none d-md-block">
                <h5>Santuario de las Luciernagas en Tlaxcala</h5>
                <p>Durante la temporada de lluvias se presenta un hermoso fenómeno natural en el bosque del estado de Tlaxcala...</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="column_text m-2">
        <h4 class="text-justify border rounded p-2">
          <p><i>
            "Ten cuidado de las cosas de la tierra: haz algo, corta leña, labra la tierra.
            Planta nopales, planta magueyes. Tendrás qué comer, tendrás qué vestir.
            Con eso estarás en pie, serás verdadero, con eso andarás.
            Con eso se hablará de ti, se te alabará. Con eso te darás a conocer."
            <br><br>-Huehuetlatolli
          </i></p>
        </h4> 
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php require_once('resources/templates/footer.php');?>

  </body>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>

</html>