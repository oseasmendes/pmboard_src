<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Integrations Controller
 *
 * @property \App\Model\Table\IntegrationsTable $Integrations
 *
 * @method \App\Model\Entity\Integration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IntegrationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Bancos', 'Tecnologias']
        ];
        $integrations = $this->paginate($this->Integrations);

        $this->set(compact('integrations'));
    }

    /**
     * View method
     *
     * @param string|null $id Integration id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $integration = $this->Integrations->get($id, [
            'contain' => ['Bancos', 'Tecnologias', 'Sistemascfgintegrations']
        ]);

        $this->set('integration', $integration);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $integration = $this->Integrations->newEntity();
        if ($this->request->is('post')) {
            $integration = $this->Integrations->patchEntity($integration, $this->request->getData());
            if ($this->Integrations->save($integration)) {
                $this->Flash->success(__('The integration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The integration could not be saved. Please, try again.'));
        }
        $bancos = $this->Integrations->Bancos->find('list', ['limit' => 200]);
        $tecnologias = $this->Integrations->Tecnologias->find('list', ['limit' => 200]);
        $this->set(compact('integration', 'bancos', 'tecnologias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Integration id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $integration = $this->Integrations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $integration = $this->Integrations->patchEntity($integration, $this->request->getData());
            if ($this->Integrations->save($integration)) {
                $this->Flash->success(__('The integration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The integration could not be saved. Please, try again.'));
        }
        $bancos = $this->Integrations->Bancos->find('list', ['limit' => 200]);
        $tecnologias = $this->Integrations->Tecnologias->find('list', ['limit' => 200]);
        $this->set(compact('integration', 'bancos', 'tecnologias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Integration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $integration = $this->Integrations->get($id);
        if ($this->Integrations->delete($integration)) {
            $this->Flash->success(__('The integration has been deleted.'));
        } else {
            $this->Flash->error(__('The integration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
