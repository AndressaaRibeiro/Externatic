<?php

namespace Container3hlOgr3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCompanyCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\CompanyCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\CompanyCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/CompanyCrudController.php';

        $container->services['App\\Controller\\Admin\\CompanyCrudController'] = $instance = new \App\Controller\Admin\CompanyCrudController();

        $instance->setContainer(($container->privates['.service_locator.5eP_qL9'] ?? $container->load('get_ServiceLocator_5ePQL9Service'))->withContext('App\\Controller\\Admin\\CompanyCrudController', $container));

        return $instance;
    }
}
