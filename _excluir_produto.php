<?php

 include '_conexao.php';

$id = $_GET["id"];

$sql = "Delete  from `estoque` where id_estoque = $id";

$deletar = mysqli_query($conexao,$sql);


 header('Location:_listar_produtos.php');
?>
