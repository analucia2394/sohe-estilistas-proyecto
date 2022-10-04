<?php

$db_host = "localhost";
$db_user = "root";
$db_pasword = "";
$db_name = "soheestilistas";

$query = mysqli_connect($db_host, $db_user, $db_pasword,$db_name);

if (!$query) {
    die( "Error" . mysqli_connect_error());
}
echo "Conectado...";

$name = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$type = $_POST["type"];


//Consulta

$insert ="INSERT INTO soheestilistas (id, name, password, email, phone, type) value ('0', '$name', '$password '$email', '$phone', '$type')";

$ir = mysqli_query($query, $insert);
if($ir) {
    echo "Se ha registrado con exito";
} else {
    echo  "Hay un error";
}

?>