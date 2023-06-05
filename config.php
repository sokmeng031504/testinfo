<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "createdatabase";

$conn = new mysqli($servername, $username, $password, $dbname);
$sql=mysqli_select_db($conn,$dbname);

?>