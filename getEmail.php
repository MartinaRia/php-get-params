<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GET EMAIL</title>

    <!-- VARIABILI PHP -->
    <?php
      $email = $_GET['email'];
      $lookForAt = strpos($email, '@');
      $lookForDot = strpos($email, '.');
      ?>
  </head>

  <body>
    <!-- url: http://localhost:8000/getEmail.php/?email=martina@. -->

    <h1>
      <?php
      if ($lookForAt === false || $lookForDot === false) {
        echo $email . ' KO';
      } else {
        echo $email . ' OK';
      };
      ?>
    </h1>

  </body>
</html>
