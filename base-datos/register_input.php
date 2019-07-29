<?php

include("apertura-base-datos.php");

if(isset($_POST['registro'])){


$us_nombre = $_POST["us_nombre"];
$us_apellido = $_POST["us_apellido"];
$us_contrasenia = $_POST["us_contrasenia"];
$us_dni = $_POST["us_dni"];
$us_tel = $_POST["us_tel"];
$us_mail = $_POST["us_mail"];


$stmt = $conn->prepare("INSERT INTO user (us_nombre, us_apellido, us_contrasenia, us_dni, us_tel, us_mail) VALUES ('?', '?', '?', '?','?','?')");

$stm = mysqli_stmt_init($conn);


$stmt->bind_param('sssiis', $us_nombre, $us_apellido, $us_contrasenia, $us_dni, $us_tel, $us_mail);





echo "New records created successfully";



$stmt->close();
$conn->close();

};



?>