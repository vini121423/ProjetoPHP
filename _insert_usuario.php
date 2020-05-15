<?php
   include 'conexao.php';
   include 'script/password.php';



   $nomeusuario = $_POST['nomeusuario'];
   $email = $_POST['emailusuario'];
   $senha = $_POST['senhausuario'];
   $nivel = $_POST['nivelusuario'];
   $status = 'Ativo';



   $sql = "INSERT INTO usuarios (nome_usuario,email_usuario,senha_usuario,nivel_usuario,status) values ('$nomeusuario','$email',sha1('$senha'),'$nivel','$status')";        

   $inserir = mysqli_query($conexao,$sql);


   header('Location:index.php');
?>



