<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fupqueuesdistributions Controller
 *
 * @property \App\Model\Table\FupqueuesdistributionsTable $Fupqueuesdistributions
 *
 * @method \App\Model\Entity\Fupqueuesdistribution[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FupqueuesdistributionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fupqueues', 'Participantes']
        ];
        $fupqueuesdistributions = $this->paginate($this->Fupqueuesdistributions);

        $this->set(compact('fupqueuesdistributions'));
    }

    /**
     * View method
     *
     * @param string|null $id Fupqueuesdistribution id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fupqueuesdistribution = $this->Fupqueuesdistributions->get($id, [
            'contain' => ['Fupqueues', 'Participantes']
        ]);

        $this->set('fupqueuesdistribution', $fupqueuesdistribution);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fupqueuesdistribution = $this->Fupqueuesdistributions->newEntity();
        if ($this->request->is('post')) {
            $fupqueuesdistribution = $this->Fupqueuesdistributions->patchEntity($fupqueuesdistribution, $this->request->getData());
            if ($this->Fupqueuesdistributions->save($fupqueuesdistribution)) {
                $this->Flash->success(__('The fupqueuesdistribution has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupqueuesdistribution could not be saved. Please, try again.'));
        }
        $fupqueues = $this->Fupqueuesdistributions->Fupqueues->find('list', ['limit' => 200]);
        $participantes = $this->Fupqueuesdistributions->Participantes->find('list',array('conditions'=>array('Participantes.empresa_id = '=>8),'order' => array('nome' => 'asc')));
        $this->set(compact('fupqueuesdistribution', 'fupqueues', 'participantes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fupqueuesdistribution id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fupqueuesdistribution = $this->Fupqueuesdistributions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fupqueuesdistribution = $this->Fupqueuesdistributions->patchEntity($fupqueuesdistribution, $this->request->getData());
            if ($this->Fupqueuesdistributions->save($fupqueuesdistribution)) {
                $this->Flash->success(__('The fupqueuesdistribution has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupqueuesdistribution could not be saved. Please, try again.'));
        }
        $fupqueues = $this->Fupqueuesdistributions->Fupqueues->find('list', ['limit' => 200]);
        $participantes = $this->Fupqueuesdistributions->Participantes->find('list',array('conditions'=>array('Participantes.empresa_id = '=>8),'order' => array('nome' => 'asc')));
        $this->set(compact('fupqueuesdistribution', 'fupqueues', 'participantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fupqueuesdistribution id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fupqueuesdistribution = $this->Fupqueuesdistributions->get($id);
        if ($this->Fupqueuesdistributions->delete($fupqueuesdistribution)) {
            $this->Flash->success(__('The fupqueuesdistribution has been deleted.'));
        } else {
            $this->Flash->error(__('The fupqueuesdistribution could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
