<?php

echo "hola clase 2";

$nombre = "Santi";
$apellido = "stravits";

//hola soy una linea

/*
hola soy multilinea
*/

$edad = 39;
$altura = 1.67;
$robot = true;

$numeroA = 20;
$numeroB = 30;

$suma = $numeroA + $numeroB;

echo "<br>";

$suma = 90;

// echo "La suma de los numeros es: ". $suma;

// define("IVA",21);

// echo "<br>";

// $IVA = 56 //

// echo IVA;//llamando a la constante

// $validacion1 = true;
// $validacion2 = false;

// // + - * / %..

$resto1 = 25 % 5;
$resto2 = 10 % 3;


echo "<br>";

echo "<h1>Hola soy un h1 </h1>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <h1>Hola esto es hmtl + php 🌷</h1>

    <h2>bievenido <?php echo $nombre ?></h2>

    <h3>Hola formulario</h3>

    <form action="datos.php" method="post">

        <label for="">Nombre</label>

        <input type="text" name="nombre">

        <label for="">edad</label>

        <input type="number" name="edad">

        <label for="">Tipo Usuario</label>

        <input type="text" name="tiposuario">


        <select name="usuario_select" id="">

            <option value="premium">comun</option>
            <option value="premium">premium</option>
            <option value="premium">platino</option>

        </select>



        <label for="">Apellido</label>

        <input type="text" name="apellido">

        <label for="">Password</label>

        <input type="password" name="password">

        <textarea name="descripcion" id=""></textarea>

        <input type="submit" value="enviar">

        <label for="">Cantidad Cards</label>

        <input type="number" name="cantidadCards">

    </form>

    <form action="datos.php" method="post">
        <label for="">
            Genero

            <input type="text">
        </label>
        <label for="">
            Calificacion
            <input type="number">

        </label>
        <label for="">
            Año

            <input type="number">
        </label>
        <label for="">
            Director
            <input type="text">

        </label>

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Nombre</label>
        <input class="form-control" type="text" placeholder="ingrese el nombre de la pelicula" aria-label="default input example">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="ingrese la descripcion de la pelicula"></textarea>
</div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Genero</label>
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
</div>
        <div class="mb-3">
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
</div>
        <div class="mb-3">
        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="formFile">
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
  </div>
    </form>
</body>

</html>