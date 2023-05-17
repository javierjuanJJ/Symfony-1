<?php

namespace Container0I2zxRx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeController_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.maker.auto_command.make_controller.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.maker.auto_command.make_controller.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:controller', [], 'Creates a new controller class', false, #[\Closure(name: 'maker.auto_command.make_controller', class: 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand')] function () use ($container): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
            return ($container->privates['maker.auto_command.make_controller'] ?? $container->load('getMaker_AutoCommand_MakeControllerService'));
        });
    }
}
