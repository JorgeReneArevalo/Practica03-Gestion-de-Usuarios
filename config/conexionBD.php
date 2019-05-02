<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "hipermedial";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 $conn->set_charset("utf8");
 // Check connection
 if ($conn->connect_error) {
 die("Conexión fallida!! " . $conn->connect_error);
 }else{
 echo "Conexión exitosa!! :)";
 }
?>