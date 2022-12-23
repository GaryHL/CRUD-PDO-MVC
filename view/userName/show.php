<?php 


    require_once ("/xampp/htdocs/Crud-pdo-mvc/view/head/head.php");
    require_once ("/xampp/htdocs/Crud-pdo-mvc/controller/userNameController.php");

    $obj = new UserNameController();

    $date = $obj -> show($_GET['id']);
?>

<h2 class="text-center">Registrer details</h2>
<div class="pb-3">
    <a href="/Crud-pdo-mvc/index.php" class="btn-primary btn">Regresar</a>
    <a href="/view/userName/edit.php?id=<?=$date[0]?>" class="btn-success btn">Actualizar</a>
</div>
<table class=" table container-fluid ">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="col"><?= $date[0] ?></td>
            <td scope="col"><?php echo $date[1] ?></td>
        </tr>
    </tbody>
</table>
    
<?php

    require_once ("/xampp/htdocs/Crud-pdo-mvc/view/head/footer.php");

?>