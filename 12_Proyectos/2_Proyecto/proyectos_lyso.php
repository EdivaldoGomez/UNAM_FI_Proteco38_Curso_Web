<!DOCTYPE html>

<html lang="es">
  
  <head>
      <meta charset="UTF-8">
      <title>LLantas Ocotlán</title>
      <link rel="shortcut icon" href="img/index_Lyso.png"/>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet"> 
  </head>

  <body>
  <!-- Header -->
  <?php require_once('resources/templates/header_lyso.php');?>

    <div class="pt-5 px-2">
        <h1>
          <p>Proyectos</p>
        </h1> 
      <div>
        <p class="text-justify px-5">
          Llantas y Servicios Ocotlán tiene como propósito la innovación constante en el área de la movilidad.
        </p>
      </div>
    </div>
    
     <div class="cards_query">
        <div class="row_card">
          <div class="column_card">
            <div id="cardproyecto" class="card m-2">
              <div class="card-body">
              <img class="card-img-top" src="img/proyectos_Muypronto.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text mx-n4">
                    Llantas y Servicios Ocotlán se mantiene en la línea del desarrollo y la innovación gracias al apoyo de la comunidad Atl y sus asociados. Muy pronto se publicarán nuevos lanzamientos
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
                    Próximamente...
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