<?php 
	if (isset($_POST['add'])) {
		$consulta = new CategoryModel;
		return $consulta->edit($category,[
				"name" => $_POST['name'],
				"description" => $_POST['description']
			]);
	}

?>

<section class="form-edit-category">
	<article class="cont">
		<h1>Agraga nueva categoria</h1>
		<form action="" method="post">
			<?php foreach ($categorydata as $row) {?>
				<input type="text" value="<?=$row['name_category'] ?>" name="name" placeholder="Nombre Categoria">
				<input type="text" value="<?=$row['description_category'] ?>" name="description" placeholder="Descripcion">
				<input name="add" type="submit" value="Guardar">
			<?php } ?>
		</form>
	</article>
</section>