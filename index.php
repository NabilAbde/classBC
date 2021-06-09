<?php

switch ($_SERVER['REQUEST_URI']) {
    case '/test_class_BC/categories':
        include 'view/vCategories.php';
        break;
    case '/test_class_BC/home':
        include 'view/home.php';
        break;
    case '/test_class_BC/personne':
        include 'view/vPersonne.php';
        break;
    default:
        include 'view/404.php';
        break;
}
