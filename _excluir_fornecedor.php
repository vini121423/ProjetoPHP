<?php

 include '_conexao.php';

$id = $_GET["id"];

$sql = "Delete  from `fornecedor` where id_fornecedor = $id";

$deletar = mysqli_query($conexao,$sql);

  header('Location: _listar_fornecedores.php')
?>

