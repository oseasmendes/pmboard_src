<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jiraetlentregastipos Controller
 *
 * @property \App\Model\Table\JiraetlentregastiposTable $Jiraetlentregastipos
 *
 * @method \App\Model\Entity\Jiraetlentregastipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JiraetlentregastiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Entregastipos']
        ];
        $jiraetlentregastipos = $this->paginate($this->Jiraetlentregastipos);

        $this->set(compact('jiraetlentregastipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Jiraetlentregastipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jiraetlentregastipo = $this->Jiraetlentregastipos->get($id, [
            'contain' => ['Entregastipos']
        ]);

        $this->set('jiraetlentregastipo', $jiraetlentregastipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jiraetlentregastipo = $this->Jiraetlentregastipos->newEntity();
        if ($this->request->is('post')) {
            $jiraetlentregastipo = $this->Jiraetlentregastipos->patchEntity($jiraetlentregastipo, $this->request->getData());
            if ($this->Jiraetlentregastipos->save($jiraetlentregastipo)) {
                $this->Flash->success(__('The jiraetlentregastipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jiraetlentregastipo could not be saved. Please, try again.'));
        }
        $entregastipos = $this->Jiraetlentregastipos->Entregastipos->find('list', ['limit' => 200]);
        $this->set(compact('jiraetlentregastipo', 'entregastipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jiraetlentregastipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jiraetlentregastipo = $this->Jiraetlentregastipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jiraetlentregastipo = $this->Jiraetlentregastipos->patchEntity($jiraetlentregastipo, $this->request->getData());
            if ($this->Jiraetlentregastipos->save($jiraetlentregastipo)) {
                $this->Flash->success(__('The jiraetlentregastipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jiraetlentregastipo could not be saved. Please, try again.'));
        }
        $entregastipos = $this->Jiraetlentregastipos->Entregastipos->find('list', ['limit' => 200]);
        $this->set(compact('jiraetlentregastipo', 'entregastipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jiraetlentregastipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jiraetlentregastipo = $this->Jiraetlentregastipos->get($id);
        if ($this->Jiraetlentregastipos->delete($jiraetlentregastipo)) {
            $this->Flash->success(__('The jiraetlentregastipo has been deleted.'));
        } else {
            $this->Flash->error(__('The jiraetlentregastipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
