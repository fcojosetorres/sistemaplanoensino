<?php
session_start();
$_SESSION['nome'] = $_POST['nome'];
$nome = $_POST['nome'];
$_SESSION['login'] = $_POST['login'];
$login = $_POST['login'];
$_SESSION['senha'] = $_POST['senha'];
$senha = $_POST['senha'];
$connect = mysql_connect('localhost','root','');
$db = mysql_select_db('planos');
$query_select = "SELECT usuario FROM cad_usuarios WHERE usuario = '$login'";
$select = mysql_query ($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['usuario'];

	if ($login == "" || $login == null || $nome == "" || $nome == null || $senha == "" || $senha == null)
	{
		echo "<script language='javascript' type='text/javascript'> alert ('Existem Campos Vazios, Verifique!');window.location.href='cadastrarsession.php';</script>";
	}
	else
	{
		if ($logarray == $login)
		{
			echo"<script language='javascript' type='text/javascript'> alert ('Essa matrícula já existe!');window.location.href='cadastrarsession.php';</script>";
			die();
		}
		else
		{
			$query = "INSERT INTO cad_usuarios (nome,usuario,senha) VALUES (UPPER('$nome'), '$login', '$senha')";
			$insert = mysql_query($query,$connect);
			if ($insert)
			{
				echo"<script language='javascript' type='text/javascript'> alert('Usuario Cadastrado com sucesso!');window.location.href='login.php'</script>";
			}
			else
			{
				echo"<script language='javascript' type='text/javascript'> alert('Usuario Não Cadastrado!');window.location.href='cadastrarsession.php'</script>";
			}
		}
	}

?>