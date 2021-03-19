<?php
include 'vendor/autoload.php';

$data = [
    $version = '20210319-01'
];

$loader = new \Twig\Loader\FilesystemLoader('static/templates/');
$twig = new \Twig\Environment($loader, []);

if (!isset($_GET['q'])) {
    echo $twig->render('home.html', $data);
} else {
    echo $twig->render('404.html', $data);
}
?>
