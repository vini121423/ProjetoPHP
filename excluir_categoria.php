<?php

 include 'conexao.php';

$id = $_GET["id"];

$sql = "Delete  from `categoria` where id_categoria = $id";

$deletar = mysqli_query($conexao,$sql);

  header('Location: listar_categorias.php')
?>

