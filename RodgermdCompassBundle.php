<?php


namespace Rodgermd\CompassBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Rodgermd\CompassBundle\DependencyInjection\Compiler\AddLoadPathsCompilerPass;

/**
 * Class RodgermdCompassBundle
 * Bundle definition
 *
 * @package Rodgermd\CompassBundle
 */
class RodgermdCompassBundle extends Bundle
{
    /**
     * On build
     *
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new AddLoadPathsCompilerPass());
    }
}
