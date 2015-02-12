<?php

	class PostModel{

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
                FROM post
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
                FROM post
            ");

            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                $this->rowsAll[] = $row;
            }

            return $this->rowsAll;

        }

        public function getFull()
        {
            $query = $this->conn->getConsultar("
                SELECT post.*, category.*
                FROM post
                INNER JOIN category
                ON category.id_category = post.id_category
            ");

            while($row = $query->fetch_array(MYSQLI_ASSOC)){
                $this->rowsAll[] = $row;
            }

            return $this->rowsAll;
        }

        public function getFullw($comparate = null, $value = null)
        {
            $query = $this->conn->getConsultar("
                SELECT post.*, category.*
                FROM post
                INNER JOIN category
                ON category.id_category = post.id_category
                WHERE $comparate = '$value'
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
                INSERT INTO post
                (title_post, img_post, date_post, prev_post, post_post, id_category, id_user)
                VALUES
                ('$title', '$imgIn', '$date', '$prev','$post', '$category', '$iduser')
            "))
             {
					Cookies::set("complete","Se a guardado correctamente","20-s");
					Redirection::go("post");
            	}else{
						Cookies::set("alert","Error: No se a podido guardar. Intente de nuevo ","20-s");
						Redirection::go("post");
               }

        }

        public function edit($id = null, $values = array())
        {
            extract($values);
            if($this->conn->getConsultar("
                UPDATE post
                SET title_post = '$title', img_post = '$imgIn', date_post = '$date', prev_post = '$prev', post_post = '$post', id_category = '$category', id_user = '$iduser'
                WHERE id_post = '$id'
            "))
            {
                Cookies::set("edit","Se a editado correctamente","20-s");
                Redirection::go("post");
            }else
            {
					Cookies::set("alert","Error: No se a podido modificar. Intente de nuevo ","20-s");
					Redirection::go("post");
            }
        }

        public function delete($id)
        {
            if($this->conn->getConsultar("
                DELETE FROM post
                WHERE id_post = '$id'
            ")){
					Cookies::set("delete","Se a eliminado correctamente","20-s");
					Redirection::go("post");
            }else
            {
					Cookies::set("alert","Error: No se a podido Eliminar. Intente de nuevo ","20-s");
					Redirection::go("post");
            }
        }
    }



?>
