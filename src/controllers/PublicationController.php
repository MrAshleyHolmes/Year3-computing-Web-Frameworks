<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 31/03/2016
 * Time: 02:17
 */

namespace Itb\Controller;

use Itb\Model\Publication;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class PublicationController
 * @package Itb\Controller
 */
class PublicationController
{
    /**
     * lists all the publications
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function listAction(Request $request, Application $app)
    {
        $publications = Publication::getAll();

        $argsArray = [
            'publications' => $publications
        ];

        $templateName = 'show';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

}