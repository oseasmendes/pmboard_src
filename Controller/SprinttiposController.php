<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sprinttipos Controller
 *
 * @property \App\Model\Table\SprinttiposTable $Sprinttipos
 *
 * @method \App\Model\Entity\Sprinttipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SprinttiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $sprinttipos = $this->paginate($this->Sprinttipos);

        $this->set(compact('sprinttipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sprinttipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sprinttipo = $this->Sprinttipos->get($id, [
            'contain' => ['Projetosprodutossprints']
        ]);

        $this->set('sprinttipo', $sprinttipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sprinttipo = $this->Sprinttipos->newEntity();
        if ($this->request->is('post')) {
            $sprinttipo = $this->Sprinttipos->patchEntity($sprinttipo, $this->request->getData());
            if ($this->Sprinttipos->save($sprinttipo)) {
                $this->Flash->success(__('The sprinttipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sprinttipo could not be saved. Please, try again.'));
        }
        $this->set(compact('sprinttipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sprinttipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sprinttipo = $this->Sprinttipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sprinttipo = $this->Sprinttipos->patchEntity($sprinttipo, $this->request->getData());
            if ($this->Sprinttipos->save($sprinttipo)) {
                $this->Flash->success(__('The sprinttipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sprinttipo could not be saved. Please, try again.'));
        }
        $this->set(compact('sprinttipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sprinttipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sprinttipo = $this->Sprinttipos->get($id);
        if ($this->Sprinttipos->delete($sprinttipo)) {
            $this->Flash->success(__('The sprinttipo has been deleted.'));
        } else {
            $this->Flash->error(__('The sprinttipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
