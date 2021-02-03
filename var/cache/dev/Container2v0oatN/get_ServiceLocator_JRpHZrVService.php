<?php

namespace Container2v0oatN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JRpHZrVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jRpHZrV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jRpHZrV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actuality' => ['privates', '.errored..service_locator.jRpHZrV.App\\Entity\\Actuality', NULL, 'Cannot autowire service ".service_locator.jRpHZrV": it references class "App\\Entity\\Actuality" but no such service exists.'],
        ], [
            'actuality' => 'App\\Entity\\Actuality',
        ]);
    }
}