<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Motivostipos Controller
 *
 * @property \App\Model\Table\MotivostiposTable $Motivostipos
 *
 * @method \App\Model\Entity\Motivostipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MotivostiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $motivostipos = $this->paginate($this->Motivostipos);

        $this->set(compact('motivostipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Motivostipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $motivostipo = $this->Motivostipos->get($id, [
            'contain' => ['Motivos']
        ]);

        $this->set('motivostipo', $motivostipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $motivostipo = $this->Motivostipos->newEntity();
        if ($this->request->is('post')) {
            $motivostipo = $this->Motivostipos->patchEntity($motivostipo, $this->request->getData());
            if ($this->Motivostipos->save($motivostipo)) {
                $this->Flash->success(__('The motivostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The motivostipo could not be saved. Please, try again.'));
        }
       
        $this->set(compact('motivostipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Motivostipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $motivostipo = $this->Motivostipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $motivostipo = $this->Motivostipos->patchEntity($motivostipo, $this->request->getData());
            if ($this->Motivostipos->save($motivostipo)) {
                $this->Flash->success(__('The motivostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The motivostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('motivostipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Motivostipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $motivostipo = $this->Motivostipos->get($id);
        if ($this->Motivostipos->delete($motivostipo)) {
            $this->Flash->success(__('The motivostipo has been deleted.'));
        } else {
            $this->Flash->error(__('The motivostipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
