<script type="text/javascript" src="media/js/jquery.js"></script>
<script src="media/js/edit-form.js"></script>

<section  id="home-admin-content">
	<h1>Usuarios</h1>
		<table border='1'>
		<tr><th>Nombre de Usuario</th><th>Tipo de usuario</th><th>Twitter</th><th>Facebook</th><th>e-mail</th><th>Editar/Eliminar</th></tr>
		<?php
			foreach ($rows as $row) {
		?>
				<tr id="<?=$row['name_user']?>">
					<td><?=$row['name_user']?></td><td><?=$row['type_user']?></td><td><?=$row['twitter_user']?></td><td><?=$row['facebook_user']?></td><td><?=$row['email_user']?></td><td><img src="editar.png" class="edit"/><img src="eliminar.png" class="delete"/></td>
				</tr>

		<?php
			}			
		?>		
		</table>		
		
 	
	<div class="dialog" id="form-edit">
    	<form action="user/update" method="post">
    		<label for='name'>Nombre </label><input type='text' placeholder='Nombre' id='name' name='name'/>
			<label for='name'>Contraseña </label><input type='password' placeholder='Contraseña' id='password' name='password'/>
			<label for='name'>Facebook </label><input type='text' placeholder='Facebook' id='facebook' name='facebook' />
			<label for='name'>Twitter </label><input type='text' placeholder='Twitter' id='twitter' name='twitter'/>
			<label for='name'>email </label><input type='text' placeholder='email' id='email' name='email' />
			<input type='submit' name='add' value='Actualizar'><input type="button" name="cancelar" value="Cancelar" id="cancelar">
		</form>
	</div>
	
</section>
