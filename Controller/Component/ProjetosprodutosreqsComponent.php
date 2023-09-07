<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\ORM\TableRegistry;

/**
 * Projetosprodutosreqs component
 */
class ProjetosprodutosreqsComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function findId($id) {

        $reqs = \Cake\ORM\TableRegistry::getTableLocator()->get('projetosprodutosreqs');

        $req = $reqs
                ->find()
                ->where(['id' => $id])
                ->first();

        return $req->projetosproduto_id;

    }
}
