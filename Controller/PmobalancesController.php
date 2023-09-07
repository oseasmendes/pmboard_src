<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pmobalances Controller
 *
 * @property \App\Model\Table\PmobalancesTable $Pmobalances
 *
 * @method \App\Model\Entity\Pmobalance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PmobalancesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Statusfuncionals']
        ];
        $pmobalances = $this->paginate($this->Pmobalances);

        $this->set(compact('pmobalances'));
    }

    /**
     * View method
     *
     * @param string|null $id Pmobalance id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pmobalance = $this->Pmobalances->get($id, [
            'contain' => ['Statusfuncionals', 'Pmobalanceconsultores']
        ]);

        $this->set('pmobalance', $pmobalance);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pmobalance = $this->Pmobalances->newEntity();
        if ($this->request->is('post')) {
            $pmobalance = $this->Pmobalances->patchEntity($pmobalance, $this->request->getData());
            if ($this->Pmobalances->save($pmobalance)) {
                $this->Flash->success(__('The pmobalance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pmobalance could not be saved. Please, try again.'));
        }
        $statusfuncionals = $this->Pmobalances->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('pmobalance', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pmobalance id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pmobalance = $this->Pmobalances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pmobalance = $this->Pmobalances->patchEntity($pmobalance, $this->request->getData());
            if ($this->Pmobalances->save($pmobalance)) {
                $this->Flash->success(__('The pmobalance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pmobalance could not be saved. Please, try again.'));
        }
        $statusfuncionals = $this->Pmobalances->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('pmobalance', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pmobalance id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pmobalance = $this->Pmobalances->get($id);
        if ($this->Pmobalances->delete($pmobalance)) {
            $this->Flash->success(__('The pmobalance has been deleted.'));
        } else {
            $this->Flash->error(__('The pmobalance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
