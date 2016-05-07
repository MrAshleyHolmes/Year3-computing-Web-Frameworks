<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 31/03/2016
 * Time: 01:57
 */

// web/index.php
// ----------------------------------------------
require_once __DIR__ . '/../vendor/autoload.php';

// ... definitions

$app = new Silex\Application();
$templatesPath = __DIR__ . '/../templates';

// register Twig with Silex
// ------------------------------------------------------------
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => $templatesPath
));

// register Session provider with Silex
// ---------------------------------------------------------
$app->register(new Silex\Provider\SessionServiceProvider());

/*print \Itb\ControllerUtility::controller('Itb','main/index');
die();*/

// database connection parameters
define('DB_HOST', 'localhost');
define('DB_USER', 'fred');
define('DB_PASS', 'smith');
define('DB_NAME', 'itb');

date_default_timezone_set('Europe/Dublin');

//die('i am here');
