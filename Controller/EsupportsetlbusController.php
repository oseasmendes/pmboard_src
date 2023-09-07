<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Esupportsetlbus Controller
 *
 * @property \App\Model\Table\EsupportsetlbusTable $Esupportsetlbus
 *
 * @method \App\Model\Entity\Esupportsetlbus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EsupportsetlbusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresasunidades']
        ];
        $esupportsetlbus = $this->paginate($this->Esupportsetlbus);

        $this->set(compact('esupportsetlbus'));
    }

    /**
     * View method
     *
     * @param string|null $id Esupportsetlbus id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $esupportsetlbus = $this->Esupportsetlbus->get($id, [
            'contain' => ['Empresasunidades']
        ]);

        $this->set('esupportsetlbus', $esupportsetlbus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $esupportsetlbus = $this->Esupportsetlbus->newEntity();
        if ($this->request->is('post')) {
            $esupportsetlbus = $this->Esupportsetlbus->patchEntity($esupportsetlbus, $this->request->getData());
            if ($this->Esupportsetlbus->save($esupportsetlbus)) {
                $this->Flash->success(__('The esupportsetlbus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlbus could not be saved. Please, try again.'));
        }
        $empresasunidades = $this->Esupportsetlbus->Empresasunidades->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlbus', 'empresasunidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Esupportsetlbus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $esupportsetlbus = $this->Esupportsetlbus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $esupportsetlbus = $this->Esupportsetlbus->patchEntity($esupportsetlbus, $this->request->getData());
            if ($this->Esupportsetlbus->save($esupportsetlbus)) {
                $this->Flash->success(__('The esupportsetlbus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlbus could not be saved. Please, try again.'));
        }
        $empresasunidades = $this->Esupportsetlbus->Empresasunidades->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlbus', 'empresasunidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Esupportsetlbus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $esupportsetlbus = $this->Esupportsetlbus->get($id);
        if ($this->Esupportsetlbus->delete($esupportsetlbus)) {
            $this->Flash->success(__('The esupportsetlbus has been deleted.'));
        } else {
            $this->Flash->error(__('The esupportsetlbus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
