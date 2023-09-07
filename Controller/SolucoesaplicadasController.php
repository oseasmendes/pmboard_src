<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Solucoesaplicadas Controller
 *
 * @property \App\Model\Table\SolucoesaplicadasTable $Solucoesaplicadas
 *
 * @method \App\Model\Entity\Solucoesaplicada[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolucoesaplicadasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Solucoestipos']
        ];
        $solucoesaplicadas = $this->paginate($this->Solucoesaplicadas);

        $this->set(compact('solucoesaplicadas'));
    }

    /**
     * View method
     *
     * @param string|null $id Solucoesaplicada id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solucoesaplicada = $this->Solucoesaplicadas->get($id, [
            'contain' => ['Solucoestipos', 'Projetosentregasencerramentos']
        ]);

        $this->set('solucoesaplicada', $solucoesaplicada);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solucoesaplicada = $this->Solucoesaplicadas->newEntity();
        if ($this->request->is('post')) {
            $solucoesaplicada = $this->Solucoesaplicadas->patchEntity($solucoesaplicada, $this->request->getData());
            if ($this->Solucoesaplicadas->save($solucoesaplicada)) {
                $this->Flash->success(__('The solucoesaplicada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solucoesaplicada could not be saved. Please, try again.'));
        }
        $solucoestipos = $this->Solucoesaplicadas->Solucoestipos->find('list', ['limit' => 200]);
        $this->set(compact('solucoesaplicada', 'solucoestipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solucoesaplicada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solucoesaplicada = $this->Solucoesaplicadas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solucoesaplicada = $this->Solucoesaplicadas->patchEntity($solucoesaplicada, $this->request->getData());
            if ($this->Solucoesaplicadas->save($solucoesaplicada)) {
                $this->Flash->success(__('The solucoesaplicada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solucoesaplicada could not be saved. Please, try again.'));
        }
        $solucoestipos = $this->Solucoesaplicadas->Solucoestipos->find('list', ['limit' => 200]);
        $this->set(compact('solucoesaplicada', 'solucoestipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solucoesaplicada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solucoesaplicada = $this->Solucoesaplicadas->get($id);
        if ($this->Solucoesaplicadas->delete($solucoesaplicada)) {
            $this->Flash->success(__('The solucoesaplicada has been deleted.'));
        } else {
            $this->Flash->error(__('The solucoesaplicada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
