<?php

namespace ContainerFV0spoP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UjxJgSFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ujxJgSF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ujxJgSF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\PostController::create' => ['privates', '.service_locator.gsGOKCX', 'get_ServiceLocator_GsGOKCXService', true],
            'App\\Controller\\PostController::index' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController::show' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\PostController:create' => ['privates', '.service_locator.gsGOKCX', 'get_ServiceLocator_GsGOKCXService', true],
            'App\\Controller\\PostController:index' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController:show' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\PostController::create' => '?',
            'App\\Controller\\PostController::index' => '?',
            'App\\Controller\\PostController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\PostController:create' => '?',
            'App\\Controller\\PostController:index' => '?',
            'App\\Controller\\PostController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}