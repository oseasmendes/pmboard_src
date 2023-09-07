<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregasopenpoints Controller
 *
 * @property \App\Model\Table\ProjetosentregasopenpointsTable $Projetosentregasopenpoints
 *
 * @method \App\Model\Entity\Projetosentregasopenpoint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasopenpointsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosentregasreqsrefs', 'Motivos']
        ];
        $projetosentregasopenpoints = $this->paginate($this->Projetosentregasopenpoints);

        $this->set(compact('projetosentregasopenpoints'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregasopenpoint id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregasopenpoint = $this->Projetosentregasopenpoints->get($id, [
            'contain' => ['Projetosentregasreqsrefs', 'Projetosentregasopprespostas', 'Motivos']
        ]);

        $this->set('projetosentregasopenpoint', $projetosentregasopenpoint);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosentregasopenpoint = $this->Projetosentregasopenpoints->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasopenpoint = $this->Projetosentregasopenpoints->patchEntity($projetosentregasopenpoint, $this->request->getData());
            if ($this->Projetosentregasopenpoints->save($projetosentregasopenpoint)) {
                $this->Flash->success(__('The projetosentregasopenpoint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregasopenpoint could not be saved. Please, try again.'));
        }
        $projetosentregasreqsreves = $this->Projetosentregasopenpoints->Projetosentregasreqsreves->find('list', ['limit' => 200]);
        $motivos = $this->Projetosentregasopenpoints->Motivos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasopenpoint', 'Projetosentregasreqsrefs', 'motivos'));
    }

    public function addid($id = null)
    {
        $projetosentregasopenpoint = $this->Projetosentregasopenpoints->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasopenpoint = $this->Projetosentregasopenpoints->patchEntity($projetosentregasopenpoint, $this->request->getData());
            $projetosentregasopenpoint->projetosentregasreqsref_id = $id;
            if ($this->Projetosentregasopenpoints->save($projetosentregasopenpoint)) {
                $this->Flash->success(__('The projetosentregasopenpoint has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosentregasopenpoint could not be saved. Please, try again.'));
        }
        $projetosentregasreqsrefs = $this->Projetosentregasopenpoints->Projetosentregasreqsrefs->find('list', array('conditions'=>array('Projetosentregasreqsrefs.id'=>$id),'order' => array('Projetosentregasreqsrefs.id' => 'asc')));
        $motivos = $this->Projetosentregasopenpoints->Motivos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasopenpoint', 'projetosentregasreqsrefs', 'motivos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregasopenpoint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregasopenpoint = $this->Projetosentregasopenpoints->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregasopenpoint = $this->Projetosentregasopenpoints->patchEntity($projetosentregasopenpoint, $this->request->getData());
            if ($this->Projetosentregasopenpoints->save($projetosentregasopenpoint)) {
                $this->Flash->success(__('The projetosentregasopenpoint has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregasopenpoint->projetosentregasreqsref_id]);
            }
            $this->Flash->error(__('The projetosentregasopenpoint could not be saved. Please, try again.'));
        }
        $projetosentregasreqsrefs = $this->Projetosentregasopenpoints->Projetosentregasreqsrefs->find('list', ['limit' => 200]);
        $motivos = $this->Projetosentregasopenpoints->Motivos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasopenpoint', 'projetosentregasreqsrefs', 'motivos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregasopenpoint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregasopenpoint = $this->Projetosentregasopenpoints->get($id);
        if ($this->Projetosentregasopenpoints->delete($projetosentregasopenpoint)) {
            $this->Flash->success(__('The projetosentregasopenpoint has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosentregasopenpoint could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregasopenpoint->projetosentregasreqsref_id]);
    }
}
