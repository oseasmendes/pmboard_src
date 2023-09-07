<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Motivos Controller
 *
 * @property \App\Model\Table\MotivosTable $Motivos
 *
 * @method \App\Model\Entity\Motivo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MotivosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
         $this->paginate = [
            'contain' => ['Motivostipos']
        ];

        $motivos = $this->paginate($this->Motivos);

        $this->set(compact('motivos'));
    }

    /**
     * View method
     *
     * @param string|null $id Motivo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $motivo = $this->Motivos->get($id, [
            'contain' => ['Projetosstatus','Motivostipos']
        ]);

        $this->set('motivo', $motivo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $motivo = $this->Motivos->newEntity();
        if ($this->request->is('post')) {
            $motivo = $this->Motivos->patchEntity($motivo, $this->request->getData());
            if ($this->Motivos->save($motivo)) {
                $this->Flash->success(__('The motivo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The motivo could not be saved. Please, try again.'));
        }

         $motivostipos = $this->Motivos->Motivostipos->find('list', ['limit' => 200]);
          

        $this->set(compact('motivo','motivostipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Motivo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $motivo = $this->Motivos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $motivo = $this->Motivos->patchEntity($motivo, $this->request->getData());
            if ($this->Motivos->save($motivo)) {
                $this->Flash->success(__('The motivo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The motivo could not be saved. Please, try again.'));
        }

        $motivostipos = $this->Motivos->Motivostipos->find('list', ['limit' => 200]);
        $this->set(compact('motivo','motivostipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Motivo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $motivo = $this->Motivos->get($id);
        if ($this->Motivos->delete($motivo)) {
            $this->Flash->success(__('The motivo has been deleted.'));
        } else {
            $this->Flash->error(__('The motivo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
