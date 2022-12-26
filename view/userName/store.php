<?php

    require('/xampp/htdocs/Crud-pdo-mvc/controller/userNameController.php');

    $obj = new UserNameController();

    $obj-> guardar($_POST['nombre'],$_POST['apellido']);
    




?>