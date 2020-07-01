<?php

 include '_conexao.php';



$nroproduto = $_POST['nroproduto'];  // Recebe o valor VARIAVEL = VALOR //
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];
$vlunidade = $_POST['vlunidade'];

$msg = false;
if(isset($_FILES['arquivo'])){
  $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
  $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
  $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
  move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
  $sql = "INSERT INTO `estoque`(`nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`,`vlunidade`,`arquivo`,`data`) VALUES ($nroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor','$vlunidade','$novo_nome', NOW())";

}
 $inserir = mysqli_query($conexao,$sql);

   header('Location: _cadastrar_produto.php');
?>