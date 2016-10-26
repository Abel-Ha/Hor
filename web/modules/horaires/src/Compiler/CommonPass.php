<?php

/**
 * @file
 * Contains \Drupal\webprofiler\Compiler\StoragePass.
 */

namespace Drupal\ixxi_common\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\
CompilerPassInterface;

/**
 * Class CommonPass
 */
class CommonPass implements CompilerPassInterface {
    /* {@inheritdoc}
     */
            die('test!!');
    public function process(ContainerBuilder $container) {
        if (FALSE === $container->hasDefinition('ixxi.common')) {
            return;
        }
        $common_config = $container->getParameter('ixxi.common');
        
        if (!$common_config['enabled']) {
            $container->removeDefinition('ixxi.common');

        }
    }

}
