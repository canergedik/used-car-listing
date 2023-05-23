<?php

namespace Container6Ke7Kn0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\EventSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\EventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'EventSubscriber.php';

        $a = ($container->privates['twig'] ?? $container->load('getTwigService'));

        if (isset($container->privates['App\\EventSubscriber\\EventSubscriber'])) {
            return $container->privates['App\\EventSubscriber\\EventSubscriber'];
        }

        return $container->privates['App\\EventSubscriber\\EventSubscriber'] = new \App\EventSubscriber\EventSubscriber($a, ($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}