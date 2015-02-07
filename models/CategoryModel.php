<?php

    class CategoryModel{

        protected $conn;
        public $rows;
        public $rowsAll;

        public function __construct()
        {
            $this->conn = new Consultas();
        }

        public function get($comparate = null, $value = null)
        {
            $query = $this->conn->getConsultar("
                SELECT *
                FROM category
                WHERE $comparate = '$value'
            ");

            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                $this->rows[] = $row;
            }

            return $this->rows;


           /* while($row = $query->fetch_all())
            {
               return [
                    "nombre" => $row["name_user"],
                    "nick" => $row["nick_user"],
                    "email" => $row["email_user"],
                    "type" => $row["type_user"],
                    "direccion" => $row["direccion_user"],
                    "ciudad" => $row["ciudad_user"],
                    "postal" => $row["postal_user"],
                    "web" => $row["web_user"]
                ];

            }*/

        }

        public function getAll()
        {
            $query = $this->conn->getConsultar("
                SELECT *
                FROM category
            ");

            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                $this->rowsAll[] = $row;
            }

            return $this->rowsAll;

        }

        public function set($data = array())
        {

            extract($data);
            if($this->conn->getConsultar("
                INSERT INTO category
                (name_category, description_category)
                VALUES
                ('$name', '$description')
            "))
            {
                echo "<script>alert('Registrado Correctamente')</script>";
                header('Location:'.Rutas::getDireccion('category'));
            }else{
                exit("El registro no se ha completado por algun motivo");
            }
        }

        public function edit($id, $values = array())
        {
            extract($values);
            if($this->conn->getConsultar("
                UPDATE category
                SET name_category = '$name', description_category = '$description'
                WHERE id_category = '$id'
            "))
            {
                echo "<script>alert('Editado Correctamente')</script>";
                header('Location:'.Rutas::getDireccion('category'));
            }else
            {
                exit("Ocurrio un error en la modificacion");
            }
        }

        public function delete($id)
        {
            if($this->conn->getConsultar("
                DELETE FROM category
                WHERE id_category = '$id'
            ")){
                header('Location:'.Rutas::getDireccion('category'));
            }else
            {
                exit("Ocurrio algun error o el archivo ya no existe");
            }
        }
    }
