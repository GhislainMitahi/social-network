<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Reseau social pour developpeurs">
    <meta name="author" content="GHislain Mitahi">

    <!-- STYLESEETS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
    <link rel="stylesheet" href="style/css/main.css">
    <title>
      <?=  
         isset($title) 
            ? $title .' - '.WEBSITE_NAME
            : WEBSITE_NAME.'- Simple, Rapide, Efficace !';
      ?>  
    </title>
  </head>
  <body>

  <?php include('partials/_nav.php');