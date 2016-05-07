<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 30/03/2016
 * Time: 18:46
 */
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/setup.php';
/*require_once __DIR__ . '/../src/utility/helperFunctions.php';*/
require __DIR__ . '/../public/fpdf181/fpdf.php';

// this is done if you are not using the utility class
// ----------------------------------------------------------------------
$app->get('/',              'Itb\Controller\MainController::indexAction');

// this is the login, processes login and logout section
// ----------------------------------------------------------------------
$app->get('/login',         'Itb\Controller\UserController::loginAction');
$app->get('/logout',        'Itb\Controller\UserController::logoutAction');
$app->post('/login',        'Itb\Controller\UserController::processLoginAction');
$app->get('/loginSuccess',  'Itb\Controller\UserController::loginAction');

// these are all the other views
// ---------------------------------------------------------------------
$app->get('/list',          'Itb\Controller\MainController::listAction');
$app->get('/show',           'Itb\Controller\PublicationController::listAction');
$app->get('/sendMessage',    'Itb\Controller\MessageController::sendMessageAction');
$app->post('/sendMessage',   'Itb\Controller\MessageController::processMessageForm');
$app->get('/confirmMessage', 'Itb\Controller\MessageController::confirmMessageAction');
$app->get('/confirmMessage', 'Itb\Controller\MessageController::confirmMessageAction');

$app['debug'] = true;
$app->run();

$pdf = new FPDF();
