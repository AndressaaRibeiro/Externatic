<?php

namespace Container3hlOgr3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A1Kn99RService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a1Kn99R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a1Kn99R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'profil' => ['privates', '.errored..service_locator.a1Kn99R.App\\Entity\\Profil', NULL, 'Cannot autowire service ".service_locator.a1Kn99R": it needs an instance of "App\\Entity\\Profil" but this type has been excluded in "config/services.yaml".'],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'profil' => 'App\\Entity\\Profil',
            'slugger' => '?',
        ]);
    }
}