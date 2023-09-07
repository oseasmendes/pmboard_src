<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetossprintsallocations Controller
 *
 * @property \App\Model\Table\ProjetossprintsallocationsTable $Projetossprintsallocations
 *
 * @method \App\Model\Entity\Projetossprintsallocation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetossprintsallocationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetossprints', 'Consultores', 'Competencias']
        ];
        $projetossprintsallocations = $this->paginate($this->Projetossprintsallocations);

        $this->set(compact('projetossprintsallocations'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetossprintsallocation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetossprintsallocation = $this->Projetossprintsallocations->get($id, [
            'contain' => ['Projetossprints', 'Consultores', 'Competencias']
        ]);

        $this->set('projetossprintsallocation', $projetossprintsallocation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetossprintsallocation = $this->Projetossprintsallocations->newEntity();
        if ($this->request->is('post')) {
            $projetossprintsallocation = $this->Projetossprintsallocations->patchEntity($projetossprintsallocation, $this->request->getData());
            if ($this->Projetossprintsallocations->save($projetossprintsallocation)) {
                $this->Flash->success(__('The projetossprintsallocation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsallocation could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Projetossprintsallocations->Projetossprints->find('list', ['limit' => 200]);
        $consultores = $this->Projetossprintsallocations->Consultores->find('list', ['limit' => 200]);
        $competencias = $this->Projetossprintsallocations->Competencias->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsallocation', 'projetossprints', 'consultores', 'competencias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetossprintsallocation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetossprintsallocation = $this->Projetossprintsallocations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetossprintsallocation = $this->Projetossprintsallocations->patchEntity($projetossprintsallocation, $this->request->getData());
            if ($this->Projetossprintsallocations->save($projetossprintsallocation)) {
                $this->Flash->success(__('The projetossprintsallocation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsallocation could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Projetossprintsallocations->Projetossprints->find('list', ['limit' => 200]);
        $consultores = $this->Projetossprintsallocations->Consultores->find('list', ['limit' => 200]);
        $competencias = $this->Projetossprintsallocations->Competencias->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsallocation', 'projetossprints', 'consultores', 'competencias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetossprintsallocation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetossprintsallocation = $this->Projetossprintsallocations->get($id);
        if ($this->Projetossprintsallocations->delete($projetossprintsallocation)) {
            $this->Flash->success(__('The projetossprintsallocation has been deleted.'));
        } else {
            $this->Flash->error(__('The projetossprintsallocation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
