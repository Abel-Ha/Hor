<?php

/**
 * @file
 * Contains \Drupal\horaires\Controller\HorairesPageController class.
 */

namespace Drupal\horaires\Controller;

use Drupal\Core\Controller\ControllerBase;
use Ixxi\Common\Model\Network;

/**
 * Returns responses for My Module module.
 */
class HorairesPageController extends ControllerBase {

    /**
     * Returns markup for the custom page
     */
    public function customPage() {
        $ixxi_common = \Drupal::service('ixxi.common');

        $stopPoint = (new Network('rer'))->createLine('A')->createStopPoint('Auber');
        $result = $ixxi_common->getSchedule($stopPoint);

        return [
            '#markup' => t('Horaires page' . print_r($result,true)),
          
        ];
    }

}
