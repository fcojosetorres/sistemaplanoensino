<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
?>

<html>
<head>
<title>Cadastrar Usuario</title>
<link rel="stylesheet" type="text/css" href="telalogin.css" />
</head>
<body>

<form method="post" action="cadastrarlogin.php" onSubmit="return valida_dados(this)">

<div id="logo"> <img src="logo.png"> </div>
  <div id="login-box">
    <div id="login-box-interno2">
	  <div id="login-box-label">Cadastro de Usuários</div>
	    <div class="input-div" id="usuario">
		<label>Nome</label>
			<input name="nome" type="text" style="text-transform:uppercase" value="<?php if(isset($_SESSION['nome'])) { echo $_SESSION['nome']; } ?>"/>
		</div>
		
	    <div class="input-div" id="login">
		<label>Matrícula</label>
			<input name="login" type="text" value="<?php if(isset($_SESSION['login'])) { echo $_SESSION['login']; } ?>"/>			
		</div>
		
	    <div class="input-div" id="senha">
		<label>Senha</label>
			<input name="senha" type="password" value="<?php if(isset($_SESSION['senha'])) { echo $_SESSION['senha']; } ?>"/>			
		</div>		
		
		<div id="botoes">
			<input id="botao" type="button" value="Cancelar" onclick="javascript: location.href='login.php';"/>
			<input id="botao" type="submit" value="Salvar"/>
		</div>
		
    </div>
  </div>


 </form>


</body>
</html>