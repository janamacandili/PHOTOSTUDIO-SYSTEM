<?php
$route = $_GET['route'] ?? 'home';

switch ($route) {
    case 'faq':
        require 'faq.php';
        break;
    case 'rewards':
        require 'rewards.php';
        break;
    case 'giftcard':
        require 'giftcard.php';
        break;
    case 'book':
        require 'book.php';
        break;
    case 'login':
        require 'login.php';
        break;
    case 'home':
    default:
        require 'home.php';
        break;
}
?>