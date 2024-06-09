<?php

echo "hola soy los datos enviados mediante el form (get)";

var_dump($_POST);
?>
<br>
<br>
<button>
  <a rel="stylesheet" href="index.php">  volver
    </a>
  </button>
<br>
<br>
<?php 
echo "El usuario es: " .  $_POST['nombre'];
echo "la descripcion es: " .  $_POST['descripcion'];
echo "El genero es: " .  $_POST['genero'];
echo "La calificacion es: " .  $_POST['calificacion'];
echo "El año es: " .  $_POST['año'];
echo "El director es: " .  $_POST['director'];
echo "la imagen es: " .  $_POST['imagen'];


?>