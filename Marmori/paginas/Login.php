<?php
session_start();
?>

<!doctype html>
<html lang="es">
  <head>
    <title>Ingreso - Marmori Est.</title>
    <?php
        include "../componentes/head.php";
    ?>

  </head>

  <body>

    <header>
      <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">

     <h1 class="mt-5"style="color:hsl(0,100%,50%);"><em>Marmori Estacionamientos SA<em></h1>
     <p class="lead"><h2>Primer sistema de estacionamiento con cobro digital</h2></p>
     <p><h4>"El arte de estacionar"</h4></p>

           <?php 
                  if(isset($_SESSION['Usuario'])){
                    //solo muestra el menu si estas con la variable de sesión instaciada
            ?>
                              <h2>Usted ya esta logeado</h2>
                              <h3>  <?php echo $_SESSION['Usuario'];?>  </h3>
                             
            <?php 
              }
              else
              {
            ?>

            <form class="form-signin" action="../funciones/hacerLogin.php">
              <h1 class="h3 mb-3 font-weight-normal">Ingrese sus datos</h1>

              <label for="uname" class="sr-only">Usuario</label>
              <input type="text" id="uname" name="Usuario"class="form-control" placeholder="usuario" required autofocus>

              <label for="psw" class="sr-only">Clave</label>
              <input type="password" id="psw" name="Clave" class="form-control" placeholder="clave" required>

              <div class="checkbox mb-3">
              <label>
              <input type="checkbox" value="remember-me"> Recordarme
              </label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
              <p class="mt-5 mb-3 text-muted">&copy; 2020-2020</p>
          

              <?php 
              }
              ?>
          
      
          </form>
    </main>

    <footer class="footer">
      <?php
        include "../componentes/pie.php";
      ?>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
