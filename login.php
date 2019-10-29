<?php
if($_POST){
  include("validacion_php");
}
 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Ingresar</title>
    <style>
      .bg-home{
        background-color: rgba(200,250,45.1);
      }
    </style>
  </head>
  <body class="container bg-home">

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-success p-1">
      <a class="navbar-brand" href="home.html">Essencials</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 pr-md-5">
          <li class="nav-item active">
            <a class="nav-link" href="home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.html#quienessomos">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.html">Preguntas frecuentes</a>
          </li>
          <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
             Usuarios
           </a>
           <div class="dropdown-menu">
             <a class="dropdown-item" href="login.html">Ingresar</a>
             <a class="dropdown-item" href="registro.html">Registrarse</a>
           </div>
         </li>
         <li class="nav-item dropdown mr-md-5">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-shopping-cart"></i>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-item" href="producto.html">CREMAS</li>
            <li class="dropdown-item" href="producto.html">JABONES</li>
          </ul>
        </li>
        </ul>
      </div>
    </nav>

<main class="container bg-info p-5 m-8" align="center p-5">
    <h3>Ingresar</h3>
    <form class="Ingreso" action="login.php" method="post">
      <p>
        <label for="email"></label>
        <input id="email"type="email" name="email" value="" placeholder="E-mail">
      </p>
      <p>
        <label for="password"></label>
        <input id="password"type="password" name="password" value="" placeholder="Contraseña">
      </p>
      <div>
        <a href="#" class="olvido">
          <u>Olvidé mi contraseña<u>
        </a>
      </div>
      <br>
          <p>
        <input class="btn btn-success"type="submit" name="" value="Enviar">
      </p>

    </form>
    </main>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <footer></footer>
</html>
