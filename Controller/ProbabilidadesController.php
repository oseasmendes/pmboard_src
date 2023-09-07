<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Probabilidades Controller
 *
 * @property \App\Model\Table\ProbabilidadesTable $Probabilidades
 *
 * @method \App\Model\Entity\Probabilidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProbabilidadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $probabilidades = $this->paginate($this->Probabilidades);

        $this->set(compact('probabilidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Probabilidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $probabilidade = $this->Probabilidades->get($id, [
            'contain' => ['Projetosprodutosriscos']
        ]);

        $this->set('probabilidade', $probabilidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $probabilidade = $this->Probabilidades->newEntity();
        if ($this->request->is('post')) {
            $probabilidade = $this->Probabilidades->patchEntity($probabilidade, $this->request->getData());
            if ($this->Probabilidades->save($probabilidade)) {
                $this->Flash->success(__('The probabilidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The probabilidade could not be saved. Please, try again.'));
        }
        $this->set(compact('probabilidade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Probabilidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $probabilidade = $this->Probabilidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $probabilidade = $this->Probabilidades->patchEntity($probabilidade, $this->request->getData());
            if ($this->Probabilidades->save($probabilidade)) {
                $this->Flash->success(__('The probabilidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The probabilidade could not be saved. Please, try again.'));
        }
        $this->set(compact('probabilidade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Probabilidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $probabilidade = $this->Probabilidades->get($id);
        if ($this->Probabilidades->delete($probabilidade)) {
            $this->Flash->success(__('The probabilidade has been deleted.'));
        } else {
            $this->Flash->error(__('The probabilidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
