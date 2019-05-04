<!DOCTYPE html>

<html lang="es">
  
  <head>
      <meta charset="UTF-8">
      <title>LLantas Ocotlán</title>
      <link rel="shortcut icon" href="img/index_Lyso.png"/>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
      <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>

  <body>
  <!-- Header -->
  <?php require_once('resources/templates/header_lyso.php');?>

 <div class="contacto_query pt-3">
    <div class="row_contacto">
      <div class="column_contacto">
        <div class="pt-5 p-2">
          <h1>
            <p>Contacto</p>
          </h1>
          <h2>
            Contacto de LLantas y Servicios Ocotlán
          </h2>
          <div class="p-3">
            <!--Formulario-->
            <form action="mensaje_lyso.php" method="post">
              <div class="row">
                <div class="input-field col s6">
                   <h6>Nombre:</h6>
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" type="text" class="validate" name="nom">
                  <label for="icon_prefix"></label>
                </div>
                <div class="input-field col s6">
                    <h6>Correo:</h6>
                  <i class="material-icons prefix">mail</i>
                  <input id="email" type="email" class="validate" name="cor" required>
                  <label for="email" data-error="Correo no valido" data-success="Correo valido"></label>
                </div>
              </div>
              <h6>Mensaje:</h6>
              <div class="input-field col s12">
                <textarea name="men" id="textarea1" class="form-control rounded-0" rows="6"></textarea>
                <label for="textarea1" required></label>
              </div>
              <input type="submit" value="Enviar" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
      <div class="column_contacto">
        <div class="pt-5">
          <div class="w-100 text-center">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30128.739691107377!2d-98.25280571898386!3d19.278344921732153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f7fec7f77e74742!2sLLANTAS+Y+SERVICIOS+OCOTLAN!5e0!3m2!1ses-419!2smx!4v1556875888763!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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