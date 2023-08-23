<?php

namespace ContainerIZ8ToY2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WTtCrJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.W_ttCrJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.W_ttCrJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'detail' => ['privates', '.errored..service_locator.W_ttCrJ.App\\Entity\\Detail', NULL, 'Cannot autowire service ".service_locator.W_ttCrJ": it needs an instance of "App\\Entity\\Detail" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'detail' => 'App\\Entity\\Detail',
            'entityManager' => '?',
        ]);
    }
}