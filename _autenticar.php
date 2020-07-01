<?php


  include '_conexao.php';
  include 'script/password.php'; 

  $usuario = $_POST['usuario'];
  $senhausuario = $_POST['senha'];
 
      $sql = "Select email_usuario,senha_usuario from usuarios where email_usuario = '$usuario'";
      $buscar = mysqli_query($conexao,$sql);

      $total = mysqli_num_rows($buscar);

  while($array = mysqli_fetch_array($buscar)){
       $senha = $array['senha_usuario'];
  

    $senhadecodificada = sha1($senhausuario);   

      if($total > 0){
        if($senha == $senhadecodificada ){

           session_start();
           $_SESSION['usuario'] = $usuario;


           
            header('Location: _index.php');
        } else{

            header('Location: _erro.php');

        }

      }
    }
      if($total === 0){
          header('Location: _erro.php');

      }



?>