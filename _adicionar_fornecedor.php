<!DOCTYPE html>

<head>
  <title>Adicionar Fornecedor | System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="img/producao.png" />

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

  <div class="col-sm-12">
    <div class="row">
      <div class="container-fluid col-sm-5">
        <img src="https://www.femicro-es.com.br/wp-content/uploads/2014/09/540eff0237e81.jpg" height="500px" width="500px" class="top">
      </div>


      <div class="container-fluid col-sm-7 left">
        <form action="_inserir_fornecedor.php" method="post">
          <label> Cadastrar Fornecedor </label>
          <input type="text" class="form-control" id="input" name="fornecedor" placeholder="Insira nome da fornecedor..." required autocomplete="off">

          <div class="top">
            <button type="submit" class="btn btn-success"> Cadastrar</button>
            <a href="_index.php" class="btn btn-info">Voltar</a>
          </div>
        </form>
      </div>

    </div>
  </div>



</body>

</html>