<?php

namespace ContainerJTZZlzx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessListenerService extends App_Shared_Infrastructure_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/FirewallListenerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AccessListener.php';

        return $container->privates['security.access_listener'] = new \Symfony\Component\Security\Http\Firewall\AccessListener(($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['debug.security.access.decision_manager'] ?? $container->load('getDebug_Security_Access_DecisionManagerService')), ($container->privates['security.access_map'] ?? $container->load('getSecurity_AccessMapService')), false);
    }
}
