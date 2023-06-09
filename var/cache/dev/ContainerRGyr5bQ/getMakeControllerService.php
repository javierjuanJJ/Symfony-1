<?php

namespace ContainerRGyr5bQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMakeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MakeController' shared autowired service.
     *
     * @return \App\Controller\MakeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MakeController.php';

        $container->services['App\\Controller\\MakeController'] = $instance = new \App\Controller\MakeController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\MakeController', $container));

        return $instance;
    }
}
