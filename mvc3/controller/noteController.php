<?php
require_once "model/Note.php";


class NoteController
{
    public $page_title;
    public $view;
    private $noteObj;

    public function __construct()
    {
        $this->view = "list_note";
        $this->page_title = "";
        $this->noteObj = new NoteTable();
    }

    /* List all notes */
    public function list()
    {
        $this->page_title = "Listado de notas";
        return $this->noteObj->getNotes();
    }

    public function insert()
    {
        $this->page_title = "Insertar nota";
        $this->view = "insert_note";
    }

    public function guardar()
    {
        $this->view = "list_note";
        $this->page_title = "Listar notas";
        $this->noteObj->insertar($_POST['title'], $_POST['content']);
        return $this->list();
    }

    public function confirmDelete()
    {
        $this->page_title = "Borrar nota";
        $this->view = "delete_note";
        return $this->noteObj->getNoteById($_GET['id']);
    }

    public function delete()
    {
        $this->page_title = "Borrado de notas";
        $this->view = "list_note";
        $this->noteObj->borrar($_GET['id']);
        return $this->list();
    }

    public function edit()
    {
        $this->page_title = "Listar notas";
        $this->noteObj->editar($_GET['id'], $_POST['title'], $_POST['content']);
        return $this->list();
    }

    public function confirmEdit()
    {
        $this->page_title = "Editar nota";
        $this->view = "edit_note";
        return $this->noteObj->getNoteById($_GET['id']);
    }
}