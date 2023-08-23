<?php

namespace ContainerCtxEr1q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_FileLinkFormatterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.file_link_formatter' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/Util/MakerFileLinkFormatter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';

        return $container->privates['maker.file_link_formatter'] = new \Symfony\Bundle\MakerBundle\Util\MakerFileLinkFormatter(($container->privates['debug.file_link_formatter'] ??= new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter($container->getEnv('default::SYMFONY_IDE'))));
    }
}
