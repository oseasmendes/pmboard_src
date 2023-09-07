<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kronus Controller
 *
 * @property \App\Model\Table\KronusTable $Kronus
 *
 * @method \App\Model\Entity\Kronus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KronusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Kronusplans', 'Flags', 'Fases']
        ];
        $kronus = $this->paginate($this->Kronus);

        $this->set(compact('kronus'));
    }

    /**
     * View method
     *
     * @param string|null $id Kronus id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kronus = $this->Kronus->get($id, [
            'contain' => ['Kronusplans', 'Flags', 'Fases']
        ]);

        $this->set('kronus', $kronus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kronus = $this->Kronus->newEntity();
        if ($this->request->is('post')) {
            $kronus = $this->Kronus->patchEntity($kronus, $this->request->getData());
            if ($this->Kronus->save($kronus)) {
                $this->Flash->success(__('The kronus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kronus could not be saved. Please, try again.'));
        }
        $kronusplans = $this->Kronus->Kronusplans->find('list', ['limit' => 200]);
        $flags = $this->Kronus->Flags->find('list', ['limit' => 200]);
        $fases = $this->Kronus->Fases->find('list', ['limit' => 200]);
        $this->set(compact('kronus', 'kronusplans', 'flags', 'fases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kronus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kronus = $this->Kronus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kronus = $this->Kronus->patchEntity($kronus, $this->request->getData());
            if ($this->Kronus->save($kronus)) {
                $this->Flash->success(__('The kronus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kronus could not be saved. Please, try again.'));
        }
        $kronusplans = $this->Kronus->Kronusplans->find('list', ['limit' => 200]);
        $flags = $this->Kronus->Flags->find('list', ['limit' => 200]);
        $fases = $this->Kronus->Fases->find('list', ['limit' => 200]);
        $this->set(compact('kronus', 'kronusplans', 'flags', 'fases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kronus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kronus = $this->Kronus->get($id);
        if ($this->Kronus->delete($kronus)) {
            $this->Flash->success(__('The kronus has been deleted.'));
        } else {
            $this->Flash->error(__('The kronus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
