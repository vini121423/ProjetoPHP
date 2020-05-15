<?php


include 'conexao.php';


$id = $_POST["id"];
$categoria = $_POST["categoria"];


 $sql ="UPDATE `categoria` SET `categoria`='$categoria'  WHERE id_categoria=$id";

 $atualizar = mysqli_query($conexao,$sql);

 header('Location:listar_categorias.php');
?>
