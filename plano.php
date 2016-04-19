<html>
<head>
	<meta charset="utf-8" />
	<title>Plano de Ensino - FCTMC</title>
	
	<!-- Função para inserir e remover linhas da tabela -->
	<script type="text/javascript" src="js/jquery-2.2.3.js"></script>
	<script type="text/javascript" src="script.js"></script>
	
</head>
<body>

	<link rel="stylesheet" href="formoid_files/formoid1/formoid-solid-blue.css" type="text/css" />
	<script type="text/javascript" src="formoid_files/formoid1/jquery.min.js"></script>	
		<form class="formoid-solid-blue" style="background-color:#FFFFFF;font-size:10px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:720px;min-width:150px" method="post"><div class="title"><h2>Plano de Ensino 2016.2</h2></div>
			<h3 class="section-break-title">1- DADOS DE IDENTIFICAÇÃO</h3>
			<div class="element-separator"><hr></div>			
			
			<table>	
				<tr>
				<td>Curso:</td>
				<td width="545"><div class="element-input"><input class="large" type="text" name="input" placeholder="Informe o Curso"/></div></td>
				</tr>

				<tr>
				<td>Disciplina:</td>
				<td width="545"><div class="element-input"><input class="large" type="text" name="input" placeholder="Informe a Disciplina"/></div></td>
				</tr>			
			
				<tr>
				<td>Dia e Horário:</td>
				<td width="545"><div class="element-input"><input class="large" type="text" name="input" placeholder="Informe o Horário"/></div></td>
				</tr>			
			
				<tr>
				<td>Carga Horária:</td>
				<td width="545"><div class="element-input"><input class="large" type="text" name="input" placeholder="Informe a Carga Horária"/></div></td>
				</tr>			
				
				<tr>
				<td>Professor:</td>
				<td width="545"><div class="element-input"><input class="large" type="text" name="input" placeholder="Quem vai ministrar o curso?"/></div></td>
				</tr>			
			</table>
		
			<h3>2- SÍNTESE DO CURRÍCULO LATES</h3>
			<div class="element-separator"><hr></div>		
			<div class="element-textarea"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" placeholder="Informe seus dados curriculares"></textarea><span class="icon-place"></span></div></div>
			
			<h3>3- EMENTA</h3>
			<div class="element-separator"><hr></div>
			<div class="element-textarea"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" placeholder="Informe a Ementa"></textarea><span class="icon-place"></span></div></div>

			<h3>4- OBJETIVO GERAL</h3>
			<div class="element-separator"><hr></div>			
			<div class="element-textarea"><label class="title"></label><div class="item-cont"><textarea class="medium" name="textarea" cols="20" rows="5" placeholder="Qual o objetivo geral da disciplina?"></textarea><span class="icon-place"></span></div></div>

			<h3>5- OBJETIVOS ESPECÍFICOS, CONTEÚDOS E CARGA HORÁRIA</h3>
			<div class="element-separator"><hr></div>			
			<table id="objetivos-tabela" width="660" border="1" align="center">
				<tbody>
				 <tr>
				   <th>Objetivo Específico</th>
				   <th>Conteúdo</th>
				   <th>CH</th>
				   <th>Ações</th>
				 </tr>
				 <tr>
				   <td>&nbsp;</td>
				   <td>&nbsp;</td>
				   <td>&nbsp;</td>
				   <td>
					 <button onclick="RemoveTableRow(this)" type="button">Remover</button>
				   </td>
				 </tr>
				</tbody>
				<tfoot>
				 <tr>
				   <td colspan="5" style="text-align: left;">
					 <button onclick="AddTableRow()" type="button">Adicionar Nova Linha</button>
				   </td>
				 </tr>
				</tfoot>
				</table>

			<h3>6- CRONOGRAMA</h3>
			<div class="element-separator"><hr></div>		


			<!--Botão de Salvar -->
			<div class="submit"><input type="submit" value="Salvar Plano de Ensino"/></div></form><p class="frmd"><a href="http://formoid.com/v29.php">bootstrap form</a> Formoid.com 2.9</p><script type="text/javascript" src="formoid_files/formoid1/formoid-solid-blue.js"></script>			

		</form>

</body>
</html>



