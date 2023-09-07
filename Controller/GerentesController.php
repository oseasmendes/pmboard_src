<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gerentes Controller
 *
 * @property \App\Model\Table\GerentesTable $Gerentes
 *
 * @method \App\Model\Entity\Gerente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GerentesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $gerentes = $this->paginate($this->Gerentes);

        $this->set(compact('gerentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Gerente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gerente = $this->Gerentes->get($id, [
            'contain' => ['Departamentos']
        ]);

        $this->set('gerente', $gerente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gerente = $this->Gerentes->newEntity();
        if ($this->request->is('post')) {
            $gerente = $this->Gerentes->patchEntity($gerente, $this->request->getData());
            if ($this->Gerentes->save($gerente)) {
                $this->Flash->success(__('The gerente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gerente could not be saved. Please, try again.'));
        }
        $this->set(compact('gerente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gerente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gerente = $this->Gerentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gerente = $this->Gerentes->patchEntity($gerente, $this->request->getData());
            if ($this->Gerentes->save($gerente)) {
                $this->Flash->success(__('The gerente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gerente could not be saved. Please, try again.'));
        }
        $this->set(compact('gerente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gerente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gerente = $this->Gerentes->get($id);
        if ($this->Gerentes->delete($gerente)) {
            $this->Flash->success(__('The gerente has been deleted.'));
        } else {
            $this->Flash->error(__('The gerente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
