<?php
include("seguranca.php"); // Inclui o arquivo com o sistema de segurança
protegePagina(); // Chama a função que protege a página
echo "Bem Vindo, " . $_SESSION['usuarioNome'];
$timestamp = time(); // Salva o timestamp atual numa variável
echo date('  - d/m/Y H:i:s', $timestamp); // Exibe DD/MM/YYYY HH:MM:SS em função de um timestamp
?>

<!-- Botão de Sair -->
<div id="botaosair">
<form method="post" action="logout.php">
  <input type="submit" value="Sair" />
</form>
</div>
<!-- Fim do Botão de Sair -->