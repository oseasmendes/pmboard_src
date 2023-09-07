<?php
namespace App\View\Cell;
use Cake\View\Cell;
use Cake\ORM\TableRegistry;

/**
 * Projetosprodutos cell
 */
class ProjetosprodutosCell extends Cell
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

    public function getcode($id) {
        $projetosproduto = TableRegistry::get('Projetosprodutos');// or may use $this->loadModel('Users');
        $codenome = $projetosproduto->find()->where(['id' => $id ])->first()->codenome;
        $this->set('codename', $codenome);
    //return $name; 
    }
}
