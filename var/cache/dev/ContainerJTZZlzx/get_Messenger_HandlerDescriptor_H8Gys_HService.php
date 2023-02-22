<?php

namespace ContainerJTZZlzx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_H8Gys_HService extends App_Shared_Infrastructure_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.H8Gys.h' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/src/Shared/Domain/Event/EventHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Testing/Infrastructure/EventHandler/TestingSessionCompletedEventHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Shared/Application/Query/QueryBusInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/HandleTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Shared/Infrastructure/Bus/QueryBus.php';
        include_once \dirname(__DIR__, 4).'/src/Testing/Infrastructure/Adapter/SkillsAdapter.php';
        include_once \dirname(__DIR__, 4).'/src/Skills/Infrastructure/Api.php';
        include_once \dirname(__DIR__, 4).'/src/Shared/Application/Command/CommandBusInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Shared/Infrastructure/Bus/CommandBus.php';

        return $container->privates['.messenger.handler_descriptor.H8Gys.h'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\Testing\Infrastructure\EventHandler\TestingSessionCompletedEventHandler(new \App\Shared\Infrastructure\Bus\QueryBus(($container->privates['query.bus'] ?? $container->load('getQuery_BusService'))), new \App\Testing\Infrastructure\Adapter\SkillsAdapter(new \App\Skills\Infrastructure\Api(new \App\Shared\Infrastructure\Bus\CommandBus(($container->services['messenger.default_bus'] ?? $container->load('getMessenger_DefaultBusService')))))), []);
    }
}