<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Poolingsmembers Controller
 *
 * @property \App\Model\Table\PoolingsmembersTable $Poolingsmembers
 *
 * @method \App\Model\Entity\Poolingsmember[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PoolingsmembersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores', 'Poolings']
        ];
        $poolingsmembers = $this->paginate($this->Poolingsmembers);

        $this->set(compact('poolingsmembers'));
    }

    /**
     * View method
     *
     * @param string|null $id Poolingsmember id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $poolingsmember = $this->Poolingsmembers->get($id, [
            'contain' => ['Consultores', 'Poolings']
        ]);

        $this->set('poolingsmember', $poolingsmember);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $poolingsmember = $this->Poolingsmembers->newEntity();
        if ($this->request->is('post')) {
            $poolingsmember = $this->Poolingsmembers->patchEntity($poolingsmember, $this->request->getData());
            if ($this->Poolingsmembers->save($poolingsmember)) {
                $this->Flash->success(__('The poolingsmember has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poolingsmember could not be saved. Please, try again.'));
        }
        $consultores = $this->Poolingsmembers->Consultores->find('list', ['limit' => 200]);
        $poolings = $this->Poolingsmembers->Poolings->find('list', ['limit' => 200]);
        $this->set(compact('poolingsmember', 'consultores', 'poolings'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Poolingsmember id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $poolingsmember = $this->Poolingsmembers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $poolingsmember = $this->Poolingsmembers->patchEntity($poolingsmember, $this->request->getData());
            if ($this->Poolingsmembers->save($poolingsmember)) {
                $this->Flash->success(__('The poolingsmember has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poolingsmember could not be saved. Please, try again.'));
        }
        $consultores = $this->Poolingsmembers->Consultores->find('list', ['limit' => 200]);
        $poolings = $this->Poolingsmembers->Poolings->find('list', ['limit' => 200]);
        $this->set(compact('poolingsmember', 'consultores', 'poolings'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Poolingsmember id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $poolingsmember = $this->Poolingsmembers->get($id);
        if ($this->Poolingsmembers->delete($poolingsmember)) {
            $this->Flash->success(__('The poolingsmember has been deleted.'));
        } else {
            $this->Flash->error(__('The poolingsmember could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
