<?php

namespace Container0I2zxRx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GsGOKCXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gsGOKCX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gsGOKCX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine2' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'doctrine2' => '?',
        ]);
    }
}
