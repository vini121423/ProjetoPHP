<?php
    include '_conexao.php';

   $id=$_GET['id'];


   $deletar = "DELETE FROM usuarios where id_usuario = $id";

     $fila = mysqli_query($conexao,$deletar);



  header("Location: _aprovar_usuarios.php");


?>