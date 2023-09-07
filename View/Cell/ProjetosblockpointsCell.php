<?php
namespace App\View\Cell;
use Cake\View\Cell;
use Cake\ORM\TableRegistry;

/**
 * Projetosblockpoints cell
 */
class ProjetosblockpointsCell extends Cell
{
    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Initialization logic run at the end of object construction.
     *
     * @return void
     */
    public function initialize()
    {
    }

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
    }

    public function getcounter() {
        $blockpointer = TableRegistry::get('Projetosblockpoints');// or may use $this->loadModel('Users');
        $blkcounter = $blockpointer->find()->where(['resolvidoem' => null ])->count();
        $this->set('blockcounter', $blkcounter);
    //return $name; 
    }
}
