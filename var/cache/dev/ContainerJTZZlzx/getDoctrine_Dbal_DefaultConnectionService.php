<?php

namespace ContainerJTZZlzx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Dbal_DefaultConnectionService extends App_Shared_Infrastructure_KernelDevDebugContainer
{
    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Connection.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/dama/doctrine-test-bundle/src/DAMA/DoctrineTestBundle/Doctrine/DBAL/StaticConnectionFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Driver/Middleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Middleware/ConnectionNameAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Middleware/DebugMiddleware.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Middleware/Debug/DebugDataHolder.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Middleware/BacktraceDebugDataHolder.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';

        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware(new \Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder([]), ($container->privates['debug.stopwatch'] ?? ($container->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
        $b->setConnectionName('default');

        $a->setMiddlewares([0 => $b]);

        return $container->services['doctrine.dbal.default_connection'] = (new \DAMA\DoctrineTestBundle\Doctrine\DBAL\StaticConnectionFactory(new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($container->parameters['doctrine.dbal.connection_factory.types'])))->createConnection(['url' => $container->getEnv('resolve:DATABASE_URL'), 'driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => [], 'dama.keep_static' => true, 'dama.connection_name' => 'default'], $a, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Shared\\Infrastructure\\Doctrine\\DomainEventSubscriber' => ['privates', 'App\\Shared\\Infrastructure\\Doctrine\\DomainEventSubscriber', 'getDomainEventSubscriberService', true],
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService', true],
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService', true],
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => ['privates', 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 'getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService', true],
            'doctrine.orm.messenger.doctrine_schema_subscriber' => ['privates', 'doctrine.orm.messenger.doctrine_schema_subscriber', 'getDoctrine_Orm_Messenger_DoctrineSchemaSubscriberService', true],
        ], [
            'App\\Shared\\Infrastructure\\Doctrine\\DomainEventSubscriber' => '?',
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
            'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber' => '?',
            'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber' => '?',
            'doctrine.orm.messenger.doctrine_schema_subscriber' => '?',
        ]), [0 => 'App\\Shared\\Infrastructure\\Doctrine\\DomainEventSubscriber', 1 => 'doctrine.orm.messenger.doctrine_schema_subscriber', 2 => 'doctrine.orm.listeners.doctrine_dbal_cache_adapter_schema_subscriber', 3 => 'doctrine.orm.listeners.doctrine_token_provider_schema_subscriber', 4 => [0 => [0 => 'loadClassMetadata'], 1 => 'doctrine.orm.default_listeners.attach_entity_listeners']]), []);
    }
}