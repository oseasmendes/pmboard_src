<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agendatipos Controller
 *
 * @property \App\Model\Table\AgendatiposTable $Agendatipos
 *
 * @method \App\Model\Entity\Agendatipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgendatiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $agendatipos = $this->paginate($this->Agendatipos);

        $this->set(compact('agendatipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Agendatipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agendatipo = $this->Agendatipos->get($id, [
            'contain' => ['Agendas']
        ]);

        $this->set('agendatipo', $agendatipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agendatipo = $this->Agendatipos->newEntity();
        if ($this->request->is('post')) {
            $agendatipo = $this->Agendatipos->patchEntity($agendatipo, $this->request->getData());
            if ($this->Agendatipos->save($agendatipo)) {
                $this->Flash->success(__('The agendatipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agendatipo could not be saved. Please, try again.'));
        }
        $this->set(compact('agendatipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agendatipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agendatipo = $this->Agendatipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agendatipo = $this->Agendatipos->patchEntity($agendatipo, $this->request->getData());
            if ($this->Agendatipos->save($agendatipo)) {
                $this->Flash->success(__('The agendatipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agendatipo could not be saved. Please, try again.'));
        }
        $this->set(compact('agendatipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agendatipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agendatipo = $this->Agendatipos->get($id);
        if ($this->Agendatipos->delete($agendatipo)) {
            $this->Flash->success(__('The agendatipo has been deleted.'));
        } else {
            $this->Flash->error(__('The agendatipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
