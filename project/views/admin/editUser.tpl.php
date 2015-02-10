<section  id="home-admin-content">
	<h1>Editar Usuario</h1>
	<form action="/edit-user/update" method="post">
		<?php
			foreach ($values as $row) {
		?>		
		
		
		<input type="text" placeholder="Nombre" name="name" value="<?=$row['name_user']?>"/>
		<input type="password" placeholder="Contraseña" name="password" />
		<input type="text" placeholder="Facebook" name="facebook" value="<?=$row['facebook_user']?>" />
		<input type="text" placeholder="Twitter" name="twitter" value="<?=$row['twitter_user']?>"/>
		<input type="text" placeholder="email" name="email" value="<?=$row['email_user']?>"/>
		<input type="submit" name="add" value="Actualizar">
		<?php 
			}
 		?>
	</form>

</section>