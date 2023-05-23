<?php

namespace ContainerRGyr5bQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VMCIkwUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VMCIkwU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VMCIkwU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\PostController::create' => ['privates', '.service_locator.gsGOKCX', 'get_ServiceLocator_GsGOKCXService', true],
            'App\\Controller\\PostController::index' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController::remove' => ['privates', '.service_locator.cGv.CT8', 'get_ServiceLocator_CGv_CT8Service', true],
            'App\\Controller\\PostController::show' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\PostController:create' => ['privates', '.service_locator.gsGOKCX', 'get_ServiceLocator_GsGOKCXService', true],
            'App\\Controller\\PostController:index' => ['privates', '.service_locator.M.WXHx5', 'get_ServiceLocator_M_WXHx5Service', true],
            'App\\Controller\\PostController:remove' => ['privates', '.service_locator.cGv.CT8', 'get_ServiceLocator_CGv_CT8Service', true],
            'App\\Controller\\PostController:show' => ['privates', '.service_locator.PYF7PhY', 'get_ServiceLocator_PYF7PhYService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\PostController::create' => '?',
            'App\\Controller\\PostController::index' => '?',
            'App\\Controller\\PostController::remove' => '?',
            'App\\Controller\\PostController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\PostController:create' => '?',
            'App\\Controller\\PostController:index' => '?',
            'App\\Controller\\PostController:remove' => '?',
            'App\\Controller\\PostController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
