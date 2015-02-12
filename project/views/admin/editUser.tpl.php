<section  id="home-admin-content">
	<h1>Editar Usuario</h1>
	<form action="/edit-user/update" method="post">
		<?php
			foreach ($values as $row) {
		?>		
		
		
		<label for="name">Nombre </label><input type="text" placeholder="Nombre" id="name" name="name" value="<?=$row['name_user']?>"/>
		<label for="password">Contraseña </label><input type="password" placeholder="Contraseña" id="password" name="password" />
		<label for="facebook">Facebook </label><input type="text" placeholder="Facebook" id="facebook" name="facebook" value="<?=$row['facebook_user']?>" />
		<label for="twitter">Twitter </label><input type="text" placeholder="Twitter" id="twitter" name="twitter" value="<?=$row['twitter_user']?>"/>
		<label for="email">e-mail </label><input type="text" placeholder="email" id="email" name="email" value="<?=$row['email_user']?>"/>
		<input type="submit" name="add" value="Actualizar">
		<?php 
			}
 		?>
	</form>

</section>