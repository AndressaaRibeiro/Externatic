<?php

namespace ContainerLrxx0Lj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompanyControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CompanyController' shared autowired service.
     *
     * @return \App\Controller\CompanyController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CompanyController.php';

        $container->services['App\\Controller\\CompanyController'] = $instance = new \App\Controller\CompanyController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\CompanyController', $container));

        return $instance;
    }
}
