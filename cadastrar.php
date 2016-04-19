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
	    <div class="input-div" id="nome">
		<label>Nome</label>
			<input type="text" name="nome" id="nome" style="text-transform:uppercase"/>
		</div>
		
	    <div class="input-div" id="login">
		<label>Matrícula</label>
			<input type="text" name="login" id="login"/>
		</div>
		
	    <div class="input-div" id="senha">
		<label>Senha</label>
			<input type="password" name="senha" id="senha"/>
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
