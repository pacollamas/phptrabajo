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
    <title>Formulario de Incorporación de Datos</title>
</head>
<body>

<?php
    $iden = $_GET['ID'];
    $consulta = "UPDATE Usuarios SET Nombre = '" . $_POST['Nombre'] . "',
                                    Edad = '" . $_POST['Edad'] . "',
                                    Email = '" . $_POST['Email'] . "'
                                    WHERE ID = $iden";

if (!mysqli_query($enllac, $consulta)) {
    echo "Error en l'actualització!!!";
} else {
    echo "Actualitzacion realizada!! <a href='../../web/llista.php'>Volver</a>";
}

?>

</body>
</html>