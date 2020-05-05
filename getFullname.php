<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GET FULL NAME</title>

    <!-- VARIABILI PHP -->
    <?php
      $name = $_GET['nome'];
      $surname = $_GET['cognome'];
      ?>
  </head>

  <body>
    <!-- url: http://localhost:8000/getFullname.php/?nome=martina&cognome=ria -->
    <h1>Ciao <?php echo ucfirst($name). ' '. ucfirst($surname) ; ?>, benvenuto su questa pagina! </h1>

  </body>
</html>


<!-- ALTERNATIVA -->
<!--
<body>
  < ?php
    $name = ucwords($_GET['nome']);
    $surname = ucwordst($_GET['cognome']);
    ?>

  <h1>Ciao < ?php echo $name . ' '. $surname ; ?>, benvenuto su questa pagina </h1>

</body>
</html>
-->
