
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIKIWEY'S APP | Registro</title>
    <!-- LINKS -->

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unbounded&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Open+Sans&family=Simonetta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@1&display=swap" rel="stylesheet">

    <!-- LIBRERÍAS CSS -->  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="../../css/styles.css">

    <!-- LOGO ICON -->
    <link rel="sahortcut icon" href="../../IMG/todo/logo2.ico">
    <link rel="icon" sizes="192x192" href="../../IMG/todo/logo2.ico">
    <link rel="favicon" href="../../IMG/todo/logo2.ico">
    <link rel="apple-touch-icon" href="../../IMG/todo/logo2.ico">
    <!-- META  -->
    <meta name="description" content="Panadería Mikiweys">
</head>

<body class=""> 
<!-- Father -->

<div class="padre bg-foto">  
<!-- LOGIN -->
<div class="container shadow px-5 py-3 bg-white my-5 w-75">
  <div class="row">
    <div class="col p-3 simoneta ">
      <div class="row ">
        <div class="col-12"><h1 class="my-4  fs-2">Regístrate</h1></div>
        <?php include('../../controller/registrar.php');
      
        ?>
      <form action="../../controller/registrar.php" method="post">
        <div class="mb-2 col-12">
          <label class="form-label">Nombres</label>
          <input type="text" class="form-control  cafe" name="name_user">
        </div>
        <div class="mb-2 col-12">
          <label class="form-label">Apellidos</label>
          <input type="text" class="form-control  cafe" name="apel_user">
        </div>
        <div class="mb-2 col-12">
          <label class="form-label">Tipo de documento</label>
          <br>
          <select name="id_doc" id="documento" class="form-select">
            <option value="0" selected disabled>Seleecione el tipo de documento...</option>
          <?php
                  $doc="SELECT * FROM documento";
                  $resul=mysqli_query($db,$doc);
                  while($valores = mysqli_fetch_array($resul)){
                    echo '<option value="'.$valores['id_doc'].'">'.$valores['documento']. '</option>';
                  }
                ?>
                
          </select>
        </div>
        <div class="mb-2 col-12">
          <label class="form-label">No de documento</label>
          <input type="text" class="form-control cafe" name="num_documento_user">
        </div>
        <div class="mb-2 col-12">
          <label class="form-label">Correo electrónico</label>
          <input type="email" class="form-control  cafe" name="email_user">
        </div>
        <div class="mb-2 col-12">
          <label class="form-label">Teléfono</label>
          <input type="tel" class="form-control " maxlength="13" name="tel_user">
        </div>
        <div class="mb-2 col-12">
          <label class="form-label">Dirección</label>
          <input type="text" class="form-control " name="dir_user">
        </div>
        <div class="mb-2 col-12">
          <label class="form-label">Contraseña</label>
          <input type="password" class="form-control  cafe" name="pass_user" autocomplete="on">
        </div>
        <div class="mb-2 col-12">
          <label class="form-label">Confirmar contraseña</label>
          <input type="password" class="form-control  cafe" autocomplete="on">
        </div>
        <div class="mb-2 d-flex col-12">
          <input type="checkbox" class=" me-2">
          <label for="" class="">Acepto que soy mayor de 18 años</label>
        </div>
        <div class="mb-2 d-flex col-12">
          <input type="checkbox" class=" me-2">
          <label for="" class="">Acepto los <a href="">Términos y condiciones</a>  y <a href="">Políticas de privacidad</a> </label>
        </div>
        <div class="mb-2 col-12">
          <input type="submit" class="form-control hovercafe bnaranja" name="registrar">
        </div>
      </div>
      </form>
    </div>
    <!-- o -->
    <div class="col-12 col-sm-6 text-center">
      <div class="row text-center align-items-center text-center justify-content-center">
        <a class="my-5 col-12 pt-5" href="../../index.php">
          <img src="../../IMG/todo/logo.png" alt="" class="img-fluid w-50">
        </a>
        <?php 
          if (isset($_SESSION['mailr'])) {
        echo '<div class="alert alert-danger text-center my-3">' . $_SESSION['mailr'] . '</div>';
        unset($_SESSION['mailr']); 
      }
      ?>
          <div class=" my-3">
            <p>¿Ya tienes cuenta? <br> <a href="../login.php" class="btn btn-warning mt-2">Inicia sesion</a></p>
          </div>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer class="bnaranja text-center text-white ">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="#!" role="button">
        <i class="bi bi-facebook"></i>
      </a>
      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="#!" role="button">
        <i class="bi bi-twitter"></i>
      </a>
      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="" role="button">
        <i class="bi bi-instagram"></i>
      </a>
      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1 rounded-circle" href="https://github.com/mikiweys/mikiweys.github.io" role="button">
        <i class="bi bi-github"></i>
      </a>
    </section>
    <!-- Section: Social media -->
  </div>
</footer>
</div>
    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
          <script>
          new WOW().init();
          </script>
    <script src="../../../js/scripts.js"></script>
</body>
</html>




<!-- http://127.0.0.1:5500/index.php -->
