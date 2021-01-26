<?php
include 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('static/templates/');
$twig = new \Twig\Environment($loader, []);


echo $twig->render('curriculum.html');
?>
