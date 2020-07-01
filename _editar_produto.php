<?php

$id = $_GET["id"];


?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="img/producao.png" />
  <title>Editar Produtos | System</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>


  <div class="col-sm-4 container-fluid " align="center" style="margin-top:50px">
    <h1>Atualizar</h1>
    <hr>
    <form action="_atualizar_produto.php" method="post">
      <?php
      include '_conexao.php';

      $sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
      $buscar = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($buscar)) {
        $id_estoque = $array['id_estoque'];
        $nroproduto = $array['nroproduto'];
        $nomeproduto = $array['nomeproduto'];
        $categoria = $array['categoria'];
        $quantidade = $array['quantidade'];
        $fornecedor = $array['fornecedor'];
        $vlunidade = $array['vlunidade'];
        $arquivo = $array['arquivo'];


      ?>




        <div class="form-group">
          <label>Nº Produto</label>
          <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
          <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display:none">
        </div>

        <div class="form-group">
          <label>Nome produto</label>
          <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">

        </div>

        <div class="form-group">
          <label>Categoria</label>
          <select class="form-control" name="categoria" value="<?php echo $categoria ?>">
            <option><?php echo $categoria ?></option>

          </select>
        </div>


        <div class="form-group">
          <label>Quantidade</label>
          <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">

        </div>

        <div class="form-group">
          <label>Fornecedor</label>
          <select class="form-control" name="fornecedor" value="<?php echo $fornecedor ?>">
            <option><?php echo $fornecedor ?></option>


          </select>
        </div>

        <div class="form-group">
          <label>Valor unidade</label>
          <input type="text" class="form-control" name="vlunidade" value="<?php echo $vlunidade ?>">

        </div>


        <br>
        <div class="container" align="center">
          <h4> Arquivo</h4>
          <input type="file" name="arquivo">
        </div>

        <button type="submit" class="btn btn-dark" value="Atualizar"> Atualizar </button>
        <a href="_pagina_inicial.php" class="btn btn-info">Voltar</a>




      <?php } ?>
    </form>
  </div>

</body>

</html>