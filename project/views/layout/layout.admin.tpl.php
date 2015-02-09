<?php
	require 'helpers/system/data/avatar.php';
	Avatar::edit($user);
	$value = new Avatar();
	$avatar = $value->get($user);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title ?></title>
	<link rel="stylesheet" href="<?=Rutas::getDireccion('media/css/estilos.css') ?>">
	<link rel="stylesheet" href="/media/fonts/icomoon/style.css">
	<script src="<?=Rutas::getDireccion('media/js/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
</head>
<body id="body-admin">
	<header id="cabezera">
		<div id="company">
			<a href="/"><span class="icon-lapiz"></span></a>
		</div>
		<div id="control-account">
			<div class="admin">
				<figure>
					<img src="<?=$avatar?>" alt="">
				</figure>
				<div>
					<p><?=$user; ?></p>
				</div>
				<span class="icon-arrow-drop-down"></span>
				<!-- Elemento Desplegable -->
			</div>
			<div class="close">
				<a href="/deletesession"><span class="icon-switch"></span></a>
			</div>
		</div>
	</header>

	<div class="show-content-user">
		<ul>
			<a href="">
				<form action="" id="upload" method="post" enctype="multipart/form-data">
					<li class="upload">Reemplazar Cover
						<input type="file" name="url"  onchange="document.getElementById('upload').submit ()">
						<input type="hidden" name="add">
					</li>
				</form>
			</a>
			</li>
			<a href="/edit"><li>Editar Perfil</li></a>
		</ul>
	</div>

	<nav id="menu-administrator">
		<ul class="admin-m">
			<li>
				<a href="/admin">
					<span class="icon-home"></span>
				</a>
			</li>
			<li>
				<a href="/post">
					<span class="icon-pencil"></span>
				</a>
			</li>
			<li>
				<a href="/inbox">
					<span class="icon-coments"></span>
				</a>
			</li>
			<li>
				<a href="/category">
					<span class="icon-tags"></span>
				</a>
			</li>
		</ul>
	</nav>

	<?=$tpl_content?>
	<script src="/media/js/jquery.js"></script>
	<script src="<?=Rutas::getDireccion('media/js/basic-animation.js')?>"></script>

</body>
</html>
