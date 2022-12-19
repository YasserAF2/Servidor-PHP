<?php
require_once "model/Note.php";

?>

<a class="btn btn-primary" href="index.php">Volver al index</a>
<br><br>

<form action="index.php?action=edit&id=<?= $_GET['id'] ?>" method="POST">
    <label for="">Título de la nota: </label><br>
    <input type="text" name="title" value="<?= $dataToView->getTitle(); ?>" />
    <br>
    <label for="">Contenido</label><br>
    <textarea name="content"><?= $dataToView->getContent(); ?></textarea>
    <br><br>
    <input type="submit" value="Enviar formulario">
    <input type="reset" value="Reiniciar formulario">
</form>