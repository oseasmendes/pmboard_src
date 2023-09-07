<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clientesalocs Controller
 *
 * @property \App\Model\Table\ClientesalocsTable $Clientesalocs
 *
 * @method \App\Model\Entity\Clientesaloc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClientesalocsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes']
        ];
        $clientesalocs = $this->paginate($this->Clientesalocs);

        $this->set(compact('clientesalocs'));
    }

    /**
     * View method
     *
     * @param string|null $id Clientesaloc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientesaloc = $this->Clientesalocs->get($id, [
            'contain' => ['Clientes']
        ]);

        $this->set('clientesaloc', $clientesaloc);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientesaloc = $this->Clientesalocs->newEntity();
        if ($this->request->is('post')) {
            $clientesaloc = $this->Clientesalocs->patchEntity($clientesaloc, $this->request->getData());
            if ($this->Clientesalocs->save($clientesaloc)) {
                $this->Flash->success(__('The clientesaloc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clientesaloc could not be saved. Please, try again.'));
        }
        $clientes = $this->Clientesalocs->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('clientesaloc', 'clientes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clientesaloc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientesaloc = $this->Clientesalocs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientesaloc = $this->Clientesalocs->patchEntity($clientesaloc, $this->request->getData());
            if ($this->Clientesalocs->save($clientesaloc)) {
                $this->Flash->success(__('The clientesaloc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clientesaloc could not be saved. Please, try again.'));
        }
        $clientes = $this->Clientesalocs->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('clientesaloc', 'clientes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clientesaloc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientesaloc = $this->Clientesalocs->get($id);
        if ($this->Clientesalocs->delete($clientesaloc)) {
            $this->Flash->success(__('The clientesaloc has been deleted.'));
        } else {
            $this->Flash->error(__('The clientesaloc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
