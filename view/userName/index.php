<?php

require_once('/xampp/htdocs/Crud-pdo-mvc/view/head/head.php');
require_once('/xampp/htdocs/Crud-pdo-mvc/controller/userNameController.php');

$obj = new UserNameController();

$rows = $obj->index();
?>
<h2 class="text-center py-3">Usuarios</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($rows) : ?>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <th><?= $row['id'] ?></th>
                    <th><?= $row['nombre'] ?></th>
                    <th><?= $row['apellido'] ?></th>
                    <th>
                        <a href="/crud-pdo-mvc/view/userName/show.php?id=<?= $row['id'] ?>" class="btn btn-primary">Ver</a>
                        <a href="/crud-pdo-mvc/view/userName/edit.php?id=<?= $row['id'] ?>" class="btn btn-success">Modificar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar registro</a>

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
                                        <a href="/crud-pdo-mvc/view/userName/delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <th colspan="4" class="text-center">Actualmente no hay registros</th>
            </tr>
        <?php endif ?>
    </tbody>
</table>
<div class="py-3">
    <a href="/crud-pdo-mvc/view/userName/create.php" class="btn btn-primary">agregar nuevo usuario</a>
</div>



<?php
require_once('/xampp/htdocs/Crud-pdo-mvc/view/head/footer.php');

?>