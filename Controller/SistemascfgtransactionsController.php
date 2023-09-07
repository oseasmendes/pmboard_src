<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemascfgtransactions Controller
 *
 * @property \App\Model\Table\SistemascfgtransactionsTable $Sistemascfgtransactions
 *
 * @method \App\Model\Entity\Sistemascfgtransaction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemascfgtransactionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas']
        ];
        $sistemascfgtransactions = $this->paginate($this->Sistemascfgtransactions);

        $this->set(compact('sistemascfgtransactions'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemascfgtransaction id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemascfgtransaction = $this->Sistemascfgtransactions->get($id, [
            'contain' => ['Sistemas', 'Sistemascfgintegrations']
        ]);

        $this->set('sistemascfgtransaction', $sistemascfgtransaction);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemascfgtransaction = $this->Sistemascfgtransactions->newEntity();
        if ($this->request->is('post')) {
            $sistemascfgtransaction = $this->Sistemascfgtransactions->patchEntity($sistemascfgtransaction, $this->request->getData());
            if ($this->Sistemascfgtransactions->save($sistemascfgtransaction)) {
                $this->Flash->success(__('The sistemascfgtransaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemascfgtransaction could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgtransactions->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgtransaction', 'sistemas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemascfgtransaction id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemascfgtransaction = $this->Sistemascfgtransactions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemascfgtransaction = $this->Sistemascfgtransactions->patchEntity($sistemascfgtransaction, $this->request->getData());
            if ($this->Sistemascfgtransactions->save($sistemascfgtransaction)) {
                $this->Flash->success(__('The sistemascfgtransaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemascfgtransaction could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgtransactions->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgtransaction', 'sistemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemascfgtransaction id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemascfgtransaction = $this->Sistemascfgtransactions->get($id);
        if ($this->Sistemascfgtransactions->delete($sistemascfgtransaction)) {
            $this->Flash->success(__('The sistemascfgtransaction has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemascfgtransaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
