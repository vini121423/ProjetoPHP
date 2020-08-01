<!DOCTYPE html>

<head>
  <title>Home | StockMade </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="img/logo.png" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/css.css">
  

  <style>
    .form {
      background-image: url(https://blog.egestor.com.br/wp-content/uploads/Depositphotos_98618114_l-2015-1160x770.jpg);
      height: 100%;
      height: 500px;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      margin-bottom: 30px;
 
    }

    h4 {
      margin-top: 2px;
      margin-bottom: 30px;
      font-weight: bolder;
      font-size: 25px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
	


    h2 {
      text-transform: uppercase;
    }
 
     p{
       color:white !important;
     }
    .box {
      border: 2px white solid;
      padding-top: 187px;
	  padding-bottom: 180px;
      background: rgba(0, 0, 0, 0.2);
      font-weight: bolder;
      font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
	
	.footer{
		background-color:#00008B;
border-radius:10px;
padding:10px;
margin-top:10px;
		
	}

    .login-cadastro{
      margin-top: 70px;
      display: inline;
      background: rgba(0, 0, 0, 0.2);
      border: 2px white solid;
      border-radius: 45px;
      padding: 20px;
    }
	
	.box:active{
	  opacity:0.9;	
	}
	
	.row{
		margin-bottom:50px;
	}
	
	.pulse {
  animation: pulse 0.9s infinite;
  animation-direction: alternate;
  -webkit-animation-name: pulse;
  animation-name: pulse;
}

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(1);
    -webkit-filter: brightness(25%);
  }
  80% {
    -webkit-transform: scale(1.1);
    -webkit-filter: brightness(50%);
  }
}

@keyframes pulse {
  0% {
    transform: scale(1);
    filter: brightness(50%);
  }
  100% {
    transform: scale(1.1);
    filter: brightness(150%);
  }
}  

ul li{
	 display:inline;
	 margin:20px;
	 padding-top:10px;
}

#navbar{
	background-color:#00008B;
    height: 75px;
    border-radius:10px;	
	
}

.dist{
	margin-left:450px;
}

.top{
	margin-top:50px; 
}

.light{
	background-color:white;
}

nav{
	background-color:#00008B;
}
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"><img src="img/logo.png" height="75px" width="82px" class="pulse"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Info</a>
      </li>
    </ul>
  </div>
</nav>

  <div class="col-sm-12 form align-center">
    <div class="row box">
      <div class="col-sm-6">
        <h2> Seja bem vindo!</h2>
      </div>

      <div class="col-sm-6">
        <h2>Login / Cadastro</h2>
        <p>Entre ou crie uma conta agora mesmo!</p>
        <button class="login-button"><a href="_login.php">
            <i class="icon-signin"></i> Entrar
          </a>
        </button>
        <button class="login-button"> <a href="_cadastrar_usuario_externo.php">
            <i class="icon-plus"></i> Criar
          </a>
        </button>
      </div>
    </div>
  </div>
  
  <div class="col-sm-12 align-center top">
     <img src="https://destinonegocio.com/br/wp-content/uploads/sites/2/2015/11/ico-destinonegocio-melhores-empresas-para-trabalhar-istock-getty-images.jpg" height="206px" width="360px">
     <h1>Alegre-se aumentando sua produtividade</h1>
	 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo sem quis elementum mollis.</p>
  </div>
    <hr class="light"> 
	
	 <div class="col-sm-12 align-center top">
    <img src="https://blogdaqualidade.com.br/app/uploads/2018/08/o-que-e-sipoc.png" height="150px" widht="400px">
     <h1>Organize sua produção</h1>
	 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo sem quis elementum mollis.</p>
  </div>
    <hr class="light"> 
	
	 <div class="col-sm-12 align-center top">
   <img src=" https://cargox.com.br/wp-content/uploads/2018/02/Compreenda-como-se-d%C3%A1-a-rela%C3%A7%C3%A3o-entre-log%C3%ADstica-e-varejo.jpg" height="106px" widht="400px">
     <h1>Saiba quem são seus fornecedores</h1>
	 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam commodo sem quis elementum mollis.</p>
  </div>



    <div class="footer">
	  <ul> 
	    <li><a href="#">Home</a></li>
	    <li><a href="#">Teste</a></li>
		<li><a href="#">Teste2</a></li>
		<li><a href="#">Menu</a></li>
	  </ul>
	</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>