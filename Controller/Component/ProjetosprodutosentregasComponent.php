<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\ORM\TableRegistry;

/**
 * Projetosprodutosentregas component
 */
class ProjetosprodutosentregasComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];



    public function findentregadescricao($id) {

        $entregas = \Cake\ORM\TableRegistry::getTableLocator()->get('projetosprodutosentregas');

        $entrega = $entregas
                ->find()
                ->where(['id' => $id])
                ->first();

        return $entrega->descricao;

    }
}
