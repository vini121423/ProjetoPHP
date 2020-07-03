<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aprovar Usuários | System</title>
  <link rel="icon" type="image/png" href="img/producao.png" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/css.css">
</head>

<body>
  <div class="container" style="margin-top:100px">
    <h3> Aprovar usuário </h3>

    <br>
    <br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col">Nível</th>
          <th scope="col">AÇÃO</th>
        </tr>
      </thead>

      <?php
      include '_conexao.php';

      $sql = "Select * from `usuarios` where status='Inativo'";
      $busca = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($busca)) {
        $id_usuario = $array['id_usuario'];
        $nomeusuario = $array['nome_usuario'];
        $email = $array['email_usuario'];
        $nivel = $array['nivel_usuario'];
      ?>
        <tr>
          <td style="color:white"> <?php echo $nomeusuario ?></td>
          <td style="color:white"> <?php echo $email ?></td>
          <td style="color:white"> <?php echo $nivel ?></td>

          <td><a class="btn btn-warning btn-sm" style="color:white" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=1" role="button"> <i class="icon-suitcase"></i> Administrador</a>
            <a class="btn btn-success btn-sm" style="color:white" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=2" role="button"><i class="icon-user"></i> Funcionário</a>
            <a class="btn btn-info btn-sm" style="color:white" href="_aprovar_usuario.php?id=<?php echo $id_usuario ?> &nivel=3" role="button"><i class="icon-reorder"></i> Conferente</a>

            <a class="btn btn-danger btn-sm" style="color:white" href="_excluir_usuario.php?id=<?php echo $id_usuario ?>" role="button"><i class="icon-trash"></i> Excluir</a>
          </td>
        <?php } ?>

        </tr>
    </table>
  </div>
  <br>

  <div class="container" align="center">
    <a href="_pagina_inicial.php" class="btn btn-info">Voltar</a>
  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>