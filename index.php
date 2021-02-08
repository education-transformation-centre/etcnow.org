<?php
include 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('static/templates/');
$twig = new \Twig\Environment($loader, []);

if (!isset($_GET['q'])) {
    echo $twig->render('home.html');
} if ($_GET['q'] == 'curriculum') {
    echo $twig->render('curriculum.html');
} else {
    echo $twig->render('404.html');
}
?>
