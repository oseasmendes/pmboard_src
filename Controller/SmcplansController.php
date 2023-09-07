<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Smcplans Controller
 *
 * @property \App\Model\Table\SmcplansTable $Smcplans
 *
 * @method \App\Model\Entity\Smcplan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SmcplansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $smcplans = $this->paginate($this->Smcplans);

        $this->set(compact('smcplans'));
    }

    /**
     * View method
     *
     * @param string|null $id Smcplan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $smcplan = $this->Smcplans->get($id, [
            'contain' => []
        ]);

        $this->set('smcplan', $smcplan);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $smcplan = $this->Smcplans->newEntity();
        if ($this->request->is('post')) {
            $smcplan = $this->Smcplans->patchEntity($smcplan, $this->request->getData());
            if ($this->Smcplans->save($smcplan)) {
                $this->Flash->success(__('The smcplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The smcplan could not be saved. Please, try again.'));
        }
        $this->set(compact('smcplan'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Smcplan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $smcplan = $this->Smcplans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $smcplan = $this->Smcplans->patchEntity($smcplan, $this->request->getData());
            if ($this->Smcplans->save($smcplan)) {
                $this->Flash->success(__('The smcplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The smcplan could not be saved. Please, try again.'));
        }
        $this->set(compact('smcplan'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Smcplan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $smcplan = $this->Smcplans->get($id);
        if ($this->Smcplans->delete($smcplan)) {
            $this->Flash->success(__('The smcplan has been deleted.'));
        } else {
            $this->Flash->error(__('The smcplan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
