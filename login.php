<html>
<head>
<title>Gerador de Plano de Ensino Mater Christi</title>
<link rel="stylesheet" type="text/css" href="telalogin.css" />
</head>

<body>

<div id="logo">
	<img src="logo.png" border="0">
</div>

<form method="post" action="valida.php">

<div id="login-box">
	<div id="login-box-interno">
		<div id="login-box-label">Acesso ao Sistema de Planos de Ensino FCTMC</div>
		
		<div class="input-div" id="input-usuario">
		<label>Usuário</label>
		<input type="text" name="usuario"/>
		</div>
		
		<div class="input-div" id="input-senha">
		<label>Senha</label>
		<input type="password" name="senha"/>
		</div>	

		<div id="botoes">
			<input id="botao" type="submit" value="Login"/>
			<div id="nao-possui-senha"><a href="cadastrar.php">Não possui uma senha?</a></div>
		</div>				
	</div>
</div>	
  
</form>
</body>
</html>
