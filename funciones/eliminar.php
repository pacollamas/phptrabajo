<?php
$enllac = mysqli_connect("localhost","alumne","alumne", "pacodades");

if(!$enllac) {
    echo "Error a la conexio" .mysqli_connect_error();
    exit;

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Eliminacion de Datos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
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
</head>
<body>
    <nav>
        <a href="/web/conexio.php">Principal</a>
        
    </nav>
    <?php

    $iden = $_GET['ID'];
    $consulta = "DELETE FROM Usuarios WHERE ID=$iden";
    if (!mysqli_query($enllac, $consulta)) {
        echo "Error en l'eliminació del registre!!!";
    } else {
        echo "Eliminació realitzada!! <a href='../../web/llista.php'>Tornar al llistat</a>";
    }
    
    ?>
</body>
</html>