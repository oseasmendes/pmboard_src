<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pillars Controller
 *
 * @property \App\Model\Table\PillarsTable $Pillars
 *
 * @method \App\Model\Entity\Pillar[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PillarsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pillars = $this->paginate($this->Pillars);

        $this->set(compact('pillars'));
    }

    /**
     * View method
     *
     * @param string|null $id Pillar id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pillar = $this->Pillars->get($id, [
            'contain' => ['Projetossprintsretrosactions']
        ]);

        $this->set('pillar', $pillar);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pillar = $this->Pillars->newEntity();
        if ($this->request->is('post')) {
            $pillar = $this->Pillars->patchEntity($pillar, $this->request->getData());
            if ($this->Pillars->save($pillar)) {
                $this->Flash->success(__('The pillar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pillar could not be saved. Please, try again.'));
        }
        $this->set(compact('pillar'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pillar id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pillar = $this->Pillars->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pillar = $this->Pillars->patchEntity($pillar, $this->request->getData());
            if ($this->Pillars->save($pillar)) {
                $this->Flash->success(__('The pillar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pillar could not be saved. Please, try again.'));
        }
        $this->set(compact('pillar'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pillar id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pillar = $this->Pillars->get($id);
        if ($this->Pillars->delete($pillar)) {
            $this->Flash->success(__('The pillar has been deleted.'));
        } else {
            $this->Flash->error(__('The pillar could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
