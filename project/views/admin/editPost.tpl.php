<?php
	if (isset($_POST['add'])) {
		$consulta = new PostModel;
		return $consulta->edit($post,[
				"title" => $_POST['title'],
				"imgIn" => $_POST['imgIn'],
				"date" => $_POST['date'],
				"prev" => $_POST['prev'],
				"post" => $_POST['post'],
				"state" => $_POST['state'],
				"category" => $_POST['category'],
				"iduser" => $_POST['iduser']
			]);
	}
?>


<section class="form-edit-post">
	<article class="cont">
		<h1>Editar Post</h1>
		<form action="" method="post">
			<?php foreach ($postdata as $row) {?>
				<input type="text" value="<?=$row['title_post']?>" name="title" placeholder="Titulo Publicacion">
				<input type="text" value="<?=$row['img_post']?>" name="imgIn" placeholder="Imagen Introductoria URL">
				<input type="text" value="<?=$row['date_post']?>" name="date" placeholder="Fecha de Publicacion">
				<label for="Previo" class="label1">Previo</label>
				<textarea name="prev" id="" cols="30" rows="10"><?=$row['prev_post']?></textarea>
				<label for="Post" class="label1">Post</label>
				<textarea name="post" id="" cols="30" rows="10"><?=$row['post_post']?></textarea>
				<select name="category" id="">
					<?php foreach ($category as $row2) {?>
						<option <?php if($row2['id_category'] == $row['id_category']){echo "selected";} ?> value="<?=$row2['id_category']?>"><?=$row2['name_category']?></option>
					<?php } ?>
				</select>
				<input name="iduser" type="hidden" value="<?=$iduser?>">
				<input name="add" type="submit" value="Guardar">
			<?php } ?>
		</form>
	</article>
</section>

<script>
	tinymce.init({
    selector: "textarea",
    theme: "modern",
    width: 900,
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
