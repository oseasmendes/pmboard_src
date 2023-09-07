<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fupqueues Controller
 *
 * @property \App\Model\Table\FupqueuesTable $Fupqueues
 *
 * @method \App\Model\Entity\Fupqueue[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FupqueuesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $this->paginate = [         
             'order' => ['improvements' => 'asc']

       ];

        $fupqueues = $this->paginate($this->Fupqueues);

        $this->set(compact('fupqueues'));
    }

    /**
     * View method
     *
     * @param string|null $id Fupqueue id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fupqueue = $this->Fupqueues->get($id, [
            'contain' => ['Fupagendas', 'Fupqueuesdistributions', 'Projetosprodutos']
        ]);

        $this->set('fupqueue', $fupqueue);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fupqueue = $this->Fupqueues->newEntity();
        if ($this->request->is('post')) {
            $fupqueue = $this->Fupqueues->patchEntity($fupqueue, $this->request->getData());
            if ($this->Fupqueues->save($fupqueue)) {
                $this->Flash->success(__('The fupqueue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupqueue could not be saved. Please, try again.'));
        }
        $this->set(compact('fupqueue'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fupqueue id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fupqueue = $this->Fupqueues->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fupqueue = $this->Fupqueues->patchEntity($fupqueue, $this->request->getData());
            if ($this->Fupqueues->save($fupqueue)) {
                $this->Flash->success(__('The fupqueue has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupqueue could not be saved. Please, try again.'));
        }
        $this->set(compact('fupqueue'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fupqueue id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fupqueue = $this->Fupqueues->get($id);
        if ($this->Fupqueues->delete($fupqueue)) {
            $this->Flash->success(__('The fupqueue has been deleted.'));
        } else {
            $this->Flash->error(__('The fupqueue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
