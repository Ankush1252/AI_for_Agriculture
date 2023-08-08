<?php
$server = "localhost";
$username = "root";
$password = "Ankush@1252";
$database = "agridb";

$conn = mysqli_connect($server , $username, $password, $database);
if (!$conn)
{

    die("Error".mysqli_connect_error());
}

?>