<?php

namespace ContainerKQRltRy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Kl44DKAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Kl44DKA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Kl44DKA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'products' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
            'test' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.Kl44DKA.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.Kl44DKA": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
        ], [
            'products' => 'App\\Repository\\ProduitRepository',
            'test' => 'App\\Repository\\PanierRepository',
            'user' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ]);
    }
}