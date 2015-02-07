<?php

	if (isset($_POST['add'])) {
		$consulta = new PostModel;
		return $consulta->set([
				"title" => $_POST['title'],
				"imgIn" => $_POST['imgIn'],
				"date" => $_POST['date'],
				"prev" => $_POST['prev'],
				"post" => $_POST['post'],
				"category" => $_POST['category'],
				"iduser" => $_POST['iduser']
			]);
	}

?>


<section id="container-data-post">
	<h1>Administra tus Publicaciones</h1>
	<table class="table-content-post">
		<tr class="reference-table">
			<td colspan="4">Listado de Publicaciones</td>
		</tr>
		<tr class="titles-content">
			<th>Titulo del Post</th>
			<th>Fecha del post</th>
			<th>Previo</th>
			<th>Acciones</th>
		</tr>
		<?php foreach ($values as $row) {
			?>
			<tr class="data-content">
				<td><?=$row["title_post"]; ?></td>
				<td><?=$row["date_post"]; ?></td>
				<td><?=$row["prev_post"]; ?></td>
				<td class="actions-content">
					<a href="/post/edit/?e=<?=$row['id_post']?>" title="Editar"><span class="icon-pencil"></span></a>
					<a href="/post/delete/?d=<?=$row['id_post']?>" title="Eliminar"><span class="icon-delete"></span></a>
				</td>
			</tr>
			<?php
		} ?>
	</table>

	<div class="button-new-post">
		<span class="icon-plus"></span>
	</div>
</section>

<section class="form-add-post">
	<a href="javascript:document.postform.submit()" class="enviar-form"><span class="icon-paper-plane"></span></a>
	<span class="cerrar"><span class="icon-delete"></span></span>
	<h1>Agraga un nuevo post</h1>
	<article class="cont">
		<form action="" method="post" name="postform">
			<input type="text" name="title" placeholder="Titulo Publicacion">
			<input type="text" name="imgIn" placeholder="Imagen Introductoria URL">
			<input type="text" value="<?=$fecha?>" disabled placeholder="Fecha de Publicacion">
			<input type="hidden" value="<?=$fecha?>" name="date">
			<label for="Previo" class="label1">Previo</label>
			<textarea name="prev" id="" cols="30" rows="10"></textarea>
			<label for="Post" class="label1">Post</label>
			<textarea name="post" id="" cols="30" rows="10"></textarea>
			<label for="categoria" class="label1">Categoria</label>
			<select name="category" id="">
				<?php foreach ($categorys as $row) {?>
					<option value="<?=$row['id_category']?>"><?=$row['name_category']?></option>
				<?php } ?>
			</select>
			<input name="iduser" type="hidden" value="<?=$iduser?>">
			<input type="hidden" name="add">
			<a href="javascript:document.postform.submit()" class="enviar-form-int"><span class="icon-paper-plane"></span></a>
		</form>
	</article>
</section>


<script>
	tinymce.init({
    selector: "textarea",
    theme: "modern",
    maxwidth: 500,
    height: 200,
    image_advtab: true,
    language : 'es',
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 });
</script>
