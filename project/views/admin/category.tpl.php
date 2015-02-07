<?php
	if (isset($_POST['add'])) {
		$consulta = new CategoryModel;
		return $consulta->set([
				"name" => $_POST['name'],
				"description" => $_POST['description']
			]);
	}

?>

<section id="container-data-category">
	<h1>Administra tus Categorias</h1>
	<table class="table-content-category">
		<tr class="reference-table">
			<td colspan="4">Listado de Publicaciones</td>
		</tr>
		<tr class="titles-content">
			<th>Titulo de Categoria</th>
			<th>Descripcion</th>
			<th>Acciones</th>
		</tr>
		<?php foreach ($values as $row) {
			?>
			<tr class="data-content">
				<td><?=$row["name_category"]; ?></td>
				<td><?=$row["description_category"]; ?></td>
				<td class="actions-content">
					<a href="/category/edit/?e=<?=$row['id_category']?>" title="Editar"><span class="icon-pencil"></span></a>
					<a href="/category/delete/?d=<?=$row['id_category']?>" title="Eliminar"><span class="icon-delete"></span></a>
				</td>
			</tr>
			<?php
		} ?>
	</table>

	<div class="button-new-category">
		<span class="icon-plus"></span>
	</div>
</section>


<section class="form-add-category">
	<a href="javascript:document.postform.submit()" class="enviar-form"><span class="icon-paper-plane"></span></a>
	<span class="cerrar"><span class="icon-delete"></span></span>
	<h1>Agraga nueva categoria</h1>
	<article class="cont">
		<form action="" method="post" name="postform">
			<input type="text" name="name" placeholder="Nombre Categoria">
			<input type="text" name="description" placeholder="Descripcion">
			<input type="hidden" name="add">
			<a href="javascript:document.postform.submit()" class="enviar-form-int"><span class="icon-paper-plane"></span></a>
		</form>
	</article>
</section>

</script>
