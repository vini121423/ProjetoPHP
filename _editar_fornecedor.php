<?php

  $id = $_GET["id"];



?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/producao.png" />
    <title>Editar Fornecedor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

</head>

<body>
<?php
    include '_conexao.php';
    session_start();
    $usuario = $_SESSION['usuario'];


    if (!isset($_SESSION['usuario'])) {
        header('Location: _login.php');
    }

    $sql = "SELECT nivel_usuario from usuarios where email_usuario = '$usuario'";
    $buscar = mysqli_query($conexao, $sql);

    $array = mysqli_fetch_array($buscar);
    $nivel = $array['nivel_usuario'];

    ?>

 <div class="col-sm-4 container-fluid " align="center" style="margin-top:50px">
    <h1>Atualizar</h1>
    <hr> 
<form action="_atualizar_fornecedor.php" method="post"> 
    <?php 
        include '_conexao.php';

    $sql = "SELECT * FROM `fornecedor` WHERE id_fornecedor = $id";
    $buscar = mysqli_query($conexao,$sql);

     while ($array = mysqli_fetch_array($buscar)){
        $id_fornecedor = $array['id_fornecedor'];
        $fornecedor= $array['fornecedor'];
       
     
    ?>
           
           
           
           
 

  <div class="form-group">
    <label>Nome Fornecedor</label>
    <input type="text" class="form-control"  name="fornecedor" value="<?php echo $fornecedor ?>">
    <input type="text" class="form-control"  name="id" value="<?php echo $id_fornecedor ?>" style="display:none">

  </div>
 

  <div>
   <button type="submit" class="btn btn-success"> Atualizar </button>
   </div>
   <?php } ?>
</form>
</div>

</body>

</html>