<?php

namespace ContainerJTZZlzx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Z4YlUbuService extends App_Shared_Infrastructure_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.z4YlUbu' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/src/Shared/Application/Query/QueryHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Testing/Application/Query/FindTestingSession/FindTestingSessionQueryHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Testing/Domain/Repository/TestingSessionRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Testing/Infrastructure/Repository/TestingSessionRepository.php';

        return $container->privates['.messenger.handler_descriptor.z4YlUbu'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\Testing\Application\Query\FindTestingSession\FindTestingSessionQueryHandler(new \App\Testing\Infrastructure\Repository\TestingSessionRepository()), []);
    }
}
