<?php
require_once "model/Note.php";
?>
<a href="index.php" class="btn btn-primary">Volver al index</a>
<br><br>
<form action=" index.php?action=guardar" method="POST">
    <label for="">Título de la nota: </label><br>
    <input type="text" name="title" />
    <br>
    <label for="">Contenido</label><br>
    <textarea name="content"></textarea>
    <br><br>
    <input class="btn btn-primary" type="submit" value="Enviar formulario">
    <input class="btn btn-primary" type="reset" value="Reiniciar formulario">
</form>