<?php
require_once("../head/head.php")
?>
<h2 class="text-center py-3"> Crear nuevo usuario</h2>
    <form action="store.php" method="POST" autocomplete="off">
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
            <input type="text" required name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1" class="form-label">Apellido</label>
            <input type="text" required name="apellido" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
        </div>

        <button type="submit" class="btn btn-primary">Guardar usuario</button>
        <a href="/Crud-pdo-mvc" class="btn btn-danger " > Cancelar </a>
    </form>

<?php
require_once("../head/footer.php")
?>