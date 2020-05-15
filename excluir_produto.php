<?php

 include 'conexao.php';

$id = $_GET["id"];

$sql = "Delete  from `estoque` where id_estoque = $id";

$deletar = mysqli_query($conexao,$sql);


 header('Location:listar_produtos.php');
?>
