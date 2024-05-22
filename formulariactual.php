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
    <title>Formulario de Incorporación de Datos</title>
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
        <a href="/web/conexio.php">Principal</a><a href="pagina2.html">Página 2</a>
        
    </nav>
    <h2>Formulario de Incorporación de Datos</h2>
    <?php
    $iden = $_GET['ID'];
    $resultat = mysqli_query($enllac, "SELECT * FROM Usuarios WHERE ID='$iden'");
    if (!$resultat) {
        die("Error al obtener datos: " . mysqli_error($enllac));
    }
    $registre = mysqli_fetch_array($resultat);
    ?>
    <form method="post" action="funciones/actualiza.php?ID=<?php echo $iden ?>">
    <table border="1">
        <tr>
            <td>Nombre:</td><td><input type="text" name="Nombre" value="<?php echo $registre['Nombre']; ?>"/></td>
        </tr>
        <tr>
            <td>Edad:</td><td><input type="number" name="Edad" value="<?php echo $registre['Edad']; ?>"/></td>
        </tr>
        <tr>
            <td>Email:</td><td><input type="email" name="Email" value="<?php echo $registre['Email']; ?>"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="Enviar"></td>
        </tr>
       
    </table>
</body>
</html>