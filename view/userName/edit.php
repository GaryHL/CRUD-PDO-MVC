<?php

require_once("/xampp/htdocs/Crud-pdo-mvc/view/head/head.php");
require_once("/xampp/htdocs/Crud-pdo-mvc/controller/userNameController.php");

$obj = new UserNameController();

$user = $obj->show($_GET['id']);
?>

<form action="/crud-pdo-mvc/view/userName/update.php" autocomplete="off" method="POST">
    <h2 class="text-center">Modificando refistro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10"> 
            <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?=$user['id']?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?=$user['nombre']?>">
        </div>
    </div>
    <div class="">
        <input type="submit" value="actualizar" class="btn btn-success">
        <a class="btn btn-danger" href="show.php?id=<?= $user['id']?>">Cancelar</a>
    </div>
</form>

<?php
require_once("/xampp/htdocs/Crud-pdo-mvc/view/head/footer.php");
?>