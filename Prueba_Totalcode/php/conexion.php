<?php

function conexion()
{
$servername = "localhost";
$username = "root";
$password = "";
$database = "prueba_totalcode";
$link= mysqli_connect($servername,$username,$password,$database);		
mysqli_set_charset($link, "utf8");

return $link;
}
?>