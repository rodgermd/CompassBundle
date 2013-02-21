<?php


namespace Rodgermd\CompassBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Rodgermd\CompassBundle\DependencyInjection\Compiler\AddLoadPathsCompilerPass;

class RodgermdCompassBundle extends Bundle
{
  public function build(ContainerBuilder $container)
  {
    parent::build($container);

    $container->addCompilerPass(new AddLoadPathsCompilerPass());
  }
}
