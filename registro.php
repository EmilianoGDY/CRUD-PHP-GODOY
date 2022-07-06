<?php
require 'login.php';

$message = '';

if (!empty($_POST['user']) && !empty($_POST['pass'])){
    $sql = "INSERT INTO login (usuario, password) VALUES(:$usuario, :$pass) ";
    $stmt = $conn->prepare($sql);
    $stmt ->bindParam(':usuario',$_POST['$usuario']);
    $stmt ->bindParam(':password',$_POST['$pass']);

    if($stmt->execute()){
        $message = 'Se ha completado el Registro Correctamente, por favor vuelva para iniciar sesion';

    }else {
        $message = 'Ha ocurrdio un error al registrar o este email ya existe, por favor intente nuevamente';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Link de Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Link Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>

    <!-- Barra de navegacion -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Pelis Retro</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Quienes Somos ?</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>  
      <!-- Barra de Navegacion -->
      
      <?php if(!empty($message)): ?>
        <p> <?= message ?></p>
      <?php endif; ?>

    <div class="modal-dialog text-center " >
        <div class="col-sm-12">
            <div class="modal-content " id="contenedor-ppal">
            
               <form class="col-12" method="post" action="registro.php">

                    <div class="form-group" id="usuario">
                        <input type="email" class="form-control" placeholder="Correo Electronico" name="user">
                    </div>
                    <div class="form-group" id="clave">
                        <input type="password" class="form-control" placeholder="Ingrese su clave" name="pass">
                    </div>
                    <div class="form-group" id="clave">
                        <input type="password" class="form-control" placeholder="Repita su Clave" name="pass2">
                    </div>
                    
                    <br>
                    <br>
                    <a href="registro.html" class="btn btn-success mb-3" >Registrarse</a>
                    <br>
                    <br>
                    <a href="login.html" class="btn btn-danger mb-3" >Volver</a>

               </form>
            </div>

        </div>

    </div>      






    <!-- Script Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>