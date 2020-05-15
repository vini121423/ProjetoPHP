﻿<!DOCTYPE html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/producao.png" />


    <title>Gestão de Produção | System</title>
  </head>
  <body style="background-color:#B0C4DE">

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
  
   <div class="container container-fluid" style="margin-top:120px">
   <h1 style="text-align:center;color:white"> CENTRAL DE AÇÕES  </h1>
   <br>
   
   <div class="row">
     <?php
          if(($nivel == 1)||($nivel==2)){

          

     ?>
  <div class="col-sm-4" align="center">
    <div class="card">
      <div class="card-body">
            <img src="img/produto.png" height="170px" width="170px">
        <h5 class="card-title">Adicionar Produto</h5>
        <p class="card-text">Adicione  produtos ao seu estoque.</p>
        <a href="cadastrar_produto.php" class="btn btn-primary">Cadastrar</a>
      </div>
    </div>
  </div>

          <?php } ?>

  <div class="col-sm-4" align="center">
    <div class="card">
      <div class="card-body">
      <img src="img/lista.png" height="170px" width="170px">
        <h5 class="card-title">Lista de Produtos</h5>
        <p class="card-text">Produtos listados no estoque</p>
        <a href="listar_produtos.php" class="btn btn-primary">Listar</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4" align="center">
    <div class="card">
      <div class="card-body">
      <img src="img/categorias.png" height="170px" width="170px">
        <h5 class="card-title">Listar Categorias</h5>
        <p class="card-text">Adicione mais categorias ou edite </p>
        <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar</a>
        <a href="listar_categorias.php" class="btn btn-primary">Editar</a>
      </div>
    </div>
  </div>
  


  <div class="col-sm-4" align="center" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
      <img src="img/fornecedor.png" height="170px" width="170px">
        <h5 class="card-title">Adicionar Fornecedores</h5>
        <p class="card-text">Adicione mais fornecedores</p>
        <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar</a>
        <a href="listar_fornecedores.php" class="btn btn-primary">Editar </a>
        <br>
        
        
      </div>
    </div>
  </div>

 
  <?php
          if($nivel == 1){

     ?>
  <div class="col-sm-4" align="center" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
      <img src="img/usuario.png" height="170px" width="170px">
        <h5 class="card-title">Adicionar Usúarios</h5>
        <p class="card-text">Adicione usuários</p>
        <a href="cadastrar_usuario.php" class="btn btn-primary">Cadastrar</a>
      </div>
    </div>
  </div>
  <?php } ?>

  <?php
          if($nivel == 1){
     ?>

  <div class="col-sm-4" align="center" style="margin-top:20px">
    <div class="card">
      <div class="card-body">
      <img src="img/code.png" height="170px" width="170px">
        <h5 class="card-title">Aprovar usuários</h5>
        <p class="card-text">Aprovar usuários cadastrados</p>
        <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar</a>
      </div>
    </div>
  </div>
  <?php } ?>


</div>


     </div>



     
   

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>