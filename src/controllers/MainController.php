<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 31/03/2016
 * Time: 00:39
 */

namespace Itb\Controller;

use Itb\Model\Action;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class MainController
 * @package Itb\Controller
 */
class MainController
{
    /**
     * displays the homepage
     *
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function indexAction(Request $request, Application $app)
    {
/*        $isLoggedIn = $this->isLoggedInFromSession();
        $username = $this->usernameFromSession();*/

/*        print \Itb\ControllerUtility::controller('Itb','main/index');
        die();*/

        $argsArray = [];

        $templateName = 'index';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * lists all the actions
     *
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function listAction(Request $request, Application $app)
    {
/*        $isLoggedIn = $this->isLoggedInFromSession();
        $username = $this->usernameFromSession();*/

/*        print \Itb\ControllerUtility::controller('Itb','main/list');
        die();*/

        $actions = Action::getAll();

        $argsArray = [
            'actions' => $actions
        ];

        $templateName = 'list';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * shows all the publications
     *
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function showAction(Request $request, Application $app)
    {
        $publications = Publication::getAll();

        $argsArray = [
            'publications' => $publications
        ];

        $templateName = 'show';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

}