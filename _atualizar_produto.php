<?php


include '_conexao.php';




$id = $_POST["id"];
// $nroproduto = $_POST["nroproduto"]; //
$nomeproduto = $_POST["nomeproduto"];
$categoria = $_POST["categoria"];
$quantidade = $_POST["quantidade"];
$fornecedor = $_POST["fornecedor"];
$vlunidade = $_POST["vlunidade"];
$arquivo = $_FILES["arquivo"];
$data = $_POST["data"];



$sql = "UPDATE `estoque` set `nomeproduto` ='$nomeproduto',`categoria` ='$categoria',`quantidade` = $quantidade,`fornecedor`='$fornecedor',`vlunidade`='$vlunidade',`arquivo`='$arquivo',`data` = NOW() where id_estoque =$id";


 $atualizar = mysqli_query($conexao,$sql);


 header('Location:_listar_produtos.php');

?>
