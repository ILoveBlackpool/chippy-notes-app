<?php

require_once 'views/header.html';
require_once 'views/partials/sideBar.phtml';
require_once 'vendor/autoload.php';
require_once 'Models/Database.php';
require_once 'Models/Note.php';
require_once 'Controllers/NoteController.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$dbInstance = Database::getInstance();
$dbConnection = $dbInstance->getDbConnection();

$model = new NoteModel($dbConnection);
$controller = new NoteController($model);
$controller->displayText();