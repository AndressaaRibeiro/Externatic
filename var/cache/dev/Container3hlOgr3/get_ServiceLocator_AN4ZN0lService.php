<?php

namespace Container3hlOgr3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AN4ZN0lService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aN4ZN0l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aN4ZN0l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'companyRepository' => ['privates', 'App\\Repository\\CompanyRepository', 'getCompanyRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'companyRepository' => 'App\\Repository\\CompanyRepository',
            'slugger' => '?',
        ]);
    }
}
