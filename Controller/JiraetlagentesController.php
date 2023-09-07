<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jiraetlagentes Controller
 *
 * @property \App\Model\Table\JiraetlagentesTable $Jiraetlagentes
 *
 * @method \App\Model\Entity\Jiraetlagente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JiraetlagentesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores']
        ];
        $jiraetlagentes = $this->paginate($this->Jiraetlagentes);

        $this->set(compact('jiraetlagentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Jiraetlagente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jiraetlagente = $this->Jiraetlagentes->get($id, [
            'contain' => ['Consultores']
        ]);

        $this->set('jiraetlagente', $jiraetlagente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jiraetlagente = $this->Jiraetlagentes->newEntity();
        if ($this->request->is('post')) {
            $jiraetlagente = $this->Jiraetlagentes->patchEntity($jiraetlagente, $this->request->getData());
            if ($this->Jiraetlagentes->save($jiraetlagente)) {
                $this->Flash->success(__('The jiraetlagente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jiraetlagente could not be saved. Please, try again.'));
        }
        $consultores = $this->Jiraetlagentes->Consultores->find('list',array('order' => array('nome' => 'asc')), ['limit' => 200]);
        $this->set(compact('jiraetlagente', 'consultores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jiraetlagente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jiraetlagente = $this->Jiraetlagentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jiraetlagente = $this->Jiraetlagentes->patchEntity($jiraetlagente, $this->request->getData());
            if ($this->Jiraetlagentes->save($jiraetlagente)) {
                $this->Flash->success(__('The jiraetlagente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jiraetlagente could not be saved. Please, try again.'));
        }
        $consultores = $this->Jiraetlagentes->Consultores->find('list',array('order' => array('nome' => 'asc')) ,['limit' => 200]);
        $this->set(compact('jiraetlagente', 'consultores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jiraetlagente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jiraetlagente = $this->Jiraetlagentes->get($id);
        if ($this->Jiraetlagentes->delete($jiraetlagente)) {
            $this->Flash->success(__('The jiraetlagente has been deleted.'));
        } else {
            $this->Flash->error(__('The jiraetlagente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
