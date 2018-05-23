<?php


session_start();
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
    'cache' => false,
));


require('model/model.php');

$template = $twig->load('choixImg.html');
echo $template->render(array());


