<?php

$db_host = "localhost";
$db_user = "root";
$db_pasword = "";
$db_name = "soheestilistas";

$query = mysqli_connect($db_host, $db_user, $db_pasword, $db_name);

if (!$query) {
    die( "Error" . mysqli_connect_error());
}
echo "Conectado...";

$names = $_POST["names"];
$passwords = $_POST["passwords"];
$email = $_POST["email"];
$phone = $_POST["phone"];

//Consulta

$insert ="INSERT INTO user (id, names, passwords, email, phone) value ('0', '$names', '$passwords', '$email', '$phone')";

$ir = mysqli_query($query, $insert);
if($ir) {
    echo "Se ha registrado con exito";
} else {
    echo  "Hay un error";
}

?>