<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Refugia-me</title>
  <meta name="theme-color" content="#000">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</head>
<body id="inicio">
<nav class="navbar navbar-expand-lg navbar-dark" id="nav" >
        <div class="container-fluid" id="hamburger" align="center">
          <a class="navbar-brand" href="index.php#inicio"><img class="logo" src="imagens/logo.png" alt=""></a>
          <button id="hamburger" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" ></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="navbarNav" >
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" id="item" aria-current="page" href="index.php#inicio">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#info" id="item">Informações</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://doar.acnur.org/page/ACNURBR/doe/general?utm_source=button&utm_medium=site&utm_campaign=BR_PS_PT_general" id="item">Doar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php#jogos" id="item">Jogar</a>
              </li>
            </ul>
          </div>
          <button class="btn-perfil">
          <?php if(isset($_SESSION['usuarioLogado'])) { ?>
            <a style="text-decoration:none;" class="txt-perfil" href="areaRestrita.php"><?=  $_SESSION['usuarioLogado']; ?></a></button>
              <button class="btn-perfil"><a class="txt-perfil" href="logout.php"> Sair </a></button>
       <?php }else{ ?>
        <a href="cadastro.php" class="txt-perfil">Perfil</a>
        
        </button>
        <?php } ?>
        </div>
        </div>
      </nav>
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        
            <div class="carousel-item active">
              <img src="imagens/1 Barco.jpg" class="d-block w-100">
              <div class="carousel-caption d-none d-md-block">
              <div class="content" align="center">
            <h1 > REFUGIA-ME </h1>
            <a href="#rodape"> Saber mais</a>
            </div>
          </div>
          </div>

          <div class="carousel-item">
            <img src="imagens/2 Alagamento.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
            <div class="content" align="center">
                <h1> REFUGIA-ME </h1>
                <a href="#rodape"> Saber mais</a>
            </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="imagens/3 BeiraEstrada.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
            <div class="content" align="center">
                <h1> REFUGIA-ME </h1>
                <a href="#rodape"> Saber mais</a>
            </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="imagens/4 Crianca.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
            <div class="content" align="center">
                <h1> REFUGIA-ME </h1>
                <a href="#rodape"> Saber mais</a>
            </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="imagens/5 Acampamento.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
            <div class="content" align="center">
                <h1> REFUGIA-ME </h1>
                <a href="#rodape"> Saber mais</a>
            </div>   
            </div>
          </div>

          <div class="carousel-item">
          <img src="imagens/6 Fuga.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
            <div class="content" align="center">
                <h1> REFUGIA-ME </h1>
                <a href="#rodape"> Saber mais</a>
            </div>   
            </div>
          </div>

        <div class="carousel-item">
          <img src="imagens/7 AndandoCostas.jpg" class="d-block w-100">
          <div class="carousel-caption d-none d-md-block">
            <div class="content" align="center">
              <h1> REFUGIA-ME </h1>
              <a href="#rodape"> Saber mais </a>
            </div>
          </div>
       </div>

          <div class="carousel-item">
            <img src="imagens/8 Andando.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
            <div class="content" align="center">
                <h1> REFUGIA-ME </h1>
                <a href="#rodape"> Saber mais</a>
            </div> 
            </div>
          </div>

          <div class="carousel-item">
            <img src="imagens/9 BrasilVenezuela.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
            <div class="content" align="center">
                <h1> REFUGIA-ME </h1>
                <a href="#rodape"> Saber mais</a>
            </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="imagens/10 BarcoFim.jpg" class="d-block w-100" >
            <div class="carousel-caption d-none d-md-block">
            <div class="content" align="center">
                <h1> REFUGIA-ME </h1>
                <a href="#rodape"> Saber mais</a>
            </div>
            </div>
          </div>

       
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
  </div>
