<?php

namespace Container2v0oatN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TiqJ56_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tiqJ56.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tiqJ56.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'animalsRepository' => ['privates', 'App\\Repository\\AnimalsRepository', 'getAnimalsRepositoryService', true],
        ], [
            'animalsRepository' => 'App\\Repository\\AnimalsRepository',
        ]);
    }
}