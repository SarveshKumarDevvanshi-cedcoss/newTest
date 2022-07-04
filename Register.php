<?php

namespace App\Testhome;

use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\Mvc\View;

class Register implements ModuleDefinitionInterface
{

    /** * Register a specific autoloader for the module */
    public function registerAutoloaders(DiInterface $di = null){

    }

    /** * Register specific services for the module */
    public function registerServices(DiInterface $di){
        // Registering a dispatcher
        $di->set(
            'dispatcher',
            function () {
                $dispatcher = new Dispatcher();
                $dispatcher->setDefaultNamespace('App\Testhome\Controllers');
                return $dispatcher;
            }
        );

        // Registering the view component
        $di->set(
            'view',
            function () {
                $view = new View();
                $view->setViewsDir(CODE.'/testhome/views/');
                return $view;
            }
        );
        
    }
}
