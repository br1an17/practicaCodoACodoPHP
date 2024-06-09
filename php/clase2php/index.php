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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        .star-rating {
            font-size: 2rem;
            color: #ffd700;
            cursor: pointer;
        }

        .star-rating .fa-star {
            margin-right: 0.25rem;
        }

        .star-rating .text-secondary {
            color: #d1d1d1;
        }
    </style>
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

    <div class="container mt-5">
        <form action="peli.php" method="post">
            <div class="mb-3">
                <label for="" class="form-label">Nombre</label>
                <input class="form-control" type="text" name="nombre" id="movieName" placeholder="Ingrese el nombre de la película" aria-label="default input example">
            </div>
            <div class="mb-3">
                <label for="movieDescription" class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcion" id="movieDescription" rows="3" placeholder="Ingrese la descripción de la película"></textarea>
            </div>
            <div class="mb-3">
                <label for="movieGenre" class="form-label">Género</label>
                <select class="form-select" name="genero" id="movieGenre" aria-label="Default select example">
                    <option selected>Seleccione los géneros</option>
                    <option value="Terror">Terror</option>
                    <option value="Drama">Drama</option>
                    <option value="Comedia">Comedia</option>
                    <option value="Suspenso">Suspenso</option>
                    <option value="Thriller">Thriller</option>
                    <option value="Ciencia Ficción">Ciencia Ficción</option>
                    <option value="Infantil">Infantil</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="movieRating" class="form-label">Calificación</label>
                <div class="star-rating">
                    <i class="fas fa-star text-secondary" data-index="0"></i>
                    <i class="fas fa-star text-secondary" data-index="1"></i>
                    <i class="fas fa-star text-secondary" data-index="2"></i>
                    <i class="fas fa-star text-secondary" data-index="3"></i>
                    <i class="fas fa-star text-secondary" data-index="4"></i>
                </div>
                <input type="hidden" name="calificacion" id="movieRating">
            </div>
            <div class="mb-3">
                <label for="movieYear" class="form-label">Año</label>
                <input class="form-control" type="number" name="año" id="movieYear" placeholder="Ingrese el año" aria-label="default input example">
            </div>
            <div class="mb-3">
                <label for="movieDirector" class="form-label">Director</label>
                <input class="form-control" type="text" name="director" id="movieDirector" placeholder="Ingrese el nombre del director" aria-label="default input example">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Ingrese una imagen</label>
                <input class="form-control" type="file" name="imagen" id="formFile">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">enviar</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const stars = document.querySelectorAll('.star-rating .fa-star');
            const ratingInput = document.getElementById('movieRating');
            let currentRating = -1;

            stars.forEach(star => {
                star.addEventListener('mouseover', () => {
                    resetStars();
                    highlightStars(star.getAttribute('data-index'));
                });

                star.addEventListener('mouseout', () => {
                    resetStars();
                    if (currentRating != -1) {
                        highlightStars(currentRating);
                    }
                });

                star.addEventListener('click', () => {
                    currentRating = star.getAttribute('data-index');
                    ratingInput.value = parseInt(currentRating) + 1;
                });
            });

            function resetStars() {
                stars.forEach(star => {
                    star.classList.remove('text-warning');
                    star.classList.add('text-secondary');
                });
            }

            function highlightStars(index) {
                for (let i = 0; i <= index; i++) {
                    stars[i].classList.remove('text-secondary');
                    stars[i].classList.add('text-warning');
                }
            }
        });
    </script>
</body>

</html>