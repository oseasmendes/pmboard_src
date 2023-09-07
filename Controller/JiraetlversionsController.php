<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jiraetlversions Controller
 *
 * @property \App\Model\Table\JiraetlversionsTable $Jiraetlversions
 *
 * @method \App\Model\Entity\Jiraetlversion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JiraetlversionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetossprints']
        ];
        $jiraetlversions = $this->paginate($this->Jiraetlversions);

        $this->set(compact('jiraetlversions'));
    }

    /**
     * View method
     *
     * @param string|null $id Jiraetlversion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jiraetlversion = $this->Jiraetlversions->get($id, [
            'contain' => ['Projetossprints']
        ]);

        $this->set('jiraetlversion', $jiraetlversion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jiraetlversion = $this->Jiraetlversions->newEntity();
        if ($this->request->is('post')) {
            $jiraetlversion = $this->Jiraetlversions->patchEntity($jiraetlversion, $this->request->getData());
            if ($this->Jiraetlversions->save($jiraetlversion)) {
                $this->Flash->success(__('The jiraetlversion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jiraetlversion could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Jiraetlversions->Projetossprints->find('list', ['limit' => 200]);
        $this->set(compact('jiraetlversion', 'projetossprints'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jiraetlversion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jiraetlversion = $this->Jiraetlversions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jiraetlversion = $this->Jiraetlversions->patchEntity($jiraetlversion, $this->request->getData());
            if ($this->Jiraetlversions->save($jiraetlversion)) {
                $this->Flash->success(__('The jiraetlversion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jiraetlversion could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Jiraetlversions->Projetossprints->find('list', ['limit' => 200]);
        $this->set(compact('jiraetlversion', 'projetossprints'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jiraetlversion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jiraetlversion = $this->Jiraetlversions->get($id);
        if ($this->Jiraetlversions->delete($jiraetlversion)) {
            $this->Flash->success(__('The jiraetlversion has been deleted.'));
        } else {
            $this->Flash->error(__('The jiraetlversion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
