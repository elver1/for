<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/h.ico"/>
    <title>FOR</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

  </head>
  <body>
    <div class="container">
        <h4>5. Algoritmo que pida un numeros y muestre en pantalla el mismo numero de asteriscos</h4>
        <form method="post">
          <label><h5>Ingrese un numero</h5></label>
          <input type="number" name="c" value="" required>
          <input type="submit" name="" value="Enviar">
        </form>
    <?php
      $a=$_POST['c'];
      $e=$a;
      $b='*';
      echo "<h4>El numero ingresado  es: $a</h4>";
      for ($i=1; $i <= $a; $i++) {
        echo "$b &nbsp";

      }

     ?>
</div>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
