<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ocorrenciastipos Controller
 *
 * @property \App\Model\Table\OcorrenciastiposTable $Ocorrenciastipos
 *
 * @method \App\Model\Entity\Ocorrenciastipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OcorrenciastiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ocorrenciastipos = $this->paginate($this->Ocorrenciastipos);

        $this->set(compact('ocorrenciastipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Ocorrenciastipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ocorrenciastipo = $this->Ocorrenciastipos->get($id, [
            'contain' => ['Ocorrencias']
        ]);

        $this->set('ocorrenciastipo', $ocorrenciastipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ocorrenciastipo = $this->Ocorrenciastipos->newEntity();
        if ($this->request->is('post')) {
            $ocorrenciastipo = $this->Ocorrenciastipos->patchEntity($ocorrenciastipo, $this->request->getData());
            if ($this->Ocorrenciastipos->save($ocorrenciastipo)) {
                $this->Flash->success(__('The ocorrenciastipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ocorrenciastipo could not be saved. Please, try again.'));
        }
        $this->set(compact('ocorrenciastipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ocorrenciastipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ocorrenciastipo = $this->Ocorrenciastipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ocorrenciastipo = $this->Ocorrenciastipos->patchEntity($ocorrenciastipo, $this->request->getData());
            if ($this->Ocorrenciastipos->save($ocorrenciastipo)) {
                $this->Flash->success(__('The ocorrenciastipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ocorrenciastipo could not be saved. Please, try again.'));
        }
        $this->set(compact('ocorrenciastipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ocorrenciastipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ocorrenciastipo = $this->Ocorrenciastipos->get($id);
        if ($this->Ocorrenciastipos->delete($ocorrenciastipo)) {
            $this->Flash->success(__('The ocorrenciastipo has been deleted.'));
        } else {
            $this->Flash->error(__('The ocorrenciastipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
