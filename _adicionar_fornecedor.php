<!DOCTYPE html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/producao.png" />
    <title>Adicionar Fornecedor | System</title>
    <link rel="icon" type="image/png" href="img/producao.png" />
  </head>
  <body>
    <div class="container col-sm-3" style="margin-top:100px">
       <h4> Cadastrar Fornecedor </h4>
    <form action="_inserir_fornecedor.php" method="post"> 
     <div class="form-group">
    <input type="text" class="form-control"  name="fornecedor" placeholder="Insira nome da fornecedor..."  required autocomplete="off">
     <br>
     
  </div>


  <div class="container" align="center">
  <button type="submit" class="btn btn-success"> Cadastrar</button>
    <a href="_pagina_inicial.php" class="btn btn-info">Voltar</a>
  </div>


    </div>



</body>

</html>