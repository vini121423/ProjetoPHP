﻿<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Listagem de Produtos | System</title>
    <link rel="icon" type="image/png" href="img/producao.png" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body >

<?php
   include 'conexao.php';
     session_start();
     $usuario = $_SESSION['usuario'];


     if(!isset($_SESSION['usuario'])){
        header('Location: login.php');
     }

     $sql = "SELECT nivel_usuario from usuarios where email_usuario = '$usuario'";
     $buscar = mysqli_query($conexao,$sql);

     $array = mysqli_fetch_array($buscar);
     $nivel = $array['nivel_usuario'];

  ?>


  <div class="container" style="margin-top:100px">
      <h3 style="text-align:center"> PRODUTOS LISTADOS </h3>

      <br>
      <br>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nº Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Valor Unidade</th>
      <th scope="col">Imagem</th>
      <th scope="col">Data/Hora</th>
      <th scope="col">AÇÃO</th>
    </tr>
  </thead>
  
      <?php
          include 'conexao.php';
          
          $sql ="Select * from `estoque`";
          $busca = mysqli_query($conexao,$sql);

          while ($array = mysqli_fetch_array($busca)){
              $id_estoque = $array['id_estoque'];
              $nroproduto = $array['nroproduto'];
              $nomeproduto = $array['nomeproduto'];
              $ncategoria = $array['categoria'];
              $quantidade = $array['quantidade'];
              $nfornecedor = $array['fornecedor'];
              $vlunidade = $array['vlunidade'];
              $arquivo = $array['arquivo'];
              $data = $array['data'];
              
      ?>
    <tr>
      <td> <?php echo $nroproduto ?></td>
      <td> <?php echo $nomeproduto ?></td>
      <td> <?php echo $ncategoria ?></td>
      <td> <?php echo $quantidade ?></td>
      <td> <?php echo $nfornecedor ?></td>
      <td> R$ <?php echo $vlunidade ?></td>
      <td> <img src="upload/<?php echo $arquivo ?>" onMouseOver="aumenta(this)" onMouseOut="diminui(this)" height="42" width="42"> </td>
      <td> <?php echo $data ?> </td>
      <td>
        <?php 
          if(($nivel==1)||($nivel==2)){

          ?>   
      <a class="btn btn-warning btn-sm" style="color:white" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button">Editar</a>
        <br> 
         <br> 
          <?php } ?>

          <?php 
             if($nivel==1){
          ?>  
      <a class="btn btn-danger btn-sm" style="color:white" href="excluir_produto.php?id=<?php echo $id_estoque ?>" role="button">Excluir</a>
      <?php } ?>
      </td>
      

    </tr>
             <?php } ?>
</table>
  
  <div class="container" align="center">
    <a href="index.php" class="btn btn-info">Voltar</a>
  </div>


  </div>
 



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script language="javascript">
<!--
function aumenta(obj){
    obj.height=obj.height*2;
   obj.width=obj.width*2;
}
 
function diminui(obj){
   obj.height=obj.height/2;
   obj.width=obj.width/2;
}
//-->
</script>

</body>

</html>