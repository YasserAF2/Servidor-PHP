<?php
require_once "model/Note.php";

?>

<a class="btn btn-primary" href="index.php">Volver al index</a>

<form action="index.php?action=delete&id=<?= $_GET['id'] ?>" method="POST">
    <div class="col-md-3">
        <div class="card-body border border-secondary rounded p-3 m-3">
            <p>¿Seguro que quiere borrar esta nota?</p>
            <p>Título de la nota: <?= $dataToView->getTitle(); ?></p>
            <p>Contenido: <?= $dataToView->getContent(); ?></p>
        </div>
    </div>

    <input type="submit" value="Eliminar nota">
</form>