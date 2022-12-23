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

        public function insertar ($nombre){
            $stament = $this -> PDO -> prepare("INSERT INTO username VALUES (null,:nombre)");
            $stament -> bindParam(":nombre" , $nombre);
            return ($stament -> execute()) ? $this -> PDO -> lastInsertId() : false ;  
        } 
    }

?>