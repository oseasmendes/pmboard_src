<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;

use Cake\View\CellTrait;



/**
 * Projetosentregasreqsrefs Controller
 *
 * @property \App\Model\Table\ProjetosentregasreqsrefsTable $Projetosentregasreqsrefs
 *
 * @method \App\Model\Entity\Projetosentregasreqsref[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasreqsrefsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosentregasreqs', 'Requisitostipos', 'Statusfuncionals']
        ];
        $projetosentregasreqsrefs = $this->paginate($this->Projetosentregasreqsrefs);

        $this->set(compact('projetosentregasreqsrefs'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregasreqsref id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregasreqsref = $this->Projetosentregasreqsrefs->get($id, [
            'contain' => [
                'Projetosentregasreqs', 
                'Requisitostipos', 
                'Statusfuncionals', 
                'Motivos', 
                'Projetosentregasreqsscripts',
                'Projetosentregaschanges',
                'Projetosentregasopenpoints',
                'Projetosentregasreqsrefsimgs',
                'Projetosentregasreqsrefsents'=> [
                    'sort' => ['Projetosentregasreqsrefsents.ordem' => 'asc']]]
        ]);

        $this->set('projetosentregasreqsref', $projetosentregasreqsref);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosentregasreqsref = $this->Projetosentregasreqsrefs->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasreqsref = $this->Projetosentregasreqsrefs->patchEntity($projetosentregasreqsref, $this->request->getData());
            if ($this->Projetosentregasreqsrefs->save($projetosentregasreqsref)) {
                $this->Flash->success(__('The projetosentregasreqsref has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregasreqsref could not be saved. Please, try again.'));
        }
        $projetosentregasreqs = $this->Projetosentregasreqsrefs->Projetosentregasreqs->find('list', ['limit' => 200]);
        $requisitostipos = $this->Projetosentregasreqsrefs->Requisitostipos->find('list', ['limit' => 200]);
        $motivos = $this->Projetosentregasreqsrefs->Motivos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosentregasreqsrefs->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreqsref', 'projetosentregasreqs', 'requisitostipos', 'statusfuncionals','motivos'));
    }

    public function addid($id = null)
    {
        $projetosentregasreqsref = $this->Projetosentregasreqsrefs->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasreqsref = $this->Projetosentregasreqsrefs->patchEntity($projetosentregasreqsref, $this->request->getData());
            $projetosentregasreqsref->projetosentregasreq_id = $id;
            if ($this->Projetosentregasreqsrefs->save($projetosentregasreqsref)) {
                $this->Flash->success(__('The projetosentregasreqsref has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqs','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetosentregasreqsref could not be saved. Please, try again.'));
        }
        //$projetosentregasreqs = $this->Projetosentregasreqsrefs->Projetosentregasreqs->find('list', ['limit' => 200]);
        
        $projetosentregasreqs = $this->Projetosentregasreqsrefs->Projetosentregasreqs->find('list', array('conditions'=>array('Projetosentregasreqs.id'=>$id),'order' => array('Projetosentregasreqs.id' => 'desc')));
        $reqreferences = $this->Projetosentregasreqsrefs->find('list', array('conditions'=>array('Projetosentregasreqsrefs.projetosentregasreq_id'=>$id),'order' => array('Projetosentregasreqsrefs.ordem' => 'asc')));
        $requisitostipos = $this->Projetosentregasreqsrefs->Requisitostipos->find('list', ['limit' => 200]);
        $motivos = $this->Projetosentregasreqsrefs->Motivos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosentregasreqsrefs->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreqsref', 'projetosentregasreqs', 'requisitostipos', 'statusfuncionals','motivos','reqreferences'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregasreqsref id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregasreqsref = $this->Projetosentregasreqsrefs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregasreqsref = $this->Projetosentregasreqsrefs->patchEntity($projetosentregasreqsref, $this->request->getData());
            
            if ($this->Projetosentregasreqsrefs->save($projetosentregasreqsref)) {
                $this->Flash->success(__('The projetosentregasreqsref has been saved.'));

                $reg = $id;

                $caminho = WWW_ROOT.DS.'img'.DS.'entregasreqsrefsimgs'.DS.$reg;

                $dir = new folder();
                if ($dir->create($caminho,true,0755)) {
                    $this->Flash->success('Pasta de Imagem Criada  com sucesso');
                }




                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqs','action' => 'view',$projetosentregasreqsref->projetosentregasreq_id]);
            }
            $this->Flash->error(__('The projetosentregasreqsref could not be saved. Please, try again.'));
        }
        $projetosentregasreqs = $this->Projetosentregasreqsrefs->Projetosentregasreqs->find('list', ['limit' => 200]);
        $reqreferences = $this->Projetosentregasreqsrefs->find('list', array('conditions'=>array('Projetosentregasreqsrefs.projetosentregasreq_id'=>$projetosentregasreqsref->projetosentregasreq_id),'order' => array('Projetosentregasreqsrefs.ordem' => 'asc')));
        $requisitostipos = $this->Projetosentregasreqsrefs->Requisitostipos->find('list', ['limit' => 200]);
        $motivos = $this->Projetosentregasreqsrefs->Motivos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosentregasreqsrefs->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreqsref', 'projetosentregasreqs', 'requisitostipos', 'statusfuncionals','motivos','reqreferences'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregasreqsref id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregasreqsref = $this->Projetosentregasreqsrefs->get($id);
        if ($this->Projetosentregasreqsrefs->delete($projetosentregasreqsref)) {
            $this->Flash->success(__('The projetosentregasreqsref has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosentregasreqsref could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Projetosentregasreqs','action' => 'view',$projetosentregasreqsref->projetosentregasreq_id]);
    }
}
