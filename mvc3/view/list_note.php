<div class='row'>
    <div class="col-md-12 text-right">
        <a href="index.php?action=insert" class="btn btn-outline-primary m-3">Crear nota</a>
        </hr>
    </div>


    <?php
    if (count($dataToView) > 0) {
        foreach ($dataToView as $note) {
    ?>
    <div class="col-md-3">
        <div class="card-body border border-secondary rounded p-3 m-3">
            <h5 class="card-tile"><?php echo $note->getTitle(); ?></h5>
            <div class="card-text"><?php echo nl2br($note->getContent()) ?></div>
            <hr class="mt-1" />
            <a href="index.php?action=confirmEdit&id=<?php echo $note->getId(); ?>&title=<?php echo $note->getTitle(); ?>&content=<?php echo $note->getContent(); ?>"
                class="btn btn-primary">Editar</a>
            <a href="index.php?action=confirmDelete&id=<?php echo $note->getId(); ?>"
                class="btn btn-danger">Eliminar</a>
        </div>
    </div>
    <?php
        }
    } else {
        ?>
    <div class="alert alert-info">
        Actualmente no existen notas.
    </div>
    <?php
    }
    ?>
</div>