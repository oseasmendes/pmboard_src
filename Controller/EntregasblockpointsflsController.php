<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entregasblockpointsfls Controller
 *
 * @property \App\Model\Table\EntregasblockpointsflsTable $Entregasblockpointsfls
 *
 * @method \App\Model\Entity\Entregasblockpointsfl[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EntregasblockpointsflsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Entregasblockpoints']
        ];
        $entregasblockpointsfls = $this->paginate($this->Entregasblockpointsfls);

        $this->set(compact('entregasblockpointsfls'));
    }

    /**
     * View method
     *
     * @param string|null $id Entregasblockpointsfl id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entregasblockpointsfl = $this->Entregasblockpointsfls->get($id, [
            'contain' => ['Entregasblockpoints']
        ]);

        $this->set('entregasblockpointsfl', $entregasblockpointsfl);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entregasblockpointsfl = $this->Entregasblockpointsfls->newEntity();
        if ($this->request->is('post')) {
            $entregasblockpointsfl = $this->Entregasblockpointsfls->patchEntity($entregasblockpointsfl, $this->request->getData());
            if ($this->Entregasblockpointsfls->save($entregasblockpointsfl)) {
                $this->Flash->success(__('The entregasblockpointsfl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entregasblockpointsfl could not be saved. Please, try again.'));
        }
        $entregasblockpoints = $this->Entregasblockpointsfls->Entregasblockpoints->find('list', ['limit' => 200]);
        $this->set(compact('entregasblockpointsfl', 'entregasblockpoints'));
    }

    public function addid($id = null)
    {
        $entregasblockpointsfl = $this->Entregasblockpointsfls->newEntity();
        if ($this->request->is('post')) {
            $entregasblockpointsfl = $this->Entregasblockpointsfls->patchEntity($entregasblockpointsfl, $this->request->getData());
            $entregasblockpointsfl->entregasblockpoint_id = $id;
            if ($this->Entregasblockpointsfls->save($entregasblockpointsfl)) {
                $this->Flash->success(__('The entregasblockpointsfl has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Entregasblockpoints','action' => 'view',$id]);
            }
            $this->Flash->error(__('The entregasblockpointsfl could not be saved. Please, try again.'));
        }

        //$projetosprodutosentregas = $this->Entregasblockpoints->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('referencia' => 'asc')));

        
        $entregasblockpoints = $this->Entregasblockpointsfls->Entregasblockpoints->find('list',array('conditions'=>array('Entregasblockpoints.id'=>$id),'order' => array('descricao' => 'asc')));
        $this->set(compact('entregasblockpointsfl', 'entregasblockpoints'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Entregasblockpointsfl id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entregasblockpointsfl = $this->Entregasblockpointsfls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entregasblockpointsfl = $this->Entregasblockpointsfls->patchEntity($entregasblockpointsfl, $this->request->getData());
            if ($this->Entregasblockpointsfls->save($entregasblockpointsfl)) {
                $this->Flash->success(__('The entregasblockpointsfl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entregasblockpointsfl could not be saved. Please, try again.'));
        }
        $entregasblockpoints = $this->Entregasblockpointsfls->Entregasblockpoints->find('list', ['limit' => 200]);
        $this->set(compact('entregasblockpointsfl', 'entregasblockpoints'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Entregasblockpointsfl id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entregasblockpointsfl = $this->Entregasblockpointsfls->get($id);
        if ($this->Entregasblockpointsfls->delete($entregasblockpointsfl)) {
            $this->Flash->success(__('The entregasblockpointsfl has been deleted.'));
        } else {
            $this->Flash->error(__('The entregasblockpointsfl could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
