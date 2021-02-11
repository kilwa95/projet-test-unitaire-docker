<?php

namespace ContainerUahn4R3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KiPnV2SService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KiPnV2S' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KiPnV2S'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'toDoListServiceRepository' => ['privates', 'App\\Repository\\ToDoListServiceRepository', 'getToDoListServiceRepositoryService', true],
        ], [
            'toDoListServiceRepository' => 'App\\Repository\\ToDoListServiceRepository',
        ]);
    }
}
