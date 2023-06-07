<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="BESO LLYC Prueba Técnica">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="./favicon.ico">
  <link rel="stylesheet" href="app.css">
  
</head>

<body>
    <?php
        $path = 'data.json';
        $jsonString = file_get_contents($path);
        $jsonData = json_decode($jsonString, true);
    ?>

    <div class="content">

        <?php include "components/navbar.php"; ?>

        <?php include "components/destination-picker.php"; ?>
    </div>


    <script type="module" src="app.js"></script>
</body>

</html>