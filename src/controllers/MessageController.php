<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 07/05/2016
 * Time: 21:39
 */

namespace Itb\Controller;

use Itb\Model\Message;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class MessageController
 * @package Itb\Controller
 */
class MessageController
{
    /**
     * displays the messages
     *
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function sendMessageAction(Request $request, Application $app)
    {
        $argsArray = [];

        $templateName = 'sendMessage';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * confirms the message
     *
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function confirmMessageAction(Request $request, Application $app)
    {
        $argsArray = [];

        $templateName = 'confirmMessage';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

}