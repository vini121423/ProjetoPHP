<!DOCTYPE html>

<head>
  <title>Adicionar Categoria | System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="img/producao.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/css.css">

</head>

<body>

  <div class="col-sm-12">
    <div class="row">
      <div class="container-fluid col-sm-5">
        <img src="https://lh3.googleusercontent.com/proxy/Td3S-eTG4JveeBGi8okTuWXBkDdtxU0D_wYjhOAJ9MDLvPBJFSpwmiLmoZrC4vhW9Q1ZLO5c8_9iFmYoS0ZR1BSOMYEIxqZefs1MyLz6OnZP5cU8q-63VHbz-79NWrOFUHOZKhOhRjmgLYMvyjV-F9CWJds" height="310px" width="310px" class="top">
      </div>


      <div class="container-fluid col-sm-7 left">
        <form action="_inserir_categoria.php" method="post">
          <label>Cadastrar Categoria </label>
          <input type="text" class="form-control" id="input" name="categoria" placeholder="Insira nome da categoria..." required autocomplete="off">

          <div class="top">
            <button type="submit" class="btn btn-success"> Cadastrar</button>
            <a href="_pagina_inicial.php" class="btn btn-info">Voltar</a>
          </div>
        </form>
      </div>

    </div>
  </div>



</body>

</html>