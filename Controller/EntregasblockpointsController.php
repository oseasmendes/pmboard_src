<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entregasblockpoints Controller
 *
 * @property \App\Model\Table\EntregasblockpointsTable $Entregasblockpoints
 *
 * @method \App\Model\Entity\Entregasblockpoint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EntregasblockpointsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosentregas', 'Statusfuncionals', 'Consultores']
        ];
        $entregasblockpoints = $this->paginate($this->Entregasblockpoints);

        $this->set(compact('entregasblockpoints'));
    }

    /**
     * View method
     *
     * @param string|null $id Entregasblockpoint id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entregasblockpoint = $this->Entregasblockpoints->get($id, [
            'contain' => ['Projetosprodutosentregas', 'Statusfuncionals', 'Consultores', 'Entregasblockpointsfls']
        ]);

        $this->set('entregasblockpoint', $entregasblockpoint);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entregasblockpoint = $this->Entregasblockpoints->newEntity();
        if ($this->request->is('post')) {
            $entregasblockpoint = $this->Entregasblockpoints->patchEntity($entregasblockpoint, $this->request->getData());
            if ($this->Entregasblockpoints->save($entregasblockpoint)) {
                $this->Flash->success(__('The entregasblockpoint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entregasblockpoint could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Entregasblockpoints->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Entregasblockpoints->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Entregasblockpoints->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('entregasblockpoint', 'projetosprodutosentregas', 'statusfuncionals', 'consultores'));
    }

    public function addid($id = null)
    {
        $entregasblockpoint = $this->Entregasblockpoints->newEntity();
        if ($this->request->is('post')) {
            $entregasblockpoint = $this->Entregasblockpoints->patchEntity($entregasblockpoint, $this->request->getData());
            $entregasblockpoint->projetosprodutosentrega_id = $id;
            if ($this->Entregasblockpoints->save($entregasblockpoint)) {
                $this->Flash->success(__('The entregasblockpoint has been saved.'));

                return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$id]);
                //return $this->redirect(['action' => 'index']);

            }
            $this->Flash->error(__('The entregasblockpoint could not be saved. Please, try again.'));
        }

        //$projetosprodutos = $this->Projetosprodutosentregas->Projetosprodutos->find('list',array('conditions'=>array('Projetosprodutos.id'=>$id),'order' => array('produto' => 'asc')));

        $projetosprodutosentregas = $this->Entregasblockpoints->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('referencia' => 'asc')));
        $statusfuncionals = $this->Entregasblockpoints->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Entregasblockpoints->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('entregasblockpoint', 'projetosprodutosentregas', 'statusfuncionals', 'consultores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Entregasblockpoint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entregasblockpoint = $this->Entregasblockpoints->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entregasblockpoint = $this->Entregasblockpoints->patchEntity($entregasblockpoint, $this->request->getData());
            if ($this->Entregasblockpoints->save($entregasblockpoint)) {
                $this->Flash->success(__('The entregasblockpoint has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$entregasblockpoint->projetosprodutosentrega_id]);
            }
            $this->Flash->error(__('The entregasblockpoint could not be saved. Please, try again.'));
        }
        
        $projetosprodutosentregas = $this->Entregasblockpoints->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$entregasblockpoint->projetosprodutosentrega_id),'order' => array('referencia' => 'asc')));
        //$projetosprodutosentregas = $this->Entregasblockpoints->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Entregasblockpoints->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Entregasblockpoints->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('entregasblockpoint', 'projetosprodutosentregas', 'statusfuncionals', 'consultores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Entregasblockpoint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entregasblockpoint = $this->Entregasblockpoints->get($id);
        $entregaid = $entregasblockpoint->projetosprodutosentrega_id;
        if ($this->Entregasblockpoints->delete($entregasblockpoint)) {
            $this->Flash->success(__('The entregasblockpoint has been deleted.'));
        } else {
            $this->Flash->error(__('The entregasblockpoint could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$entregaid]);
    }
}
