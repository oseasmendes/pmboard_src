<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Projetosprodutosentregas cell
 */
class ProjetosprodutosentregasCell extends Cell
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

     public function getdescription($id) {
        $projetosprodutoentregas = TableRegistry::get('Projetosprodutosentregas');// or may use $this->loadModel('Users');
        $descricao = $projetosprodutoentregas->find()->where(['id' => $id ])->first()->descricao;
        $this->set('descricao', $descricao);
    //return $name; 
    }
}
