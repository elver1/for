<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="imagenes/h.ico"/>
    <title>FOR</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
        <h4>6. Algoritmo que muestre la tabla de multiplicar de un numero</h4>
        <form method="post">
          <label><h5>Tabla de multiplicar del</h5></label>
          <input type="number" name="c" value="" required>
        <input type="submit" name="" value="Enviar">
        </form>
    <?php
      $a=$_POST['c'];
      $b=0;
      $c=0;
      echo "<h4>La tabla de multiplicar es la del: $a</h4>";

      for ($i=1; $i <= 10; $i++) {
        $b++;
      $c=$a*$b;
    echo "<h4>$a'x'$b'='$c";

      }

     ?>
</div>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
