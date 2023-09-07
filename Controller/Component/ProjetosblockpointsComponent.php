<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Projetosblockpoints component
 */
class ProjetosblockpointsComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

     public function counterblockpoints() {

        $blocks = \Cake\ORM\TableRegistry::getTableLocator()->get('projetosblockpoints');

        $block = $blocks
                ->find()
                ->where(['resolvidoem' => null])
                ->count();
                
        $number = $block->count();

        return $number;

    }
}
