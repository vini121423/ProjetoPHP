<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/producao.png" />
    <title>Cadastrar Produto | System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    

</head>

<body>
    <div class="container-fluid">
        <div class="col-sm-4">


        </div>

        <div class="col-sm-4 container-fluid " align="center" style="margin-top:50px">
            <h1>Cadastro</h1>
            <hr>
            <form action="_inserir_produto.php" method="post" enctype="multipart/form-data"> 
            <div class="form-group">
    <label>Nº Produto</label>
    <input type="number" class="form-control"  name="nroproduto" placeholder="Insira um número..." required required autocomplete="off">

  </div>

  <div class="form-group">
    <label>Nome produto</label>
    <input type="text" class="form-control"  name="nomeproduto" placeholder="Insira o nome do produto..." required required autocomplete="off">

  </div>
  
  <div class="form-group">
    <label>Categoria</label>
    <select class="form-control" name="categoria">
      <?php 
        include '_conexao.php';
            $sql = "SELECT categoria from Categoria order by categoria";
            $buscar = mysqli_query($conexao,$sql);

               while($array = mysqli_fetch_array($buscar)){
                $id_categoria = $array['id_categoria'];
                $nome_categoria = $array['categoria']; 

       ?>
       <option> <?php echo $nome_categoria ?> </option>
        <?php } ?>
    </select>
  </div>


  <div class="form-group">
    <label>Quantidade</label>
    <input type="number" class="form-control"  name="quantidade" placeholder="Insira a Qtde..." required autocomplete="off">

  </div>

  <div class="form-group">
    <label>Fornecedor</label>
    <select class="form-control" name="fornecedor">
    <?php 
        include '_conexao.php';
            $sql2 = "SELECT fornecedor from Fornecedor order by fornecedor";
            $buscar2 = mysqli_query($conexao,$sql2);

               while($array2 = mysqli_fetch_array($buscar2)){
                $id_fornecedor = $array2['id_fornecedor'];
                $fornecedor = $array2['fornecedor']; 

       ?>
       <option> <?php echo $fornecedor ?> </option>
        <?php } ?>
    </select>
  </div>

  
    <label>Valor da unidade</label>
    <input type="text" class="form-control"  name="vlunidade" placeholder="R$ 0,00" required autocomplete="off">
  </div>
<br>
  <div class="container" align="center">
<h4> Arquivo</h4>
<?php if(isset($msg) && $msg != false) echo "<p> $msg </p>"; ?>
  <input type="file" required name="arquivo">

  </div>
  <br>
  <div align="center">
      <input type="submit" class="btn btn-dark" value="Salvar">
      <a href="_pagina_inicial.php" class="btn btn-info">Voltar</a>
  </div>
  
    
</body>
<html>