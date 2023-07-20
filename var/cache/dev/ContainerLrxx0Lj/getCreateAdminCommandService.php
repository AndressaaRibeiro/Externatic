<?php

namespace ContainerLrxx0Lj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateAdminCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\CreateAdminCommand' shared autowired service.
     *
     * @return \App\Command\CreateAdminCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/CreateAdminCommand.php';

        $container->privates['App\\Command\\CreateAdminCommand'] = $instance = new \App\Command\CreateAdminCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['security.user_password_hasher'] ?? $container->load('getSecurity_UserPasswordHasherService')));

        $instance->setName('app:create-admin');
        $instance->setDescription('create a new admin');

        return $instance;
    }
}
