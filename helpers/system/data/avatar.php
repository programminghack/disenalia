<?php

class avatar
{
   public function get($name)
   {
      $data = new UserModel();
      $values = $data->get("name_user",$name);
      foreach ($values as $row){
         $avatar = $row['avatar_user'];
         return $avatar;
      }
   }

   public static function edit($user)
   {
      if (isset($_POST['add'])) {
         $dir_destino = $_SERVER['DOCUMENT_ROOT']."/media/img/profile/";
         $imagen_subida = $dir_destino . basename($_FILES['url']['name']);
         $imagen_lista = ROOT_RUTA. "media/img/profile/" . basename($_FILES['url']['name']);
         //Variables del metodo POST

         if(!is_writable($dir_destino)){
            echo "no tiene permisos";
         }else{
            if(is_uploaded_file($_FILES['url']['tmp_name'])){
               if (move_uploaded_file($_FILES['url']['tmp_name'], $imagen_subida)) {
                  $consulta = new UserModel;
                        return $consulta->editAvatar($user,[
                              "avatar" =>$imagen_lista,
                           ]);
         }else{
               echo "<script>alert('Algun error en la carga intenta de Nuevo. Disculpa las molestias.')</script>";
            }
         }
         else{
            echo "<script>alert('Error al guardar el archivo probablemente muy pesado')</script>";
         }
      }
   }
   }
}

?>
