<?php
  include '_conexao.php';
$fornecedor = $_POST["fornecedor"];
$sql = "INSERT into Fornecedor(fornecedor) values ('$fornecedor')";
$inserir = mysqli_query($conexao,$sql);


?>
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
<link rel="icon" type="image/png" href="img/producao.png" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <div class="container">
    <h4 style="margin-top:20px"> Fornecedor adicionado com Sucesso!!!! </h4>
     <div style="padding-top: 30px">
      <a href="_adicionar_fornecedor.php" role="button" class="btn btn-sm btn-danger"> Cadastrar nova fornecedor </a>
     </div>
  </div>