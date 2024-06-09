<?php

// echo "hola soy los datos enviados mediante el form (get)";

// var_dump($_POST);
// echo "la pelocula es: " .  $_POST['nombre'];
// echo "la descripcion es: " .  $_POST['descripcion'];
// echo "El genero es: " .  $_POST['genero'];
// echo "La calificacion es: " .  $_POST['calificacion'];
// echo "El año es: " .  $_POST['año'];
// echo "El director es: " .  $_POST['director'];
//  echo "la imagen es: " .  $_POST['imagen'];


$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$genero=$_POST['genero'];
$director =$_POST['director'];
$año =$_POST['año']; 
$calificacion= $_POST['calificacion']; 
$imagen=$_POST["imagen"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="card mb-3" style="width: 18rem;">
  <img src=<?php echo $imagen  ?> class="card-img-top" alt="imagen de shanelle">
  <div class="card-body">
    <h5 class="card-title"><?php echo $nombre ?></h5>
    <p class="card-text"><?php echo $descripcion ?></p>
    <p class="card-text"><small class="text-body-secondary"><?php echo "genero : " .$genero ?></small></p>
    <p class="card-text"><small class="text-body-secondary"><?php echo "director : " .$director ?></small></p>
    <p class="card-text"><small class="text-body-secondary"><?php echo "año : " .$año ?></small></p>
    <p class="card-text"><small class="text-body-secondary"><?php echo "La calificacion es : " . $calificacion ?></small></p>
  </div>
</div>
<br>
<br>
<button>
  <a rel="stylesheet" href="index.php">  volver
    </a>
  </button>
<br>
<br>
</body>
</html>
