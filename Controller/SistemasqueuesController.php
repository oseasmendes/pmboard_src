<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasqueues Controller
 *
 * @property \App\Model\Table\SistemasqueuesTable $Sistemasqueues
 *
 * @method \App\Model\Entity\Sistemasqueue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasqueuesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $sistemasqueues = $this->paginate($this->Sistemasqueues);

        $this->set(compact('sistemasqueues'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasqueue id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasqueue = $this->Sistemasqueues->get($id, [
            'contain' => ['Sistemas']
        ]);

        $this->set('sistemasqueue', $sistemasqueue);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasqueue = $this->Sistemasqueues->newEntity();
        if ($this->request->is('post')) {
            $sistemasqueue = $this->Sistemasqueues->patchEntity($sistemasqueue, $this->request->getData());
            if ($this->Sistemasqueues->save($sistemasqueue)) {
                $this->Flash->success(__('The sistemasqueue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasqueue could not be saved. Please, try again.'));
        }
        $this->set(compact('sistemasqueue'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasqueue id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasqueue = $this->Sistemasqueues->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasqueue = $this->Sistemasqueues->patchEntity($sistemasqueue, $this->request->getData());
            if ($this->Sistemasqueues->save($sistemasqueue)) {
                $this->Flash->success(__('The sistemasqueue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasqueue could not be saved. Please, try again.'));
        }
        $this->set(compact('sistemasqueue'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasqueue id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasqueue = $this->Sistemasqueues->get($id);
        if ($this->Sistemasqueues->delete($sistemasqueue)) {
            $this->Flash->success(__('The sistemasqueue has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasqueue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
