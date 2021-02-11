<?php

namespace ContainerUnrpBuh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GNEThUService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.GN_EThU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GN_EThU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'itemRepository' => ['privates', 'App\\Repository\\ItemRepository', 'getItemRepositoryService', true],
            'itemService' => ['privates', 'App\\Service\\ItemService', 'getItemServiceService', true],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'toDoListServiceRepository' => ['privates', 'App\\Repository\\ToDoListServiceRepository', 'getToDoListServiceRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'itemRepository' => 'App\\Repository\\ItemRepository',
            'itemService' => 'App\\Service\\ItemService',
            'mailer' => '?',
            'toDoListServiceRepository' => 'App\\Repository\\ToDoListServiceRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
