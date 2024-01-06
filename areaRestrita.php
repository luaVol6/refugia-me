
<?php 
session_start();
if(!isset($_SESSION['usuarioLogado'])){
    header("location:cadastro.php#login");
}else{
    $acao = 'recuperarUsuario';
    $id = $_SESSION['idLogadoUs'];
    require_once 'cadastro.controller.php';
}
?>

<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Área Restrita</title>
    <style>
*{
    color: silver;
}
body{
    background-color: #13003faf;
}
.wrapper{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 170px;
}
.caixa{
    position: relative;
    display: block;
    align-items: center;
    justify-content: center;
    width:700px;
    height:600px;
    overflow: hidden;
    z-index: 2;
    background-color: #13003f;
    border-radius: 40px;
    padding-right: 15px;
    padding-left: 35px;
    flex-direction: column;
    transition: .5s ease-in-out;
  }
  ::selection {
    background: rgba(192, 192, 192, 0.652);
    color: rgb(2, 0, 7);
  }
  h1{
    color: #13003f;
    font-weight: 700;
  }
  h2{
    padding-top: 20px;
    font-weight: 700;
    font-size: 50px;
  }
  #infos{
    color: #13003f;
    background-color:  #1d0061;
    border-radius: 10px;
    border: silver;
    font-size: 24px;
    padding-bottom: 10px;
    padding-top: 10px;

  }
  #dados{
    font-size: 24px;
    padding-bottom: 10px;
    padding-top: 10px;
  }
  #botoes{
    margin-top: 220px;
    justify-content: space-between;
  }
  button{
    justify-content: center;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.74);;
    border-radius: 30px;
    padding: 8px 15px;
    border: none;
    width: 115px;
    height: 50px;
    font-size: 22px;
  }
  button:hover{
    background-color: rgba(255, 255, 255, 0.411);
    border-radius: 50px;
  }
  a{
    text-decoration: none;
    color: #13003f;
  }
  a:hover{
    color: white;
  }

  #senha{
    color: #13003f;
    transition: .5s ease-in-out;
  }
  #senha:hover{
    color: silver;
  }
        </style>
</head>
<body>
    <div class="fundo">
    <div class="wrapper">
    <div class="caixa">
    <h2 align="center">Usuário Logado</h2>
    <p> Aqui você pode alterar os dados cadastrado ou até mesmo remover a conta </p>
    <p><i> A conta removida não poderá ser recuperada. Portanto, esteja certo da sua decisão. </i></p>
    <div class="container-table">
    
        <div class="row" id="infos">
            <div class="col" id="col-name">
                Nome
            </div>
            <div class="col" id="col-name">
                Email
            </div>
            <div class="col" id="col-name">
                Data Nasc.
            </div>
            <div class="col" id="col-name">
                Senha
            </div>
        </div>
    </div>
        <?php foreach($usuario as $indice =>$usuario) {?>
           
        <div class="row" id="dados">
            <div class="col">
                <?= $usuario->nome;?>
            </div>
            <div class="col">
                <?= $usuario->email;?>
            </div>
            <div class="col">
                <?= $usuario->dataNasc;?>
            </div>
            <div class="col" id="senha">
                <?= $usuario->senha;?>
            </div>
        </div>
        <div class="row" align="center" id="botoes">
            <div class="col">
            <button ><a class="a-crud" href="alterar.php?metodo=alterar&id=<?= $usuario->id; ?>">Alterar </a></button>
            </div>
            <div class="col">
                <button><a class="a-crud" href="cadastro.controller.php?acao=remover&metodo=remover&id=<?= $usuario->id;?>">Remover </a></button>
            </div>
    </div>
            <?php }?>
        </div>
        </div></div>
</body>
</html>