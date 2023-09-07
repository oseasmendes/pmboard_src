<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Feedbacktipos Controller
 *
 * @property \App\Model\Table\FeedbacktiposTable $Feedbacktipos
 *
 * @method \App\Model\Entity\Feedbacktipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FeedbacktiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $feedbacktipos = $this->paginate($this->Feedbacktipos);

        $this->set(compact('feedbacktipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Feedbacktipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $feedbacktipo = $this->Feedbacktipos->get($id, [
            'contain' => ['Projetosprodutosfeedbacks']
        ]);

        $this->set('feedbacktipo', $feedbacktipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $feedbacktipo = $this->Feedbacktipos->newEntity();
        if ($this->request->is('post')) {
            $feedbacktipo = $this->Feedbacktipos->patchEntity($feedbacktipo, $this->request->getData());
            if ($this->Feedbacktipos->save($feedbacktipo)) {
                $this->Flash->success(__('The feedbacktipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feedbacktipo could not be saved. Please, try again.'));
        }
        $this->set(compact('feedbacktipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Feedbacktipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $feedbacktipo = $this->Feedbacktipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feedbacktipo = $this->Feedbacktipos->patchEntity($feedbacktipo, $this->request->getData());
            if ($this->Feedbacktipos->save($feedbacktipo)) {
                $this->Flash->success(__('The feedbacktipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feedbacktipo could not be saved. Please, try again.'));
        }
        $this->set(compact('feedbacktipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Feedbacktipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feedbacktipo = $this->Feedbacktipos->get($id);
        if ($this->Feedbacktipos->delete($feedbacktipo)) {
            $this->Flash->success(__('The feedbacktipo has been deleted.'));
        } else {
            $this->Flash->error(__('The feedbacktipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
