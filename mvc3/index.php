<?php
//ini_set('display_errors', 1);
include_once "config/Config.php";
include_once "model/Db.php";
include_once "controller/noteController.php";

if (!isset($_GET['action'])) $_GET['action'] = DEFAULT_ACTION;

$controlador = new NoteController();

$dataToView = array();
$dataToView = $controlador->{$_GET['action']}();
//var_dump($dataToView);


require_once "view/template/header.php";
require_once "view/" . $controlador->view . ".php";
require_once "view/template/footer.php";