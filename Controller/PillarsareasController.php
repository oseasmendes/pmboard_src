<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pillarsareas Controller
 *
 * @property \App\Model\Table\PillarsareasTable $Pillarsareas
 *
 * @method \App\Model\Entity\Pillarsarea[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PillarsareasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pillarsareas = $this->paginate($this->Pillarsareas);

        $this->set(compact('pillarsareas'));
    }

    /**
     * View method
     *
     * @param string|null $id Pillarsarea id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pillarsarea = $this->Pillarsareas->get($id, [
            'contain' => ['Projetossprintsretrosactions']
        ]);

        $this->set('pillarsarea', $pillarsarea);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pillarsarea = $this->Pillarsareas->newEntity();
        if ($this->request->is('post')) {
            $pillarsarea = $this->Pillarsareas->patchEntity($pillarsarea, $this->request->getData());
            if ($this->Pillarsareas->save($pillarsarea)) {
                $this->Flash->success(__('The pillarsarea has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pillarsarea could not be saved. Please, try again.'));
        }
        $this->set(compact('pillarsarea'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pillarsarea id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pillarsarea = $this->Pillarsareas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pillarsarea = $this->Pillarsareas->patchEntity($pillarsarea, $this->request->getData());
            if ($this->Pillarsareas->save($pillarsarea)) {
                $this->Flash->success(__('The pillarsarea has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pillarsarea could not be saved. Please, try again.'));
        }
        $this->set(compact('pillarsarea'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pillarsarea id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pillarsarea = $this->Pillarsareas->get($id);
        if ($this->Pillarsareas->delete($pillarsarea)) {
            $this->Flash->success(__('The pillarsarea has been deleted.'));
        } else {
            $this->Flash->error(__('The pillarsarea could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
