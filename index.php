<?php
// index.php
include_once "controllers/HomeController.php";

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    default:
        echo "Halaman tidak ditemukan!";
}
