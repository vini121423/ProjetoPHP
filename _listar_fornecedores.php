<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listagem de Fornecedores | System</title>
  <link rel="icon" type="image/png" href="img/producao.png" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/css.css">
</head>

<body>
  <div class="container" style="margin-top:100px">
    <h3 style="text-align:center"> FORNECEDORES LISTADOS </h3>

    <br>
    <br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Fornecedor</th>
          <th scope="col">AÇÃO</th>
        </tr>
      </thead>

      <?php
      include '_conexao.php';

      $sql = "Select * from `fornecedor`";
      $busca = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($busca)) {
        $id_fornecedor = $array['id_fornecedor'];
        $fornecedor = $array['fornecedor'];

      ?>
        <tr>
          <td> <?php echo $fornecedor ?></td>
          <td><a class="btn btn-warning btn-sm" href="_editar_fornecedor.php?id=<?php echo $id_fornecedor ?>" role="button"><i class="icon-pencil"></i> Editar</a>
            <a class="btn btn-danger btn-sm" href="_excluir_fornecedor.php?id=<?php echo $id_fornecedor ?>" role="button"><i class="icon-trash"></i> Excluir</a>
          </td>
        <?php } ?>

        </tr>
    </table>
  </div>
  <br>

  <div class="container" align="center">
    <a href="_index.php" class="btn btn-info">Voltar</a>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>