<!DOCTYPE html>
<html>
<head>
	<title>FoodFenas</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="jquery/script.js"></script>
	<meta charset="utf-8">
</head>
<body class="cadastro">
	<!--MENU-->
	<div id="barra_topo"></div>
	<nav id="menu">
		<img src="imagens/menu_responsivo.png" id="menu_reponsivo">
		<div id="alinha_logo">
			<a href="index.php">
				<img src="imagens/logo.fw.png" id="logo">
			</a>
		</div>

	</nav>
	<div id="formCadastro">
		<div  align="center"><font size="6" color="white"><b>Cadastro</b> de estabelecimento</font></div>
		<div id="formularioEmail">
			<br>
			<form class="form" id="form1">
				<div class="name">
					<input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,20]] feedback-input" placeholder="Nome" id="name"/>
				</div>	
				
				<div class="email">
					<input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="emaill" placeholder="E-mail" />
				</div>
				<div id="divEndereco">
					<div class="endereco">
						<input name="endereco" type="text" class="validate[required,custom[email]] feedback-input" id="endereco" placeholder="Endereço" />
					</div>
					<div class="numeroCasa">
						<input name="numeroCasa" type="text" class="validate[required,custom[email]] feedback-input" id="numeroCasa" placeholder="Número" />
					</div>
				</div>
				<div class="telefone">
					<input name="telefone" type="text" class="validate[required,custom[email]] feedback-input" id="telefone" placeholder="Telefone" />
				</div>
				<br>
				<div id="subCadastro">
					<input type="submit" value="Cadastrar" id="btEnviar"/>
				</div>
			</form>
		</div>
		<p align="center"><a href="http://www.fillchar.com.br"><img src="imagens/fillcharSinged.png" id="fillcharLogo"></a></p>
	</div>
</body>
</html>