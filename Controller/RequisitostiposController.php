<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Requisitostipos Controller
 *
 * @property \App\Model\Table\RequisitostiposTable $Requisitostipos
 *
 * @method \App\Model\Entity\Requisitostipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RequisitostiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $requisitostipos = $this->paginate($this->Requisitostipos);

        $this->set(compact('requisitostipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Requisitostipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $requisitostipo = $this->Requisitostipos->get($id, [
            'contain' => ['Projetosentregasreqsrefs']
        ]);

        $this->set('requisitostipo', $requisitostipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $requisitostipo = $this->Requisitostipos->newEntity();
        if ($this->request->is('post')) {
            $requisitostipo = $this->Requisitostipos->patchEntity($requisitostipo, $this->request->getData());
            if ($this->Requisitostipos->save($requisitostipo)) {
                $this->Flash->success(__('The requisitostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requisitostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('requisitostipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Requisitostipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $requisitostipo = $this->Requisitostipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requisitostipo = $this->Requisitostipos->patchEntity($requisitostipo, $this->request->getData());
            if ($this->Requisitostipos->save($requisitostipo)) {
                $this->Flash->success(__('The requisitostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requisitostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('requisitostipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Requisitostipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $requisitostipo = $this->Requisitostipos->get($id);
        if ($this->Requisitostipos->delete($requisitostipo)) {
            $this->Flash->success(__('The requisitostipo has been deleted.'));
        } else {
            $this->Flash->error(__('The requisitostipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
