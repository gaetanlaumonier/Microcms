
<?php

require_once __DIR__.'/../vendor/autoload.php';   /* dir va chercher la source du fichier */

$app = new Silex\Application();

require __DIR__.'/../app/routes.php';

$app->run();
