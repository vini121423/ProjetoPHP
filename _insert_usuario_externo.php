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
    
<?php
   include '_conexao.php';
   include 'script/password.php';



   $nomeusuario = $_POST['nomeusuario'];
   $email = $_POST['emailusuario'];
   $senha = $_POST['senhausuario'];
  // $nivel = $_POST['nivelusuario']; //
   $status = 'Inativo';



   $sql = "INSERT INTO usuarios (nome_usuario,email_usuario,senha_usuario,status) values ('$nomeusuario','$email',sha1('$senha'),'$status')";        

   $inserir = mysqli_query($conexao,$sql);

?>

<link rel="icon" type="image/png" href="img/producao.png" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="container">
 <h3> Usuário Cadastrado,Esperando aprovação.... </h3>
    <div style="margin-top:50px">
      <a href="_index.php" class="btn btn-sm btn-danger"> Voltar </a>
    </div>
</div>


