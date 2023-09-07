<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosblockpointsfls Controller
 *
 * @property \App\Model\Table\ProjetosblockpointsflsTable $Projetosblockpointsfls
 *
 * @method \App\Model\Entity\Projetosblockpointsfl[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosblockpointsflsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosblockpoints']
        ];
        $projetosblockpointsfls = $this->paginate($this->Projetosblockpointsfls);

        $this->set(compact('projetosblockpointsfls'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosblockpointsfl id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosblockpointsfl = $this->Projetosblockpointsfls->get($id, [
            'contain' => ['Projetosblockpoints']
        ]);

        $this->set('projetosblockpointsfl', $projetosblockpointsfl);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosblockpointsfl = $this->Projetosblockpointsfls->newEntity();
        if ($this->request->is('post')) {
            $projetosblockpointsfl = $this->Projetosblockpointsfls->patchEntity($projetosblockpointsfl, $this->request->getData());
            if ($this->Projetosblockpointsfls->save($projetosblockpointsfl)) {
                $this->Flash->success(__('The projetosblockpointsfl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosblockpointsfl could not be saved. Please, try again.'));
        }
        $projetosblockpoints = $this->Projetosblockpointsfls->Projetosblockpoints->find('list', ['limit' => 200]);
        $this->set(compact('projetosblockpointsfl', 'projetosblockpoints'));
    }

     public function addid($id = null)
    {
        $projetosblockpointsfl = $this->Projetosblockpointsfls->newEntity();
        if ($this->request->is('post')) {
            $projetosblockpointsfl = $this->Projetosblockpointsfls->patchEntity($projetosblockpointsfl, $this->request->getData());
            $projetosblockpointsfl->projetosblockpoint_id = $id;
            if ($this->Projetosblockpointsfls->save($projetosblockpointsfl)) {
                $this->Flash->success(__('The projetosblockpointsfl has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosblockpoints','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetosblockpointsfl could not be saved. Please, try again.'));
        }
        $projetosblockpoints = $this->Projetosblockpointsfls->Projetosblockpoints->find('list', ['limit' => 200]);
        $this->set(compact('projetosblockpointsfl', 'projetosblockpoints'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosblockpointsfl id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosblockpointsfl = $this->Projetosblockpointsfls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosblockpointsfl = $this->Projetosblockpointsfls->patchEntity($projetosblockpointsfl, $this->request->getData());
            $blockid = $projetosblockpointsfl->projetosblockpoint_id;

            if ($this->Projetosblockpointsfls->save($projetosblockpointsfl)) {
                $this->Flash->success(__('The projetosblockpointsfl has been saved.'));

            //    return $this->redirect(['action' => 'index']);
            return $this->redirect(['controller' => 'Projetosblockpoints','action' => 'view',$blockid]);
            }
            $this->Flash->error(__('The projetosblockpointsfl could not be saved. Please, try again.'));
        }
        $projetosblockpoints = $this->Projetosblockpointsfls->Projetosblockpoints->find('list', ['limit' => 200]);
        $this->set(compact('projetosblockpointsfl', 'projetosblockpoints'));
    }

    public function editar($id = null)
    {
        $projetosblockpointsfl = $this->Projetosblockpointsfls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosblockpointsfl = $this->Projetosblockpointsfls->patchEntity($projetosblockpointsfl, $this->request->getData());
            if ($this->Projetosblockpointsfls->save($projetosblockpointsfl)) {
                $this->Flash->success(__('The projetosblockpointsfl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosblockpointsfl could not be saved. Please, try again.'));
        }
        $projetosblockpoints = $this->Projetosblockpointsfls->Projetosblockpoints->find('list', ['limit' => 200]);
        $this->set(compact('projetosblockpointsfl', 'projetosblockpoints'));
    }
    /**
     * Delete method
     *
     * @param string|null $id Projetosblockpointsfl id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosblockpointsfl = $this->Projetosblockpointsfls->get($id);
        if ($this->Projetosblockpointsfls->delete($projetosblockpointsfl)) {
            $this->Flash->success(__('The projetosblockpointsfl has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosblockpointsfl could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
