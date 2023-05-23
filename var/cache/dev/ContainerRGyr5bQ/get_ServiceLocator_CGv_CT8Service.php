<?php

namespace ContainerRGyr5bQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CGv_CT8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cGv.CT8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cGv.CT8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine2' => ['services', 'doctrine', 'getDoctrineService', false],
            'post' => ['privates', '.errored..service_locator.cGv.CT8.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.cGv.CT8": it needs an instance of "App\\Entity\\Post" but this type has been excluded in "config/services.yaml".'],
        ], [
            'doctrine2' => '?',
            'post' => 'App\\Entity\\Post',
        ]);
    }
}
