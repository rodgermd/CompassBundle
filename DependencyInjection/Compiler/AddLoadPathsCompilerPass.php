<?php

namespace Rodgermd\CompassBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class AddLoadPathsCompilerPass implements CompilerPassInterface
{
  public function process(ContainerBuilder $container)
  {
    $path = __DIR__ . '/Resources/assets/compass';

    $compass_service_load_paths = $container->getParameter('assetic.filter.compass.load_paths');
    $compass_service_load_paths[] = $path;
    $container->setParameter('assetic.filter.compass.load_paths', $compass_service_load_paths);
  }
}
