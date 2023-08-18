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
    <link rel="stylesheet" href="../../../css/styles.css">

    <!-- LOGO ICON -->
    <link rel="shortcut icon" href="../../../IMG/todo/logo2.ico">
    <link rel="icon" sizes="192x192" href="../../../IMG/todo/logo2.ico">
    <link rel="favicon" href="../../../IMG/todo/logo2.ico">
    <link rel="apple-touch-icon" href="../../../IMG/todo/logo2.ico">
    <!-- META  -->
    <meta name="description" content="Panadería Mikiweys">
</head>
    <?php
    include("../../backend/registrar.php");
    ?>
<body> 
<!-- Father -->
<div class="padre bg-foto">  
<!-- LOGIN -->
<div class="container shadow px-5 py-3 bg-white my-5 w-75">
  <div class="row">
    <div class="col p-3 simoneta">
      <div class="row ">
        <div class="col-12"><h1 class="my-4  fs-2">Regístrate</h1></div>
      <form action="../../backend/registrar.php" method="post">
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
            <option value="1" class="form-select">Cédula de ciudadanía</option>
            <option value="2" class="form-select">Tarjeta de Identidad</option>
            <option value="3" class="form-select">Cédula de extranjería</option>
            <option value="4" class="form-select">Pasaporte</option>
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
          <input type="tel" class="form-control " maxlength="13" value="" name="tel_user">
        </div>
        <div class="mb-2 col-12">
          <label class="form-label">Dirección</label>
          <input type="text" class="form-control " name="dir_user">
        </div>
        <div class="mb-2 col-12">
          <input type="submit" class="form-control hovercafe bnaranja" >
        </div>
      </div>
      </form>
    </div>
    <!-- o -->
    <div class="col-12 col-sm-6 text-center">
      <div class="row">
        <a class="my-5 col-12 pt-5" href="../../../index.html">
          <img src="../../../IMG/todo/logo.png" alt="" class="img-fluid w-50">
        </a>
          <div class="facebook my-3">
            <button class="btn btn-primary w-100"><i class="bi bi-facebook pe-1"></i> Ingresa con facebook</button>
          </div>
          <div class="google my-3">
            <button class="btn btn-danger w-100"><i class="bi bi-google pe-2"></i> Ingresa con Google</button>
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
</body>
</html>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
          <script>
          new WOW().init();
          </script>
    <script src="../../../js/script.js"></script>


<!-- http://127.0.0.1:5500/index.html -->
