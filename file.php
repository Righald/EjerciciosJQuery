<?php 
$mysqli = new mysqli("localhost", "root", '', "clasenet");
 
if ($mysqli->connect_errno) 
{
    printf("Falló la conexión: %s\n", $mysqli->connect_error);
    exit();
}
else
{
	$statement = $mysqli->prepare("INSERT INTO usuario (email, password, b_year) VALUES (?,?,?)");

	$statement->bind_param("sss", $_POST['email'], $_POST['password'], $_POST['year']);
	echo 'Usuario Creado Exitosamente';
	$statement->execute();
}

$mysqli->close();

?>