<?php
require_once("../head/head.php")
?>

    <form action="store.php" method="POST" autocomplete="off">
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
            <input type="text" required name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Guardar usuario</button>
        <a href="/Crud-pdo-mvc" class="btn btn-danger " > Cancelar </a>
    </form>

<?php
require_once("../head/footer.php")
?>