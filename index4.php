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
        <h4>4. Algoritmo que pida dos numeros y los multiplique todo los numeros que van desde el primer numero hasta el segundo. se deven controlar que los valores sean correctos </h4>
        <form method="post">
          <label><h5>Ingrese el 1er numero</h5></label>
          <input type="number" name="c" value="" required>
          <label><h5>Ingrese el 2do numero</h5></label>
          <input type="number" name="d" value="" required>
          <input type="submit" name="" value="Enviar">
        </form>
    <?php
      $a=$_POST['c'];
      $b=$_POST['d'];
      $e=$a;

      echo "<h4>El 1er numero es: $a</h4>";
      echo "<h4>El 2do numero es: $b</h4>";
      for ($i=$a; $i <= $b; $i++) {
        echo "$i &nbsp";
      $e=$e*$i;

      }
      echo "<h4>La multiplicacion de todos los numeros es: $e</h4>";
     ?>
</div>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
