<?php  

    class UsernameModel
    {
        private $PDO;

        public function __construct()
        {
            require_once('/xampp/htdocs/Crud-pdo-mvc/config/db.php');

            $con = new DataBase();

            $this -> PDO = $con -> conexion();
        }

        public function insertar ($nombre,$apellido){
            $stament = $this -> PDO -> prepare("INSERT INTO username VALUES (null,:nombre,:apellido)");
            $stament -> bindParam(":nombre" , $nombre);
            $stament -> bindParam(":apellido" , $apellido);
            return ($stament -> execute()) ? $this -> PDO -> lastInsertId() : false ;  
        } 

        public function show ($id){
            $stament = $this -> PDO -> prepare("SELECT * FROM username where id = :id limit 1");
            $stament -> bindParam(":id", $id);
            return ($stament -> execute()) ? $stament->fetch() : false ;
        }

        public function index (){
            $stament = $this -> PDO -> prepare("SELECT * FROM username");
            return ($stament -> execute()) ? $stament -> fetchAll() : false;
        }

        public function update ($id, $nombre, $apellido){
            $stament = $this -> PDO -> prepare( " UPDATE username set nombre = :nombre, apellido = :apellido WHERE id = :id");
            $stament -> bindParam(":nombre",$nombre);
            $stament -> bindParam(":id",$id);
            $stament -> bindParam(":apellido",$apellido);

            return ($stament -> execute()) ? $id : false ;
        }

        public function delete ($id){
            $stament = $this -> PDO -> prepare( " DELETE FROM username WHERE id = :id");
            $stament -> bindParam(":id",$id);
            return ($stament -> execute()) ? true : false; 
        }

    }

?>