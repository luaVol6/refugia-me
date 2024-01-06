<?php
if (isset($_GET['metodo'])) {
  $metodo = $_GET['metodo'];
  $acao = 'recuperarUsuario';
  $id = $_GET['id'];

  require_once 'cadastro.controller.php';
  foreach ($usuario as $indice => $usuario) {
    $id = $usuario->id;
    $nome = $usuario->nome;
    $email = $usuario->email;
    $dataNasc = $usuario->dataNasc;
    $senha = $usuario->senha;
  }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Formulário</title>
  <meta name="theme-color" content="#000">
  <link rel="stylesheet" href="styleA.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="js/moment.js"></script>
</head>
<body>
    <div class="wrapper">
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
        </div>
      </nav>
    <div class="caixa">
    <div class="top">
          <span class="span-txt">Já tem uma conta? <a href="#" onclick="login()">Já sou registrado</a></span>
          <header>
            <?php if (!isset($metodo)) {
              echo 'Cadastrar';
            } elseif ($metodo == 'alterar') {
              echo 'Alterar';
            } else {
              echo 'Remover';
            } ?>
          </header>
        </div>
        <form id="formCad" name="form1" method="POST" action="cadastro.controller.php?acao=<?php if (!isset($metodo)) {
          echo 'inserir';
        } elseif ($metodo == 'alterar') {
          echo 'alterar';
        } else {
          echo 'remover';
        } ?>">
          <div class="half-box spacing">
            <label for="name">Nome de Usuário</label>

            <input type="text" name="nome" id="input-field" class="inputs required" placeholder="Digite seu nome" value="<?php if (isset($nome)) {
              echo $nome;
            } else {
              echo '';
            } ?>" oninput="validarNome()">
            <div id="input-bx"><i class="bx bx-user"></i></div><span class="span-required"> O nome deve ter no mínimo 3
              caracteres. </span>
          </div>
          <div class="half-box spacing">
            <label for="email">E-mail</label>

            <input type="email" name="email" id="input-field" class="inputs required" placeholder="Digite seu e-mail <?php if (isset($email)) {
              echo $email;
            } else {
              echo '';
            } ?>" oninput="validarEmail()">
            <div id="input-bx"><i class="bx bx-envelope"></i></div><span class="span-required"> Digite um e-mail válido
              (deve conter "@" e "."). </span>
          </div>
          <div class="half-box spacing">
            <label for="dataNasc">Data Nascimento</label>
            <input type="date" name="dataNasc" class="inputs required" id="input-field" placeholder="" value="<?php if (isset($dataNasc)) {
              echo $dataNasc;
            } else {
              echo '';
            } ?>" onblur="validarDataN()">
            <div id="input-bx"><i class="bx bx-calendar"></i></div>
            <span class="span-required"> Digite uma data válida. </span>
          </div>
          <div class="half-box">
            <label for="senha">Senha</label>

            <input type="password" class="inputs required" name="senha" id="input-field" placeholder="Digite sua senha"
              oninput="validarSenha()" value="<?php if (isset($senha)) {
                echo $senha;
              } else {
                echo '';
              } ?>">
            <div id="input-bx"><i class="bx bx-lock"></i></div><span class="span-required"> Digite uma senha com no
              mínimo 8 caracteres e no máximo 20. </span>
          </div>
          <div class="half-box spacing">
            <label for="lastname">Confirmar senha</label>

            <input type="password" class="inputs required" id="input-field" placeholder="Digite novamente sua senha"
              oninput="compararSenhas()">
            <div id="input-bx"><i class="bx bx-lock-open"></i></div><span id ="" class="span-required"> As senhas devem ser
              compatíveis. </span></div>
          <div align="center">
            <input type="hidden" name="id" value="<?php if (isset($id)) {
              echo $id;
            } else {
              echo '';
            } ?>">
            <button type="submit"  id="btn-cad" disabled>
              <?php if (!isset($metodo)) {
                echo 'Cadastrar';
              } elseif ($metodo == 'alterar') {
                echo 'Alterar';
              } else {
                echo 'Remover';
              } ?>
            </button>
          </div>
        </form>
            </div>
            </div>
            <script src="cadastro.js"> </script>
  <script src="login.js"> </script>
</body>
</html>