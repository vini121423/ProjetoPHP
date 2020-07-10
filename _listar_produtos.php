<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Listagem de Produtos | System</title>
  <link rel="icon" type="image/png" href="img/producao.png" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/css.css">
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
    <button class="login-button"> <a href="_pdf.php">TESTE</a> </button>

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
          <th scope="col">Data</th>
          <th scope="col">AÇÃO</th>
        </tr>
      </thead>

      <?php
      include '_conexao.php';

      $sql = "Select * from `estoque`";
      $busca = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($busca)) {
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
          <td> <img src="upload/<?php echo $arquivo ?>" class="img" height="42" width="42"> </td>
          <td> <?php echo date('d/m/Y', strtotime($data)) ?> </td>
          <td>
            <?php
            if (($nivel == 1) || ($nivel == 2)) {

            ?>
              <a class="btn btn-warning btn-sm" style="color:white" href="_editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="icon-pencil"></i> Editar</a>
              <br>
              <br>
            <?php } ?>

            <?php
            if ($nivel == 1) {
            ?>
              <a class="btn btn-danger btn-sm" style="color:white" href="_excluir_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="icon-trash"></i> Excluir</a>
            <?php } ?>
          </td>


        </tr>
      <?php } ?>
    </table>

    <div class="container" align="center">
      <a href="_index.php" class="btn btn-info">Voltar</a>
    </div>


  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>