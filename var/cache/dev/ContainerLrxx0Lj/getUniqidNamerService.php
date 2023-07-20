<?php

namespace ContainerLrxx0Lj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUniqidNamerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Vich\UploaderBundle\Naming\UniqidNamer' shared service.
     *
     * @return \Vich\UploaderBundle\Naming\UniqidNamer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/NamerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/Polyfill/FileExtensionTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Naming/UniqidNamer.php';

        return $container->services['Vich\\UploaderBundle\\Naming\\UniqidNamer'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
    }
}
