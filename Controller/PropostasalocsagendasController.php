<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Propostasalocsagendas Controller
 *
 * @property \App\Model\Table\PropostasalocsagendasTable $Propostasalocsagendas
 *
 * @method \App\Model\Entity\Propostasalocsagenda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PropostasalocsagendasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Propostasalocs']
        ];
        $propostasalocsagendas = $this->paginate($this->Propostasalocsagendas);

        $this->set(compact('propostasalocsagendas'));
    }

    /**
     * View method
     *
     * @param string|null $id Propostasalocsagenda id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $propostasalocsagenda = $this->Propostasalocsagendas->get($id, [
            'contain' => ['Propostasalocs']
        ]);

        $this->set('propostasalocsagenda', $propostasalocsagenda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $propostasalocsagenda = $this->Propostasalocsagendas->newEntity();
        if ($this->request->is('post')) {
            $propostasalocsagenda = $this->Propostasalocsagendas->patchEntity($propostasalocsagenda, $this->request->getData());
            if ($this->Propostasalocsagendas->save($propostasalocsagenda)) {
                $this->Flash->success(__('The propostasalocsagenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The propostasalocsagenda could not be saved. Please, try again.'));
        }
        $propostasalocs = $this->Propostasalocsagendas->Propostasalocs->find('list', ['limit' => 200]);
        $this->set(compact('propostasalocsagenda', 'propostasalocs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Propostasalocsagenda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $propostasalocsagenda = $this->Propostasalocsagendas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $propostasalocsagenda = $this->Propostasalocsagendas->patchEntity($propostasalocsagenda, $this->request->getData());
            if ($this->Propostasalocsagendas->save($propostasalocsagenda)) {
                $this->Flash->success(__('The propostasalocsagenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The propostasalocsagenda could not be saved. Please, try again.'));
        }
        $propostasalocs = $this->Propostasalocsagendas->Propostasalocs->find('list', ['limit' => 200]);
        $this->set(compact('propostasalocsagenda', 'propostasalocs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Propostasalocsagenda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $propostasalocsagenda = $this->Propostasalocsagendas->get($id);
        if ($this->Propostasalocsagendas->delete($propostasalocsagenda)) {
            $this->Flash->success(__('The propostasalocsagenda has been deleted.'));
        } else {
            $this->Flash->error(__('The propostasalocsagenda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
