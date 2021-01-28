<?php
include 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('static/templates/');
$twig = new \Twig\Environment($loader, []);

if ($_GET['q'] == 'curriculum') {
    echo $twig->render('curriculum.html');
} else {
    echo $twig->render('home.html');
}
?>
