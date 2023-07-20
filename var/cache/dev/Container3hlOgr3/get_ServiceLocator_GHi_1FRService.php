<?php

namespace Container3hlOgr3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GHi_1FRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GHi.1FR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GHi.1FR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'profil' => ['privates', '.errored..service_locator.GHi.1FR.App\\Entity\\Profil', NULL, 'Cannot autowire service ".service_locator.GHi.1FR": it needs an instance of "App\\Entity\\Profil" but this type has been excluded in "config/services.yaml".'],
            'profilRepository' => ['privates', 'App\\Repository\\ProfilRepository', 'getProfilRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'profil' => 'App\\Entity\\Profil',
            'profilRepository' => 'App\\Repository\\ProfilRepository',
            'slugger' => '?',
        ]);
    }
}
