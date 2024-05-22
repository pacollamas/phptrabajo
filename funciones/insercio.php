<?php
$enllac = mysqli_connect("localhost","alumne","alumne", "pacodades");

if (!$enllac) {
    echo "Error en la conexión: " . mysqli_connect_error();
    exit;
}

$Nombre = $_POST['Nombre'];
$Edad = $_POST['Edad'];
$Email = $_POST['Email'];

$insercio_sql = "INSERT INTO Usuarios VALUES (NULL, '$Nombre', '$Edad', '$Email')";

?>
<!DOCTYPE html>
<html lang="es">
<head>
<style>
            
            nav {
                background-color: #333;
                overflow: hidden;
            }

            nav a {
                float: left;
                display: block;
                color: white;
                text-align: center;
                padding: 14px 20px;
                text-decoration: none;
            }

            nav a:hover {
                background-color: #ddd;
                color: black;
            }
    </style>
    <title>Formulario de Creación de Usuario</title>
</head>
<body>
    <nav>
        <a href="/web/conexio.php">Principal</a>
        
    </nav>
    <?php
    $resultat = mysqli_query($enllac, $insercio_sql);
    if ($resultat) {
        echo "Inserció de dades CORRECTAMENT realitzada";
    } else {
        echo "Error en la inserció de dades: " . mysqli_error($enllac);
    }
    ?>
</body>
</html>