<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Jiraetlcomponentes Controller
 *
 * @property \App\Model\Table\JiraetlcomponentesTable $Jiraetlcomponentes
 *
 * @method \App\Model\Entity\Jiraetlcomponente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class JiraetlcomponentesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutos']
        ];
        $jiraetlcomponentes = $this->paginate($this->Jiraetlcomponentes);

        $this->set(compact('jiraetlcomponentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Jiraetlcomponente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $jiraetlcomponente = $this->Jiraetlcomponentes->get($id, [
            'contain' => ['Projetosprodutos']
        ]);

        $this->set('jiraetlcomponente', $jiraetlcomponente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $jiraetlcomponente = $this->Jiraetlcomponentes->newEntity();
        if ($this->request->is('post')) {
            $jiraetlcomponente = $this->Jiraetlcomponentes->patchEntity($jiraetlcomponente, $this->request->getData());
            if ($this->Jiraetlcomponentes->save($jiraetlcomponente)) {
                $this->Flash->success(__('The jiraetlcomponente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jiraetlcomponente could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Jiraetlcomponentes->Projetosprodutos->find('list', ['limit' => 200]);
        $this->set(compact('jiraetlcomponente', 'projetosprodutos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Jiraetlcomponente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $jiraetlcomponente = $this->Jiraetlcomponentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $jiraetlcomponente = $this->Jiraetlcomponentes->patchEntity($jiraetlcomponente, $this->request->getData());
            if ($this->Jiraetlcomponentes->save($jiraetlcomponente)) {
                $this->Flash->success(__('The jiraetlcomponente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The jiraetlcomponente could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Jiraetlcomponentes->Projetosprodutos->find('list', ['limit' => 200]);
        $this->set(compact('jiraetlcomponente', 'projetosprodutos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Jiraetlcomponente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $jiraetlcomponente = $this->Jiraetlcomponentes->get($id);
        if ($this->Jiraetlcomponentes->delete($jiraetlcomponente)) {
            $this->Flash->success(__('The jiraetlcomponente has been deleted.'));
        } else {
            $this->Flash->error(__('The jiraetlcomponente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
