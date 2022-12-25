<?php

    require_once('/xampp/htdocs/Crud-pdo-mvc/controller/userNameController.php');

    $obj = new UserNameController();

    $obj -> update($_POST['id'],$_POST['nombre'])

?>