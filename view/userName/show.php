<?php


require_once("/xampp/htdocs/Crud-pdo-mvc/view/head/head.php");
require_once("/xampp/htdocs/Crud-pdo-mvc/controller/userNameController.php");

$obj = new UserNameController();

$date = $obj->show($_GET['id']);
?>

<h2 class="text-center">Registrer details</h2>
<div class="pb-3">
    <a href="/Crud-pdo-mvc/index.php" class="btn-primary btn">Regresar</a>
    <a href="/view/userName/edit.php?id=<?= $date[0] ?>" class="btn-success btn">Actualizar</a>
    <!-- Button trigger modal -->
    <a  class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar registro</a>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Una vez eliminado no se podrá recuperar el registro.
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-success" data-bs-dismiss="modal">Cerrar</a>
                    <a href="/view/userName/delete.php?<?php $date['id']?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>
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

require_once("/xampp/htdocs/Crud-pdo-mvc/view/head/footer.php");

?>