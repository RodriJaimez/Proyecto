<!DOCTYPE html>
<html lang="en">

<?php

  session_start();
?>


<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Bienvenido a la página de registro!</h1>
              </div>
              <form class="user" method="post" action="base-datos/register_input.php">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="us_nombre" placeholder="Nombre" name="us_nombre">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="us_apellido" placeholder="Apellido" name="us_apellido">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="us_mail" placeholder="E-mail" name="us_mail">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="us_contrasenia" placeholder="Contraseña" name="us_contrasenia">
                  </div>
                </div>
                  <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="us_dni" placeholder="DNI" name="us_dni">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="us_tel" placeholder="Telefono" name="us_tel">
                </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Provincia</label>
                      <select id="inputState" class="form-control">
                        <option selected>---</option>
                        <option>Buenos Aires</option>
                        <option>Rosario</option>
                        <option>Chubut</option>
                        <option>Misiones</option>
                        <option>Formosa</option>
                        <option>Cordoba</option>
                     </select>
                    </div>
                <div class="col-sm-12">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                   <label class="custom-control-label" for="customSwitch1"> ¿Desea usted llamar a un servicio de ayuda?</label>
                  </div>
                  </div>
                  <hr>
                <button href="login.php" class="btn btn-primary btn-user btn-block" type="sumbit" name="registro">Registrarse !</button>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Me olvide mi contraseña :(</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Ya tengo una cuenta, quiero ingresar!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
