<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Severidades Controller
 *
 * @property \App\Model\Table\SeveridadesTable $Severidades
 *
 * @method \App\Model\Entity\Severidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SeveridadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $severidades = $this->paginate($this->Severidades);

        $this->set(compact('severidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Severidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $severidade = $this->Severidades->get($id, [
            'contain' => []
        ]);

        $this->set('severidade', $severidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $severidade = $this->Severidades->newEntity();
        if ($this->request->is('post')) {
            $severidade = $this->Severidades->patchEntity($severidade, $this->request->getData());
            if ($this->Severidades->save($severidade)) {
                $this->Flash->success(__('The severidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The severidade could not be saved. Please, try again.'));
        }
        $this->set(compact('severidade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Severidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $severidade = $this->Severidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $severidade = $this->Severidades->patchEntity($severidade, $this->request->getData());
            if ($this->Severidades->save($severidade)) {
                $this->Flash->success(__('The severidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The severidade could not be saved. Please, try again.'));
        }
        $this->set(compact('severidade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Severidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $severidade = $this->Severidades->get($id);
        if ($this->Severidades->delete($severidade)) {
            $this->Flash->success(__('The severidade has been deleted.'));
        } else {
            $this->Flash->error(__('The severidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
