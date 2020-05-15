<?php

 include 'conexao.php';

$id = $_GET["id"];

$sql = "Delete  from `fornecedor` where id_fornecedor = $id";

$deletar = mysqli_query($conexao,$sql);

  header('Location: listar_fornecedores.php')
?>

