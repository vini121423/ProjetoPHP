<!DOCTYPE html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/producao.png" />
    <title>Cadastrar Usuario | System</title>
  </head>
  <body>

      <div class="container-fluid" style="width:400px;margin-top:100px">
         <h3>  Cadastrar Usuário Interno</h3>
      <form action="_insert_usuario.php" method="post">
  <div class="form-group">
    <label>Nome do Usuário</label>
    <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" name="emailusuario" class="form-control" required autocomplete="off" placeholder="E-mail Completo">
  </div>


  <div class="form-group">
    <label>Senha</label>
    <input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
  </div>

  <div class="form-group">
    <label>Repetir senha</label>
    <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Senha" oninput="validaSenha(this)">
    <small>Precisa ser igual a senha digitada acima.</small>
  </div>

  <div class="form-group">
    <label> Nível de Usuário</label>
     <select class="form-control" name="nivelusuario">
     
       <option value="1"> Administrador </option>
       <option value="2"> Funcionário </option>
       <option value="3"> Conferente </option>
     </select>
  </div>
  <div align="right">
  <button type="submit" class="btn btn-danger">Cadastrar</button>
  </div>
</form>



      </div>












    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <script>
            function validaSenha (input){ 
            	if (input.value != document.getElementById('txtSenha').value) {
                  input.setCustomValidity('Repita a senha corretamente');
                 } else {
                      input.setCustomValidity('');
                 }
                } 
        </script>


  </body>
</html>  