<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetoscutoversflws Controller
 *
 * @property \App\Model\Table\ProjetoscutoversflwsTable $Projetoscutoversflws
 *
 * @method \App\Model\Entity\Projetoscutoversflw[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetoscutoversflwsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetoscutovers']
        ];
        $projetoscutoversflws = $this->paginate($this->Projetoscutoversflws);

        $this->set(compact('projetoscutoversflws'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetoscutoversflw id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetoscutoversflw = $this->Projetoscutoversflws->get($id, [
            'contain' => ['Projetoscutovers']
        ]);

        $this->set('projetoscutoversflw', $projetoscutoversflw);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetoscutoversflw = $this->Projetoscutoversflws->newEntity();
        if ($this->request->is('post')) {
            $projetoscutoversflw = $this->Projetoscutoversflws->patchEntity($projetoscutoversflw, $this->request->getData());
            if ($this->Projetoscutoversflws->save($projetoscutoversflw)) {
                $this->Flash->success(__('The projetoscutoversflw has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetoscutoversflw could not be saved. Please, try again.'));
        }
        $projetoscutovers = $this->Projetoscutoversflws->Projetoscutovers->find('list', ['limit' => 200]);
        $this->set(compact('projetoscutoversflw', 'projetoscutovers'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetoscutoversflw id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetoscutoversflw = $this->Projetoscutoversflws->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetoscutoversflw = $this->Projetoscutoversflws->patchEntity($projetoscutoversflw, $this->request->getData());
            if ($this->Projetoscutoversflws->save($projetoscutoversflw)) {
                $this->Flash->success(__('The projetoscutoversflw has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetoscutoversflw could not be saved. Please, try again.'));
        }
        $projetoscutovers = $this->Projetoscutoversflws->Projetoscutovers->find('list', ['limit' => 200]);
        $this->set(compact('projetoscutoversflw', 'projetoscutovers'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetoscutoversflw id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetoscutoversflw = $this->Projetoscutoversflws->get($id);
        if ($this->Projetoscutoversflws->delete($projetoscutoversflw)) {
            $this->Flash->success(__('The projetoscutoversflw has been deleted.'));
        } else {
            $this->Flash->error(__('The projetoscutoversflw could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
