<!doctype html>
<html lang="en" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="generator" content="Hugo 0.88.1">
  <title>mvc site</title>




  <!-- Bootstrap core CSS -->
  <link href="<?= ROOT ?>/assets/css/bootstrap.min.css" rel="stylesheet">

  <style>

  </style>


  <!-- Custom styles for this template -->
  <link href="<?= ROOT ?>/assets/css/cover.css" rel="stylesheet">
</head>

<body class="">

<img id="logoMobile" src="/../../assets/img/working-logo.png" alt="SCS Logo">
    <div class="titleLogo">
        <h1 class="margBottom">Hüttenabrechnung - Skiclub Schleißheim</h1>
        <img id="logo" class="logoImage" src="/../../assets/img/working-logo.png" alt="SCS Logo">
        <div class="hut-container"></div>
    </div>
    <form class="row g-3 " id="form" action="index.php?page=zusammenfassung" method="post">
    
    <p>Wählen Sie die Hütte aus, für die Sie die Abrechnung starten möchten.</p>
    <div class="photos col-md-12">
        <a class="cont" href="index.php">
            <h2 class="hut">Hütte Neuhäusl</h2>
            <div class="photoNeu"></div>
        </a>
        <a class="cont" href="http://booking.scs/index.php?page=michl-alm">
            <h2 class="hut">Hütte Michl-Alm</h2>
            <div class="photoMichl"></div>
        </a>
    </div>
</form>


<script src="main.js"></script>

</body>

</html>