</div>
<div class="fundo">
  <br><br>
  <div class="container-fluid" >
    <div class="row">
      <div class="col">
      <h1 class="title-graf" id="info" align="center"> Índice de países que mais sofrem evasão e que mais acolhem no mundo </h1>
    </div>
    </div>
    <div class="row">
      <div class="col" id="info-mapa">
        <h4 class="txt-mapa"> <p>Tenha acesso aos números de refugiados por todo o mundo. Valores exatos de pesquisas concentrados sobre a quantida de pessoas que mais deixam seus países de origem e mais se refugiam em outras nações em busca de uma nova vida.</p>
        <p><i>Basta passar o cursor por cima dos países presentes no mapa para ter conhecimento de números reais conforme a escala e descrições na legenda.</i></h4>
      </div>
      <div class="col" align="center">
        <div class="container-fluid" id="regions_div">
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript" src="index.js">
              drawRegionsMap();
          </script>
          </div>
          <p><h6 class="legenda"><img src="imagens/Acolhimento2.png">&nbsp;&nbsp; Países que mais acolhem
          <img src="imagens/Evasao.png">&nbsp;&nbsp; Países que mais sofrem evasão
          <img src="imagens/SemDados.png">&nbsp;&nbsp; Sem dados</p>
       </div>
        
      </div>
  </div> 
  </div>
  <div class="col" style="background-color: #13003f;" align=" center">
   <div class="container" >
     <div class="row">
       <div class="col btn-wrap">
        <button id="fecharbtn" class="button btn" style="margin-top: -13%;color: silver;">X</button>
         <img id="imagem1" src="img/banner2.png" alt="imagem1">
         
       </div>
       
     </div>
   </div><br>
  <script>
    function openJogodaVelha(){
      window.open('jogos/jogo_da_velha/index.html', '_self');
    }

    function openJogodaMemoria(){
      window.open('jogos/jogo_da_memoria/index.html', '_self');
    }

    function openSpaceInvaders(){
      window.open('jogos/spaceinvaders/index.html', '_self');
    }

    function openSnakeGame(){
      window.open('jogos/jogo_da_cobra/index.html', '_self');
    }
  </script>

<div class="card-group" id="jogos">
  <div class="card"id="jogos">
      <img  src="imagens/img_velha.jpeg" class="card-img" onclick="openJogodaVelha()">
      <div class="card-body" id="jogos">
        <h5 class="card-title" align="center" id="jogos">Jogo da velha</h5>
      </div>
    </div>
    <br>
    <div class="card"id="jogos">
      <img src="imagens/img_memoria.jpeg" class="card-img"onclick="openJogodaMemoria()">
      <div class="card-body" id="jogos">
        <h5 class="card-title" align="center" id="jogos">Jogo da Memória</h5>
      </div>
    </div>
  <div class="card"id="jogos">
    <img src="imagens/img_espaco.jpeg" class="card-img" onclick="openSpaceInvaders()">
    <div class="card-body" id="jogos">
      <h5 class="card-title" align="center" id="jogos">Space Invaders</h5>
    </div>
  </div>
  <div class="card" id="jogos">
      <img src="imagens/img_cobra.jpeg" class="card-img" onclick="openSnakeGame()">
      <div class="card-body" id="jogos">
        <h5 class="card-title" align="center" id="jogos">Jogo da Cobra</h5>
      </div>
    </div>
</div>
</div>

</body> 
<footer id="rodape">
    <div class="coluna" align="center">
      <a href="index.php#inicio"><img  width="280px" height="280px" src="imagens/logo2.png" alt="Logo"></a>
    </div>
    <div class="coluna" align=center>
      <h3>Sobre nós</h3><p> Somos programadoras aspirantes, com a intenção de promover um maior conhecimento sobre os refugiados e ao mesmo tempo fornecer uma alternativa divertida e descontraida para doações indiretas que serão redirecionadas para ONGs de maneira responsável, e assim, o usuário terá a oportunidade de transformar a vida de diversos refugiados. Além disso o site é uma maneira prática de ajudar e informar sobre a a condição de vida de diversas pessoas no mundo que se encontram em situação de vulnerabilidade.</p>
    </div>
    <div class="coluna" align="center">
      <h3>Siga do ACNUR</h3>
      <ul class="redes-sociais">
        <li><a href="https://www.facebook.com/UNHCR" target="_blank"><img src="imagens/facebook.png" alt="Facebook"></a></li>
        <li><a href="https://twitter.com/Refugees" target="_blank"><img src="imagens/twitter.png" alt="Twitter"></a></li>
        <li><a href="https://www.instagram.com/acnurbrasil/" target="_blank"><img src="imagens/insta.png" alt="Instagram"></a></li>
        <li><a href="https://www.linkedin.com/company/unhcr" target="_blank"><img src="imagens/linkedin.png" alt="LinkedIn"></a></li>
        <li><a href="https://www.youtube.com/channel/UC6EzCC6PoJI_l7Uc5ldVlhw" target="_blank"><img src="imagens/youtube.png" alt="YouTube"></a></li>
        <li><a href="https://www.acnur.org/portugues/" target="_blank"><img src="imagens/chrome.png" alt="Site"></a></li>
      </ul>
    </div>
        <div class="col-12 col-sm-6 col-md-9" align="center">
            <p>&copy; 2023 Site por refugia-me</p>
        </div>
  </footer>
  
  <script>
     document.getElementById("fecharbtn").addEventListener("click", function(){
            document.getElementById("imagem1").style.display ="none";
            document.getElementById("fecharbtn").style.display ="none";
        });

  </script>
</html>