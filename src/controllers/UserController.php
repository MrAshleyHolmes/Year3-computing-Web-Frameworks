<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 06/05/2016
 * Time: 21:25
 */

namespace Itb\Controller;

use Itb\Model\User;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class UserController
 * @package Itb\Controller
 */
class UserController
{
    /**
     * processes the action of the login
     * @param Request $request
     * @param Application $app
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function processLoginAction(Request $request, Application $app)
    {
        // retrieve 'name' from GET params in Request object
        $username = $request->get('username');
        $password = $request->get('password');

        // authenticate!
        if ('user' === $username && 'user' === $password) {
            // store username in 'user' in 'session'
            $app['session']->set('user', array('username' => $username));

            // success - redirect to the secure admin home page
            return $app->redirect('/admin');
        }

        // login page with error message
        // ------------
        $templateName = 'login';
        $argsArray = array(
            'errorMessage' => 'bad username or password - please re-enter'
        );

        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * logs the user in
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function loginAction(Request $request, Application $app)
    {
        // logout any existing user
        $app['session']->set('user', null);

        // build args array
        // ------------
        $argsArray = [];

        // render (draw) template
        // ------------
        $templateName = 'login';
        return $app['twig']->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * logs the user out
     * @param Request $request
     * @param Application $app
     * @return mixed
     */
    public function logoutAction(Request $request, Application $app)
    {
        // logout any existing user
        $app['session']->set('user', null);

        // redirect to home page
//        return $app->redirect('/');

        // render (draw) template
        // ------------
        $templateName = 'index';
        return $app['twig']->render($templateName . '.html.twig', []);

    }

}
