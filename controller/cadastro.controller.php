<?php 

require_once "service/cadastro.service.php";
require_once "model/cadastro.model.php";
require_once "conexao/cadastro.db.php";

@$acao = isset ($_GET['acao'])?$_GET["acao"]:$acao;
@$id = isset ($_GET['id'])?$_GET["id"]:$id;

if($acao == 'recuperarLoginUs'){
	$usuario = new Usuario();
	$conexao = new Conexao();
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$UsuarioService = new UsuarioService($usuario,$conexao);
	$usuario = $UsuarioService->recuperarLoginUs($email,$senha);
	//print_r($usuario);
	foreach($usuario as $indice => $usuario){
	}

	if(!isset($usuario->email)){
		echo '<script>alert("Email ou senha não cadastrado. Tente novamente")</script>
		<!--<meta http-equiv="refresh" content="0;url=cadastro.php">-->';
	}else{
		session_start();
		$_SESSION['usuarioLogado']=$usuario->nome;
		$_SESSION['emailLogadoUs']=$usuario->email;
		$_SESSION['idLogadoUs']=$usuario->id;
		header('location: index.php');
		//echo $_SESSION['usuarioLogado'];
	}

 }
if($acao == 'inserir') {
	$usuario = new Usuario();
	$usuario->__set('nome',$_POST['nome']);
	$usuario->__set('email',$_POST['email']);
	$usuario->__set('dataNasc',$_POST['dataNasc']);
	$usuario->__set('senha',$_POST['senha']);
	
	$conexao = new Conexao();
	
	$usuarioService = new UsuarioService ($usuario, $conexao);
	$usuarioService->inserir();
	header('location: cadastro.php#login');

}if($acao == 'recuperar'){
	$usuario = new Usuario();
	$conexao = new Conexao();

	$usuarioService = new UsuarioService ($usuario, $conexao);
	$usuario = $usuarioService->recuperar();

} if($acao=='recuperarUsuario'){
	$usuario = new Usuario();
	$conexao = new Conexao();

	$usuarioService = new UsuarioService ($usuario, $conexao);
	$usuario = $usuarioService->recuperarUsuario($id);
} if($acao == 'alterar') {
	$usuario = new Usuario();
	$usuario->__set('id',$_POST['id']);
	$usuario->__set('nome',$_POST['nome']);
	$usuario->__set('email',$_POST['email']);
	$usuario->__set('dataNasc',$_POST['dataNasc']);
	$usuario->__set('senha',$_POST['senha']);
	$conexao = new Conexao();
	
	$usuarioService = new UsuarioService ($usuario, $conexao);
	$usuarioService->alterar();
	header('location: areaRestrita.php');

} if($acao=='remover'){
	$usuario = new Usuario();
	$conexao = new Conexao();
	$usuario->__set('id',$id);
	$usuarioService = new UsuarioService ($usuario, $conexao);
	$usuarioService->remover();
	session_destroy();
	header('location: areaRestrita.php');
} 

?>