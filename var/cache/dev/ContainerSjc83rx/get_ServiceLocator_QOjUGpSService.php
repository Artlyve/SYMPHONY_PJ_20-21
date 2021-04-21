<?php

namespace ContainerSjc83rx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QOjUGpSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QOjUGpS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QOjUGpS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'users' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'users' => 'App\\Repository\\UserRepository',
        ]);
    }
}
