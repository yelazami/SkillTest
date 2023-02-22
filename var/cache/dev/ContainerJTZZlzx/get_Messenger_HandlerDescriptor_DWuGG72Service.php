<?php

namespace ContainerJTZZlzx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_DWuGG72Service extends App_Shared_Infrastructure_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.DWuGG72' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/src/Shared/Application/Query/QueryHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Users/Application/Query/FindUserByEmail/FindUserByEmailQueryHandler.php';

        return $container->privates['.messenger.handler_descriptor.DWuGG72'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\Users\Application\Query\FindUserByEmail\FindUserByEmailQueryHandler(($container->privates['App\\Users\\Infrastructure\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService'))), []);
    }
}