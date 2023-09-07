<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jiraetlparetos Controller
 *
 * @property \App\Model\Table\JiraetlparetosTable $Jiraetlparetos
 *
 * @method \App\Model\Entity\Jiraetlpareto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JiraetlparetosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Paretos']
        ];
        $jiraetlparetos = $this->paginate($this->Jiraetlparetos);

        $this->set(compact('jiraetlparetos'));
    }

    /**
     * View method
     *
     * @param string|null $id Jiraetlpareto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jiraetlpareto = $this->Jiraetlparetos->get($id, [
            'contain' => ['Paretos']
        ]);

        $this->set('jiraetlpareto', $jiraetlpareto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jiraetlpareto = $this->Jiraetlparetos->newEntity();
        if ($this->request->is('post')) {
            $jiraetlpareto = $this->Jiraetlparetos->patchEntity($jiraetlpareto, $this->request->getData());
            if ($this->Jiraetlparetos->save($jiraetlpareto)) {
                $this->Flash->success(__('The jiraetlpareto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jiraetlpareto could not be saved. Please, try again.'));
        }
        $paretos = $this->Jiraetlparetos->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('jiraetlpareto', 'paretos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jiraetlpareto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jiraetlpareto = $this->Jiraetlparetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jiraetlpareto = $this->Jiraetlparetos->patchEntity($jiraetlpareto, $this->request->getData());
            if ($this->Jiraetlparetos->save($jiraetlpareto)) {
                $this->Flash->success(__('The jiraetlpareto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jiraetlpareto could not be saved. Please, try again.'));
        }
        $paretos = $this->Jiraetlparetos->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('jiraetlpareto', 'paretos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jiraetlpareto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jiraetlpareto = $this->Jiraetlparetos->get($id);
        if ($this->Jiraetlparetos->delete($jiraetlpareto)) {
            $this->Flash->success(__('The jiraetlpareto has been deleted.'));
        } else {
            $this->Flash->error(__('The jiraetlpareto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
