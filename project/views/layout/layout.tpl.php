<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
	<link rel="stylesheet" href="/media/css/estilos.css">
	<link rel="stylesheet" href="/media/fonts/icomoon/style.css">
	<link rel="stylesheet" href="/media/css/menu.css">
</head>
<body>

	<nav id="menu-home">
		<img src="/media/img/logo-header.png" alt="">
		<ul class="links">
			<li><a href="/home">INICIO</a></li>
			<li><a href="/acerca">ACERCA DE</a></li>
			<li><a href="/redaccion">REDACCIÓN</a></li>
			<li><a href="/anunciate">ANÚNCIATE</a></li>
		</ul>
	</nav>
	<header class="header_front">
		<figure>
			<img src="/media/img/logo.png" alt="">
		</figure>
	</header>

	<main id="container">
		<section class="box-cont">
			<?=$tpl_content?>
		</section>
		<aside class="box-right">
			<div class="search">
				<form action="" class="form_sch">
					<input type="text">
					<span id="search-disena" class="icon-lupa"></span>
				</form>
			</div>
			<div class="tags">

			</div>
		</aside>
	</main>
	<footer>
		<div class="cont">
			<div class="box-foo">
				<figure><img src="/media/img/logo-header.png" alt=""></figure>
				<p>Diseñalia es un blog  de difusión de temas referentes al diseño gráﬁco y sus diversas ramiﬁcaciones. Mostrando contenido reelevante princinacional.</p>
			</div>
			<div class="box-foo">
				<h1>Síguenos en Redes Sociales</h1>
				<div class="rds">
					<a href=""><img src="/media/img/twitter-footer.png" alt=""></a>
					<a href=""><img src="/media/img/facebook-footer.png" alt=""></a>
				</div>
			</div>
			<div class="box-foo">
				<h1>Patrocinador</h1>
				<a href=""><img src="/media/img/logo-heptagram.png" alt=""></a>
			</div>
		</div>
	</footer>
	<script src="/media/js/jquery.js"></script>
	<script src="/media/js/menu.js"></script>

</body>
</html>
