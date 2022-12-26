<?php

include_once("/xampp/htdocs/Crud-pdo-mvc/controller/userNameController.php");

 $obj = new UserNameController();

 
 $rows = $obj -> index();

 $usuarios = array();
 $usuarios['items'] = array();

 foreach($rows as $row ):
    $item = array(
        'id' => $row['id'],
        'nombre' => $row['nombre'],
        'apellido'=> $row['apellido']
    );
    array_push($usuarios['items'],$item);
endforeach;
 echo json_encode($usuarios);

?>