<?php

  $id = $_GET["id"];



?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/producao.png" />
    <title>Editar Categoria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/icone_inicio.png" />

</head>

<body>
 

 <div class="col-sm-4 container-fluid " align="center" style="margin-top:50px">
    <h1>Atualizar</h1>
    <hr> 
<form action="_atualizar_categoria.php" method="post"> 
    <?php 
        include '_conexao.php';

    $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
    $buscar = mysqli_query($conexao,$sql);

     while ($array = mysqli_fetch_array($buscar)){
        $id_categoria = $array['id_categoria'];
        $categoria = $array['categoria'];
       
     
    ?>
           
           
           
           
 

  <div class="form-group">
    <label>Nome Categoria</label>
    <input type="text" class="form-control"  name="categoria" value="<?php echo $categoria ?>">
    <input type="text" class="form-control"  name="id" value="<?php echo $id_categoria ?>" style="display:none">

  </div>
 

  <div>
   <button type="submit" class="btn btn-success"> Atualizar </button>
   </div>
   <?php } ?>
</form>
</div>

</body>

</html>