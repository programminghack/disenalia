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
			<?php
				if($profile_act == "on"){
			?>
				<?php foreach ($profile as $row) {
				?>

					<div class="profile">
						<h1 class="pub">
							Publicado por:
						</h1>
						<figure class="avtr">
							<img src="<?=$row["avatar_user"] ?>" alt="">
						</figure>
						<h1 class="read">
							<?=$row["real_name_user"] ?>
						</h1>
						<div class="share">
							<a href="<?=$row['facebook_user'] ?>" target="_blank">
								<span class="icon-facebook"></span>
							</a>
							<a href="<?=$row['twitter_user'] ?>" target="_blank">
								<span class="icon-twitter"></span>
							</a>
							<a href="mailto: <?=$row['email_user'] ?>" target="_blank">
								<span class="icon-envelope"></span>
							</a>
						</div>
					</div>

				<?php
				} ?>
			<?php
				}
			?>
			<div class="search">
				<form action="/home/search" name="search_form" class="form_sch" method="post">
					<input type="text" name="search" required>
					<a href="javascript:document.search_form.submit()" id="search-disena"><span class="icon-lupa"></span></a>
				</form>
			</div>
			<div class="tags">
				<div class="head">
					<p>ETIQUETAS</p>
					<span class="icon-doc"></span>
				</div>
				<div class="cont">
					<?php foreach ($category as $row) { ?>
						<a href="/home/category/?q=<?=$row['id_category'] ?>"><?=$row['name_category'] ?></a>
					<?php	} ?>
				</div>
			</div>
			<div class="recommendations">
				<div class="head">
					<p>SITIOS RECOMENDADOS</p>
					<span class="icon-navegar"></span>
				</div>
				<div class="cont">
					<a href="#">HEPTAGRAM</a>
					<a href="#">NFGRAPHICS</a>
					<a href="#">VECINDAD GRÁFICA</a>
					<a href="#">ROC21</a>
					<a href="#">MECATE BLOG</a>
					<a href="#">ATENEU POPULAR</a>
					<a href="#">FROGX3</a>
				</div>
			</div>
			<figure class="banners">
				<img src="/media/img/banner_hepta.png" alt="">
			</figure>
			<figure class="banners">
				<img src="/media/img/banner_mtn.png" alt="">
			</figure>
			<figure class="banners">
				<img src="/media/img/banner_anc.png" alt="">
			</figure>
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
					<a href="" target="_blank"><img src="/media/img/twitter-footer.png" alt=""></a>
					<a href="" target="_blank"><img src="/media/img/facebook-footer.png" alt=""></a>
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
