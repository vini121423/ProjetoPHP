<!DOCTYPE html>

<head>
   <title>Login | System</title>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="css/css.css">

</head>

<body>

   <div class="container-fluid col-sm-4 top align-center">
      <img src="https://image.flaticon.com/icons/png/512/295/295128.png" class="img-center" height="230px" width="230px">
      <div>
         <form action="autenticar.php" method="post">
            <div class="form-group">
               <label> Usuário </label>
               <input type="email" name="usuario" class="form-control" placeholder=" Usuário" autocomplete="off" required>
            </div>


            <div class="form-group">
               <label> Senha </label>
               <input type="password" name="senha" class="form-control" placeholder=" Senha" autocomplete="off" required>
            </div>
            <br>
            <div class="img-center">
               <button type="submit" class="login-button">Entrar</button>
               <br>
            </div>
      </div>
      <h6>Não possui cadastro ? Clique <a href="cadastrar_usuario_externo.php"> aqui </a>
         <h6>

            </form>
   </div>
   </div>





</body>

</html>