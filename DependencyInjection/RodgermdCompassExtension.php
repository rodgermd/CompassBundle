<?php

namespace Rodgermd\CompassBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

class RodgermdCompassExtension extends Extension
{
  public function load(array $configs, ContainerBuilder $container)
  {
    $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));

    foreach (array('services') as $basename) {
      $loader->load(sprintf('%s.yml', $basename));
    }

    $container->setParameter('rodgermd.compass.bundle_root', __DIR__ . '/../Resources/assets/compass');
  }
}
