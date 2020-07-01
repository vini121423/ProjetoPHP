<?php
  include '_conexao.php';
  
$categoria = $_POST["categoria"];
$sql = "INSERT into Categoria(categoria) values ('$categoria')";
$inserir = mysqli_query($conexao,$sql);

header('Location:_listar_categorias.php');
?>
