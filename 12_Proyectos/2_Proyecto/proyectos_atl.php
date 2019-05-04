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
        <h1>
          <p>Proyectos</p>
        </h1> 
      <div>
        <p class="text-justify px-5">
          La Comunidad Atl tiene como propósito apoyar el desarrollo a través de diferentes áreas.
        </p>
      </div>
    </div>

   <div class="cards_query">
      <div class="row_card">
        <div class="column_card">
          <div id="cardproyecto" class="card m-2">
            <div class="card-body">
              <img class="card-img-top" src="img/proyectos_Arboles.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text mx-n4">
                  Se han reforestado 1000 m<sup>2</sup> de superfice a través de la siembra de árboles frutales. Se han plantado durazneros, ciruelos, guayabos, etcétera, que ya se encuentran en etapa de producción. Para el año 2020 se busca reforestar un área de 30 000 m<sup>2</sup>.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column_card">
          <div id="cardproyecto" class="card m-2">
            <div class="card-body">
            <img class="card-img-top" src="img/proyectos_Opensource.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text mx-n4">
                  Dentro de la comunidad se ha decidioo tomar el camino del desarrollo tecnológico propio a través de diversas herramientas "Open Source". Actualmente se encuentra en desarrollo un sistema integral de instrumentación en el área de la movilidad.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column_card">
          <div id="cardproyecto" class="card m-2">
            <div class="card-body">
            <img class="card-img-top" src="img/proyectos_Muypronto.jpg" alt="Card image cap">
              <div class="card-body">
                <p class="card-text mx-n4">
                   La comunidad Atl mantiene un constante desarrollo de proyectos gracias a la colaboración de sus miembros.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="column_card">
          <div id="cardproyecto" class="card m-2">
            <div class="card-body">
              <img class="card-img-top" src="img/Lyso_Construccion.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text mx-n4">
                  Próximamente..
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