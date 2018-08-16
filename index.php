<?php

require_once "vendor/autoload.php";
session_start();
$loader = new Twig_Loader_Filesystem('plantillas');
$twig = new Twig_Environment($loader, array());
echo $twig->render('index.html.twig', array('name' => 'Fabien'));