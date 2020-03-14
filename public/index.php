<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Lorem Ipsum">
    <meta name="keywords" content="Lorem Ipsum">
    <meta name="author" content="Michael Plonski">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boilerplate</title>
    <link rel="stylesheet" type="text/css" href="css/bundle.min.css">
    <link rel="shortcut icon" href="favicon.ico">
  </head>
  <body>

    <?php
      require '../vendor/autoload.php';
      $dotenv = Dotenv\Dotenv::createImmutable('./..');
      $dotenv->load();
    ?>

    <?php include(__DIR__ . '/core/' . 'database/' . 'database.php'); ?>

    <?php include(__DIR__ . '/views/' . 'home.php'); ?>

    <script src="js/bundle.min.js"></script>
  </body>
</html>