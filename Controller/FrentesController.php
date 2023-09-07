<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Frentes Controller
 *
 * @property \App\Model\Table\FrentesTable $Frentes
 *
 * @method \App\Model\Entity\Frente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FrentesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $frentes = $this->paginate($this->Frentes);

        $this->set(compact('frentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Frente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $frente = $this->Frentes->get($id, [
            'contain' => ['Projetosprodutos']
        ]);

        $this->set('frente', $frente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $frente = $this->Frentes->newEntity();
        if ($this->request->is('post')) {
            $frente = $this->Frentes->patchEntity($frente, $this->request->getData());
            if ($this->Frentes->save($frente)) {
                $this->Flash->success(__('The frente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The frente could not be saved. Please, try again.'));
        }
        $this->set(compact('frente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Frente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $frente = $this->Frentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $frente = $this->Frentes->patchEntity($frente, $this->request->getData());
            if ($this->Frentes->save($frente)) {
                $this->Flash->success(__('The frente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The frente could not be saved. Please, try again.'));
        }
        $this->set(compact('frente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Frente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $frente = $this->Frentes->get($id);
        if ($this->Frentes->delete($frente)) {
            $this->Flash->success(__('The frente has been deleted.'));
        } else {
            $this->Flash->error(__('The frente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
