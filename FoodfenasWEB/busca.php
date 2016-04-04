<?php
include 'config/conexao.php';
echo 
'
<!DOCTYPE html>
<html>
<head>
	<title>Foodfenas</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<script src="jquery/script.js"></script>
	<meta charset="utf-8">
</head>
<body class="busca">
	<div class="black"></div>
	<div class="acesso">
		<br>
		<p align="center">
			<img src="imagens/logo.fw.png" class="logo">
		</p>
		<br>
		<form method="post">
			<div class="group">
				<input type="text" name="email" required>
			    <span class="highlight"></span>
			    <span class="bar"></span>
			    <label>E-mail</label>
			</div>
			<div class="group">      
			    <input type="password" name="senha" required>
			    <span class="highlight"></span>
			    <span class="bar"></span>
			    <label>Senha</label>
			</div>
			<input type="submit" name="acessar" value="Entrar" id="submit">
		</form>      
      </div>

      <nav id="menu">
		<a href="index.php">
			<img src="imagens/logo.fw.png" id="logo">
		</a>
		<a href="ajuda.php">
			<div id="ajuda">Ajuda</div>
		</a>
		<a href="cadastro.php">
			<div id="cadastro">Cadastrar</div>
		</a>
		<a>
			<div id="acesso">Entrar</div>
		</a>
	</nav>

	<div id="imagemtopo">
		<br>
		<div id="titulo">Estabelecimentos</div>
		<div id="subtitulo">
			Peça sua comida agora mesmo !
		</div>
	</div>

	<div id="categorias">
		<br>
		<h1>Comidas</h1>
';
$seleciona = $conexao -> query ("SELECT * FROM categoria ORDER BY descricao ASC");
while($exibe = $seleciona -> fetch (PDO::FETCH_ASSOC))
{
		echo 
		'
			<li>'.$exibe['descricao'].'</li>
		';
}
echo 
'
		<h1>Título</h1>
		<li>fdsafsadfsafsa</li>
		<li>fdsafsadfsafsa</li>
		<li>fdsafsadfsafsa</li>
		<li>fdsafsadfsafsa</li>
		<li>fdsafsadfsafsa</li>
		<li>fdsafsadfsafsa</li>
		<li>fdsafsadfsafsa</li>
		<li>fdsafsadfsafsa</li>
	</div>
</body>
</html>
';