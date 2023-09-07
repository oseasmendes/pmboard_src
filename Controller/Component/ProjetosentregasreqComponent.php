<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Projetosentregasreq component
 */
class ProjetosentregasreqComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    

    public function ProjetosEntregasReqsFindById($id) {

        $reqs = \Cake\ORM\TableRegistry::getTableLocator()->get('projetosentregasreqs');

        $req = $reqs
                ->find()
                ->where(['id' => $id])
                ->first();

        return $req->descricao;

    }
}
