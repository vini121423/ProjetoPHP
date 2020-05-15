<?php


include 'conexao.php';


$id = $_POST["id"];
$fornecedor = $_POST["fornecedor"];


 $sql ="UPDATE `fornecedor` SET `fornecedor`='$fornecedor'  WHERE id_fornecedor=$id";

 $atualizar = mysqli_query($conexao,$sql);

 header('Location:listar_fornecedores.php');
?>
