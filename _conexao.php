<?php

$servername ="localhost";
$database = "curso_estoque";
$username = "root";
$password = "senha";

$conexao = mysqli_connect($servername,$username,$password,$database);

$mysqli = new mysqli($servername, $username, $password, $database);
if($mysqli->connect_errno)
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;




?>