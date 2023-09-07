<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aproaches Controller
 *
 * @property \App\Model\Table\AproachesTable $Aproaches
 *
 * @method \App\Model\Entity\Aproach[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AproachesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $aproaches = $this->paginate($this->Aproaches);

        $this->set(compact('aproaches'));
    }

    /**
     * View method
     *
     * @param string|null $id Aproach id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aproach = $this->Aproaches->get($id, [
            'contain' => ['Projetoslearnedlessons']
        ]);

        $this->set('aproach', $aproach);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aproach = $this->Aproaches->newEntity();
        if ($this->request->is('post')) {
            $aproach = $this->Aproaches->patchEntity($aproach, $this->request->getData());
            if ($this->Aproaches->save($aproach)) {
                $this->Flash->success(__('The aproach has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aproach could not be saved. Please, try again.'));
        }
        $this->set(compact('aproach'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aproach id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aproach = $this->Aproaches->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aproach = $this->Aproaches->patchEntity($aproach, $this->request->getData());
            if ($this->Aproaches->save($aproach)) {
                $this->Flash->success(__('The aproach has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aproach could not be saved. Please, try again.'));
        }
        $this->set(compact('aproach'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aproach id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aproach = $this->Aproaches->get($id);
        if ($this->Aproaches->delete($aproach)) {
            $this->Flash->success(__('The aproach has been deleted.'));
        } else {
            $this->Flash->error(__('The aproach could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
