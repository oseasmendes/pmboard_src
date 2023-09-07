<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Superiorimediatos Controller
 *
 * @property \App\Model\Table\SuperiorimediatosTable $Superiorimediatos
 *
 * @method \App\Model\Entity\Superiorimediato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuperiorimediatosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $superiorimediatos = $this->paginate($this->Superiorimediatos);

        $this->set(compact('superiorimediatos'));
    }

    /**
     * View method
     *
     * @param string|null $id Superiorimediato id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $superiorimediato = $this->Superiorimediatos->get($id, [
            'contain' => ['Consultores', 'Projetousuarios']
        ]);

        $this->set('superiorimediato', $superiorimediato);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $superiorimediato = $this->Superiorimediatos->newEntity();
        if ($this->request->is('post')) {
            $superiorimediato = $this->Superiorimediatos->patchEntity($superiorimediato, $this->request->getData());
            if ($this->Superiorimediatos->save($superiorimediato)) {
                $this->Flash->success(__('The superiorimediato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The superiorimediato could not be saved. Please, try again.'));
        }
        $this->set(compact('superiorimediato'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Superiorimediato id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $superiorimediato = $this->Superiorimediatos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $superiorimediato = $this->Superiorimediatos->patchEntity($superiorimediato, $this->request->getData());
            if ($this->Superiorimediatos->save($superiorimediato)) {
                $this->Flash->success(__('The superiorimediato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The superiorimediato could not be saved. Please, try again.'));
        }
        $this->set(compact('superiorimediato'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Superiorimediato id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $superiorimediato = $this->Superiorimediatos->get($id);
        if ($this->Superiorimediatos->delete($superiorimediato)) {
            $this->Flash->success(__('The superiorimediato has been deleted.'));
        } else {
            $this->Flash->error(__('The superiorimediato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
