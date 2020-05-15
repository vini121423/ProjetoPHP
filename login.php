<!DOCTYPE html>
  <head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    <title>Login | System</title>
  </head>
  <body style="background-color:#F0FFFF">

     <div class="uk-container" style="margin-top:20px;width:250px;border-radius:15px;border:2px solid black;background-color:white" align="center">
     <img src="img/login.png" height="250px" width="250px">
        <div style="padding:20px">
        <form action="autenticar.php" method="post">
             <div class="uk-legend">
               <label> Usuário </label>
               <input type="email" name="usuario" class="uk-input placeholder="Usuário" autocomplete="off" required>
              </div> 


              <div class="uk-legend">
               <label> Senha </label>
               <input type="password" name="senha" class="uk-input placeholder="Senha" autocomplete="off" required>
              </div> 
              <br>
              <div align="center">
              <button type="submit" class="uk-button uk-button-primary" style="border-radius:20px">Entrar</button>
              <br>
              </div>
             </div>  


        </form>
    </div>

     </div>
      


     <center>
        <p style="font-size:14px">Não possui cadastro ? Clique <a href="cadastrar_usuario_externo.php"> aqui </a><p>
     </center>

  </body>
</html>  