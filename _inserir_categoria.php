<?php
  include 'conexao.php';
  
$categoria = $_POST["categoria"];
$sql = "INSERT into Categoria(categoria) values ('$categoria')";
$inserir = mysqli_query($conexao,$sql);

header('Location:listar_categorias.php');
?>
