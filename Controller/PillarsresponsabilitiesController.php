<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pillarsresponsabilities Controller
 *
 * @property \App\Model\Table\PillarsresponsabilitiesTable $Pillarsresponsabilities
 *
 * @method \App\Model\Entity\Pillarsresponsability[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PillarsresponsabilitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pillarsresponsabilities = $this->paginate($this->Pillarsresponsabilities);

        $this->set(compact('pillarsresponsabilities'));
    }

    /**
     * View method
     *
     * @param string|null $id Pillarsresponsability id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pillarsresponsability = $this->Pillarsresponsabilities->get($id, [
            'contain' => []
        ]);

        $this->set('pillarsresponsability', $pillarsresponsability);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pillarsresponsability = $this->Pillarsresponsabilities->newEntity();
        if ($this->request->is('post')) {
            $pillarsresponsability = $this->Pillarsresponsabilities->patchEntity($pillarsresponsability, $this->request->getData());
            if ($this->Pillarsresponsabilities->save($pillarsresponsability)) {
                $this->Flash->success(__('The pillarsresponsability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pillarsresponsability could not be saved. Please, try again.'));
        }
        $this->set(compact('pillarsresponsability'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pillarsresponsability id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pillarsresponsability = $this->Pillarsresponsabilities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pillarsresponsability = $this->Pillarsresponsabilities->patchEntity($pillarsresponsability, $this->request->getData());
            if ($this->Pillarsresponsabilities->save($pillarsresponsability)) {
                $this->Flash->success(__('The pillarsresponsability has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pillarsresponsability could not be saved. Please, try again.'));
        }
        $this->set(compact('pillarsresponsability'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pillarsresponsability id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pillarsresponsability = $this->Pillarsresponsabilities->get($id);
        if ($this->Pillarsresponsabilities->delete($pillarsresponsability)) {
            $this->Flash->success(__('The pillarsresponsability has been deleted.'));
        } else {
            $this->Flash->error(__('The pillarsresponsability could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
