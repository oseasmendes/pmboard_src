<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasprofilescontracts Controller
 *
 * @property \App\Model\Table\SistemasprofilescontractsTable $Sistemasprofilescontracts
 *
 * @method \App\Model\Entity\Sistemasprofilescontract[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasprofilescontractsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Sistemasprofiles']
        ];
        $sistemasprofilescontracts = $this->paginate($this->Sistemasprofilescontracts);

        $this->set(compact('sistemasprofilescontracts'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasprofilescontract id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasprofilescontract = $this->Sistemasprofilescontracts->get($id, [
            'contain' => ['Sistemas', 'Sistemasprofiles']
        ]);

        $this->set('sistemasprofilescontract', $sistemasprofilescontract);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasprofilescontract = $this->Sistemasprofilescontracts->newEntity();
        if ($this->request->is('post')) {
            $sistemasprofilescontract = $this->Sistemasprofilescontracts->patchEntity($sistemasprofilescontract, $this->request->getData());
            if ($this->Sistemasprofilescontracts->save($sistemasprofilescontract)) {
                $this->Flash->success(__('The sistemasprofilescontract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasprofilescontract could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasprofilescontracts->Sistemas->find('list', ['limit' => 200]);
        $sistemasprofiles = $this->Sistemasprofilescontracts->Sistemasprofiles->find('list', ['limit' => 200]);
        $this->set(compact('sistemasprofilescontract', 'sistemas', 'sistemasprofiles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasprofilescontract id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasprofilescontract = $this->Sistemasprofilescontracts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasprofilescontract = $this->Sistemasprofilescontracts->patchEntity($sistemasprofilescontract, $this->request->getData());
            if ($this->Sistemasprofilescontracts->save($sistemasprofilescontract)) {
                $this->Flash->success(__('The sistemasprofilescontract has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasprofilescontract could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasprofilescontracts->Sistemas->find('list', ['limit' => 200]);
        $sistemasprofiles = $this->Sistemasprofilescontracts->Sistemasprofiles->find('list', ['limit' => 200]);
        $this->set(compact('sistemasprofilescontract', 'sistemas', 'sistemasprofiles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasprofilescontract id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasprofilescontract = $this->Sistemasprofilescontracts->get($id);
        if ($this->Sistemasprofilescontracts->delete($sistemasprofilescontract)) {
            $this->Flash->success(__('The sistemasprofilescontract has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasprofilescontract could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
