<!DOCTYPE html>

<html lang="es">
  
  <head>
      <meta charset="UTF-8">
      <title>LLantas Ocotlán</title>
      <meta name="description" content="Llantas Ocolán es una empresa comprometida con el medio ambiente desemepñandose en el área de la movilidad ofreciendo servicios automotrices." />
      <link rel="shortcut icon" href="img/index_Lyso.png"/>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet"> 
  </head>

  <body>
  <!-- Header -->
  <?php require_once('resources/templates/header_lyso.php');?>


   <div class="pt-5 px-2">
    <div class="w-100 bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner rounded">
            <div class="carousel-item active">
                <img src="img/llantas_Auto.jpg" class="d-block w-100" alt="img/imagen_Alternativa.png">

              <div class="carousel-caption d-none d-md-block">
                <h5> </h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
                <img src="img/llantas_Llantas.jpg" class="d-block w-100" alt="img/imagen_Alternativa.png">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item">
                <img src="img/llantas_Motor.jpg" class="d-block w-100" alt="img/imagen_Alternativa.png">
              <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <div class="p-2">
      <h1>
        <p>LLantas y Servicios Ocotlán</p>
      </h1>
    </div>

  <div class="cards_query">
    <div class="row_card">
      <div class="column_card">
        <div class="card m-2">
          <div class="card-body">
            <img class="card-img-top" src="img/Lyso_Foto1.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text mx-n4">
                Ofrecemos los servicios de:
                <ul class="pl-0">
                  <li>Alineación y balanceo</li>
                  <li>Amortiguadores</li>
                  <li>Afinación</li>
                  <li>Frenos</li>
                  <li>Llantas</li>
                  <li>Suspensión</li>
                  <li>Escáner</li>
                  <li>y mucho más...</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="column_card">
        <div class="card m-2">
          <div class="card-body">
            <img class="card-img-top" src="img/Lyso_Foto2.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text mx-n4">
                Contamos con las siguientes marcas en llantas:
                <ul class="pl-0">
                  <li>Continental</li>
                  <li>Michelin</li>
                  <li>Pirelli</li>
                  <li>Toyo</li>
                  <li>Hankook</li>
                  <li>Euzkadi</li>
                  <li>y muchas más...</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="column_card">
        <div class="card m-2">
          <div class="card-body">
            <img class="card-img-top" src="img/Lyso_Foto3.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text mx-n4">
                Nuestros asociados cuentan con una amplia experiencia en:               
                <ul class="pl-0">
                  <li>Sistema de ignición</li>
                  <li>Sistema de refrigeración</li>
                  <li>Sistemas electrónico</li>
                  <li>Sistema inyección</li>
                  <li>Sistema de dirección </li>
                  <li>Sistemas de reparación integral</li>
                  <li>y muchos otros...</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="column_card">
        <div class="card m-2">
          <div class="card-body">
            <img class="card-img-top" src="img/Lyso_Construccion.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text mx-n4">
                Próximamente...               
                <ul class="pl-0">
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br> 
               </ul>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>

  <!-- Footer -->
  <?php require_once('resources/templates/footer.php');?>

  </body>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>

</html>