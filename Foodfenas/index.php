<!DOCTYPE html>
<html>
<head>
	<title>FoodFenas</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<script src="jquery/script.js"></script>
	<meta charset="utf-8">
</head>
<body class="index">
	<div class="black"></div>
	<img src="imagens/topo.png" id="topo">


	<!--Formulário de acesso-->
		<div class="acesso">
			<form method="">
			<div class="email">
				<input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,20]] feedback-input" placeholder="Nome" class="name"/>
			</div>
			<input type="text" id="email_acesso" placeholder="E-mail">
			<input type="password" id="senha_acesso" placeholder="Senha">
			<input type="submit" id="envia_acesso" value="Entrar">
			</form>
		</div>
	</div>

	<!--MENU-->
	<div id="menuFixo"></div>
	<div id="barra_topo"></div>
	<nav id="menu">
		<img src="imagens/menu_responsivo.png" id="menu_reponsivo">

		<div id="alinha_logo">
			<a href="index.php">
				<img src="imagens/logo.fw.png" id="logo">
			</a>
		</div>	
		<a id="link_menu">
			<div id="entrar">
				Entrar / Cadastrar
			</div>
		</a>
		<a href="ajuda.php" id="link_menu">
			<div id="contato">
				Contato
			</div>
		</a>
		<a href="cadastro.php" id="link_menu">
			<div id="estabelecimento">
				Cadastrar estabelecimentos
			</div>
		</a>
		<a id="link_menu">
			<div id="sobre">
				Sobre Foodfenas
			</div>
		</a>
		

	</nav>
	<div id="img_topo">
		<div class="img-holder" data-image="imagens/comida.jpg" data-image-mobile="imagens/comida.jpg" data-width="1600" data-height="1000"></div>
		<br>
		<div id="titulo">
			Comer nunca foi tão fácil !
		</div>
		
			<form method="post" action="busca.php" id="formulario">
				<input type="text" name="busca" placeholder="Buscar por restaurantes ou por tipo de comida" id="busca">
				<div id="buscar" align="center">
					<img src="imagens/buscar.png">
				</div>
			</form>
			<br>
	
		<div id="titulo_destaque">
			Estabelecimentos em destaque
			<div id="barra"></div>
		</div>
		<div id="divMolduras">
			<div id="molduras">
				<img id="imagem" src="http://cdn1.mundodastribos.com/wp-admin/uploads/2011/01/fachadas-comerciais-modernas.jpg">
				<div id="titulo">La pill Pella</div>
			</div>
	
			<div id="molduras">
				<img id="imagem" src="http://cdn1.mundodastribos.com/wp-admin/uploads/2011/01/fachadas-comerciais-modernas.jpg">
				<div id="titulo">La pill Pella</div>
			</div>
	
			<div id="molduras">
				<img id="imagem" src="http://cdn1.mundodastribos.com/wp-admin/uploads/2011/01/fachadas-comerciais-modernas.jpg">
				<div id="titulo">La pill Pella</div>
			</div>
		</div>
	</div>

	<div id="categorias">
		<div id="cat" style="background:#FFC107" align="center">
			<img src="imagens/categorias/burguer_food.png">
			<div id="titulo">Lanchonetes</div>
		</div>
		<div id="cat" style="background:#D32F2F" align="center">
			<img src="imagens/categorias/chinese_food.png">
			<div id="titulo">Chinesa</div>
		</div>
		<div id="cat" style="background:#FFC107" align="center">
			<img src="imagens/categorias/pizza_food.png">
			<div id="titulo">Pizzarias</div>
		</div>
		<div id="cat" style="background:#D32F2F" align="center">
			<img src="imagens/categorias/restaurant_food.png">
			<div id="titulo">Restaurantes</div>
		</div>
		<div id="cat" style="background:#FFC107" align="center">
			<img src="imagens/categorias/japanese_food_1.png">
			<div id="titulo">Japonesa</div>
		</div>
		<div id="cat" style="background:#D32F2F" align="center">
			<img src="imagens/categorias/massa_food.png">
			<div id="titulo">Massas</div>
		</div>
		
	</div>

	<br><br>
	<div id="sobree">
		<br>
		<div id="titulo">
			Sobre Foodfenas
		</div>
		<div id="barra"></div>
		<div id="conteudo">
			O Foodfenas é uma nova plataforma que chega em Alfenas buscando facilitar o dia-a-dia dos Alfenenses. Com o Slogan “99% com fome, mas aquele 1% com preguiça de ligar”, a aplicação busca trazer conforto e segurança aos usuários.
			<br>
			O app conta com lanchonetes, pizzarias, restaurantes e todos tipos de fastFood de Alfenas. A praticidade é o principal ingrediente do app, já que a realização de pedidos podem ser feitos de modo muito fácil pela web/android.
			<br>
			O principal público alvo do Foodfenas são os universitários de Alfenas que nem sempre conseguem entrar em contato com os estabelecimentos e estão cheios de tanto papel/imãs de geladeira.
	



		</div>
		<br>
		<br>
	</div>

	<div id="extras">
		<div id="logoWhiteDiv"><img src="imagens/white.png" id="logoWhite"></div>
		<div id="separador1"/>
		<div id="divSocial">
			<a href="https://www.facebook.com/Foodfenas-1716947841851521/?fref=ts"><img src="imagens/iconsSocial/facebook.png" id="fb"></a>
			<a href="https://twitter.com/food_fenas"><img src="imagens/iconsSocial/twitter.png" id="tt"></a>
			<a href="https://www.instagram.com/foodfenas"><img src="imagens/iconsSocial/instagram.png" id="insta"></a>
			<a href="https://plus.google.com/112260983896344777465/about"><img src="imagens/iconsSocial/google-plus.png" id="gPlus"></a>
		</div>
		<br>
		<br>
		<br>
		<br>
		<p align="center"><font color="white">Entre em contato conosco:</font></p>
		<div id="formularioEmail">
			<br>
			<form class="form" id="form1">
				<div class="name">
					<input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,20]] feedback-input" placeholder="Nome" id="name"/>
				</div>	
				
				<div class="email">
					<input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="E-mail" />
				</div>
				
				<div class="text">
					<textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Texto da mensagem"></textarea>
				</div>
			
		
				<div class="submit">
					<input type="submit" value="ENVIAR" id="button-blue"/>
					<div class="ease"></div>
			</div>
			</form>
		</div>
		<p align="center"><a href="http://www.fillchar.com.br"><img src="imagens/fillcharSinged.png" id="fillcharLogo"></a></p>
	</div>
	<script src='https://rawgithub.com/pederan/Parallax-ImageScroll/master/jquery.imageScroll.min.js'></script>
</body>
</html>