<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fupqueueslists Controller
 *
 * @property \App\Model\Table\FupqueueslistsTable $Fupqueueslists
 *
 * @method \App\Model\Entity\Fupqueueslist[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FupqueueslistsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fupqueues']
        ];
        $fupqueueslists = $this->paginate($this->Fupqueueslists);

        $this->set(compact('fupqueueslists'));
    }

    /**
     * View method
     *
     * @param string|null $id Fupqueueslist id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fupqueueslist = $this->Fupqueueslists->get($id, [
            'contain' => ['Fupqueues']
        ]);

        $this->set('fupqueueslist', $fupqueueslist);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fupqueueslist = $this->Fupqueueslists->newEntity();
        if ($this->request->is('post')) {
            $fupqueueslist = $this->Fupqueueslists->patchEntity($fupqueueslist, $this->request->getData());
            if ($this->Fupqueueslists->save($fupqueueslist)) {
                $this->Flash->success(__('The fupqueueslist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupqueueslist could not be saved. Please, try again.'));
        }
        $fupqueues = $this->Fupqueueslists->Fupqueues->find('list', ['limit' => 200]);
        $this->set(compact('fupqueueslist', 'fupqueues'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fupqueueslist id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fupqueueslist = $this->Fupqueueslists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fupqueueslist = $this->Fupqueueslists->patchEntity($fupqueueslist, $this->request->getData());
            if ($this->Fupqueueslists->save($fupqueueslist)) {
                $this->Flash->success(__('The fupqueueslist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupqueueslist could not be saved. Please, try again.'));
        }
        $fupqueues = $this->Fupqueueslists->Fupqueues->find('list', ['limit' => 200]);
        $this->set(compact('fupqueueslist', 'fupqueues'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fupqueueslist id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fupqueueslist = $this->Fupqueueslists->get($id);
        if ($this->Fupqueueslists->delete($fupqueueslist)) {
            $this->Flash->success(__('The fupqueueslist has been deleted.'));
        } else {
            $this->Flash->error(__('The fupqueueslist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
