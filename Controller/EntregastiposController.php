<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entregastipos Controller
 *
 * @property \App\Model\Table\EntregastiposTable $Entregastipos
 *
 * @method \App\Model\Entity\Entregastipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EntregastiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $entregastipos = $this->paginate($this->Entregastipos);

        $this->set(compact('entregastipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Entregastipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entregastipo = $this->Entregastipos->get($id, [
            'contain' => []
        ]);

        $this->set('entregastipo', $entregastipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entregastipo = $this->Entregastipos->newEntity();
        if ($this->request->is('post')) {
            $entregastipo = $this->Entregastipos->patchEntity($entregastipo, $this->request->getData());
            if ($this->Entregastipos->save($entregastipo)) {
                $this->Flash->success(__('The entregastipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entregastipo could not be saved. Please, try again.'));
        }
        $this->set(compact('entregastipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Entregastipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entregastipo = $this->Entregastipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entregastipo = $this->Entregastipos->patchEntity($entregastipo, $this->request->getData());
            if ($this->Entregastipos->save($entregastipo)) {
                $this->Flash->success(__('The entregastipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entregastipo could not be saved. Please, try again.'));
        }
        $this->set(compact('entregastipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Entregastipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entregastipo = $this->Entregastipos->get($id);
        if ($this->Entregastipos->delete($entregastipo)) {
            $this->Flash->success(__('The entregastipo has been deleted.'));
        } else {
            $this->Flash->error(__('The entregastipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
