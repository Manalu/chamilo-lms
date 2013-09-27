<?php

use Silex\WebTestCase;
//use Symfony\Bundle\FrameworkBundle\Test\WebTestCase

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-07 at 12:15:50.
 */
class BaseWebTestCase extends WebTestCase
{
    /**
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    public function createApplication()
    {
        // do not use require_once
        $app = require '../../main/inc/global.inc.php';
        $app['debug'] = true;
        $app['session.test'] = true;
        $app['exception_handler']->disable();

        // Setting session obj for old libraries
        \ChamiloSession::setSession($app['session']);
        \UserManager::setEntityManager($app['orm.em']);

        //$app['monolog'] = $this->getMock('Monolog\Logger');
        return $app;
    }
}
