<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosfeedbacks Controller
 *
 * @property \App\Model\Table\ProjetosprodutosfeedbacksTable $Projetosprodutosfeedbacks
 *
 * @method \App\Model\Entity\Projetosprodutosfeedback[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosfeedbacksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Feedbacktipos', 'Projetosprodutos']
        ];
        $projetosprodutosfeedbacks = $this->paginate($this->Projetosprodutosfeedbacks);

        $this->set(compact('projetosprodutosfeedbacks'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosfeedback id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosfeedback = $this->Projetosprodutosfeedbacks->get($id, [
            'contain' => ['Feedbacktipos', 'Projetosprodutos']
        ]);

        $this->set('projetosprodutosfeedback', $projetosprodutosfeedback);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutosfeedback = $this->Projetosprodutosfeedbacks->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosfeedback = $this->Projetosprodutosfeedbacks->patchEntity($projetosprodutosfeedback, $this->request->getData());
            if ($this->Projetosprodutosfeedbacks->save($projetosprodutosfeedback)) {
                $this->Flash->success(__('The projetosprodutosfeedback has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosfeedback could not be saved. Please, try again.'));
        }
        $feedbacktipos = $this->Projetosprodutosfeedbacks->Feedbacktipos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Projetosprodutosfeedbacks->Projetosprodutos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosfeedback', 'feedbacktipos', 'projetosprodutos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosfeedback id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosfeedback = $this->Projetosprodutosfeedbacks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosfeedback = $this->Projetosprodutosfeedbacks->patchEntity($projetosprodutosfeedback, $this->request->getData());
            if ($this->Projetosprodutosfeedbacks->save($projetosprodutosfeedback)) {
                $this->Flash->success(__('The projetosprodutosfeedback has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosfeedback could not be saved. Please, try again.'));
        }
        $feedbacktipos = $this->Projetosprodutosfeedbacks->Feedbacktipos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Projetosprodutosfeedbacks->Projetosprodutos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosfeedback', 'feedbacktipos', 'projetosprodutos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosfeedback id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosfeedback = $this->Projetosprodutosfeedbacks->get($id);
        if ($this->Projetosprodutosfeedbacks->delete($projetosprodutosfeedback)) {
            $this->Flash->success(__('The projetosprodutosfeedback has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosfeedback could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
