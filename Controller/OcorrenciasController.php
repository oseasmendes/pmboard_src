<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ocorrencias Controller
 *
 * @property \App\Model\Table\OcorrenciasTable $Ocorrencias
 *
 * @method \App\Model\Entity\Ocorrencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OcorrenciasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ocorrenciastipos']
        ];
        $ocorrencias = $this->paginate($this->Ocorrencias);

        $this->set(compact('ocorrencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ocorrencia = $this->Ocorrencias->get($id, [
            'contain' => ['Ocorrenciastipos', 'Consultoresnotas']
        ]);

        $this->set('ocorrencia', $ocorrencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ocorrencia = $this->Ocorrencias->newEntity();
        if ($this->request->is('post')) {
            $ocorrencia = $this->Ocorrencias->patchEntity($ocorrencia, $this->request->getData());
            if ($this->Ocorrencias->save($ocorrencia)) {
                $this->Flash->success(__('The ocorrencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ocorrencia could not be saved. Please, try again.'));
        }
        $ocorrenciastipos = $this->Ocorrencias->Ocorrenciastipos->find('list', ['limit' => 200]);
        $this->set(compact('ocorrencia', 'ocorrenciastipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ocorrencia = $this->Ocorrencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ocorrencia = $this->Ocorrencias->patchEntity($ocorrencia, $this->request->getData());
            if ($this->Ocorrencias->save($ocorrencia)) {
                $this->Flash->success(__('The ocorrencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ocorrencia could not be saved. Please, try again.'));
        }
        $ocorrenciastipos = $this->Ocorrencias->Ocorrenciastipos->find('list', ['limit' => 200]);
        $this->set(compact('ocorrencia', 'ocorrenciastipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ocorrencia = $this->Ocorrencias->get($id);
        if ($this->Ocorrencias->delete($ocorrencia)) {
            $this->Flash->success(__('The ocorrencia has been deleted.'));
        } else {
            $this->Flash->error(__('The ocorrencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
