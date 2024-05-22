<?php
$enllac = mysqli_connect("localhost","alumne","alumne", "pacodades");

if(!$enllac) {
    echo "Error a la conexio" .mysqli_connect_error();
    exit;

}
// $resultat=mysqli_query($enllac, "SELECT * FROM Usuarios");

// echo "Es retorna". mysqli_num_rows($resultat) . "registres";

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
        <a href="/web/formulari.php">Añadir</a><a href="/web/llista.php">Editar</a><a href="pagina2.html">Eliminar</a>
        
    </nav>

    <table border='1'>
        <tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Email</th></tr>
        
        <?php
            $resultat=mysqli_query($enllac, "SELECT * FROM Usuarios");
            while ($fila = mysqli_fetch_array($resultat)) {
                echo "<tr>";
                echo "<td>" . $fila['ID'] . "</td>";
                echo "<td>" . $fila['Nombre'] . "</td>";
                echo "<td>" . $fila['Edad'] . "</td>";
                echo "<td>" . $fila['Email'] . "</td>";
                echo "</tr>";
            }

        ?>
    </table>
    
</body>

</html>
