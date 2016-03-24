<!DOCTYPE html>
<html>
<head>
	<title>Foodfenas</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

	<script src="jquery/script.js"></script>
	
	<meta charset="utf-8">
</head>
<body>
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
		<form>
    
       
      
      
    
    
  </form>
	</div>
	<nav id="menu">
		<img src="imagens/logo.fw.png" id="logo">
		<div id="ajuda">Ajuda</div>
		<div id="cadastro">Cadastrar</div>
		<div id="acesso">Entrar</div>

	</nav>
	<div  id="img_topo">
		<div class="img-holder" data-image="imagens/comida.jpg" data-image-mobile="comida.jpg" data-width="1600" data-height="1000"></div>
		<br>
		<div id="formulario">
			<br>
			<div id="mensa_1">Peça sua comida online</div>
			<input type="text" id="busca" placeholder="Procure lanchonetes ou cardapios">
			<input type="submit" id="buscar" value="Realizar busca">
			<div id="mensa_2">LANCHONETES CADASTRADAS</div>
			<p align="center">
				<img src="imagens/google.jpg" id="google">
			</p>
		</div>
	</div>

	<div id="mensa_3">Comer nunca foi tão fácil</div>
	<div id="barra_mensa"></div>
	 
	<div id="mensagem_intro">
		O foodFenas é uma nova plataforma que chega em Alfenas buscando facilitar o dia-a-dia dos Alfenenses. Com o Slogan “99% com fome, mas aquele 1% com preguiça de ligar”, a aplicação busca trazer conforto e segurança aos usuários.
		O app conta com lanchonetes, pizzarias, restaurantes e todos tipos de fastFood de Alfenas. A praticidade é o principal ingrediente do app, já que a realização de pedidos podem ser feitos de modo muito fácil pela web/android.
		O principal público alvo do foodFenas são os universitários de Alfenas que nem sempre conseguem entrar em contato com os estabelecimentos e estão cheios de tanto papel/imãs de geladeira.
	</div>
	<div id="destaque">
		<br>
		<div id="titulo">
			Estabelecimentos em destaque
		</div>
		
		<a href="estab.php?cod=1">
			<div id="molduras">
				<br>
				<div id="titulo">
					PIZZARIA PEDRA
				</div>
			</div>
		</a>

		<div id="molduras">
			<br>
			<div id="titulo">
				PEDACINHO DE PIZZA
			</div>
		</div>

		<div id="molduras">
			<br>
			<div id="titulo">
				LA PIU BELLA
			</div>
		</div>
		</ul>
		
		<a href="estabelecimentos.php">
			<div id="todas">
				Todos estabelecimentos
			</div>
		</a>
		<br>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<script src='https://rawgithub.com/pederan/Parallax-ImageScroll/master/jquery.imageScroll.min.js'></script>
</body>
</html>