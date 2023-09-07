<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Competencias Controller
 *
 * @property \App\Model\Table\CompetenciasTable $Competencias
 *
 * @method \App\Model\Entity\Competencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CompetenciasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $competencias = $this->paginate($this->Competencias);

        $this->set(compact('competencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Competencia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $competencia = $this->Competencias->get($id, [
            'contain' => ['Projetosalocacoespapeis']
        ]);

        $this->set('competencia', $competencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $competencia = $this->Competencias->newEntity();
        if ($this->request->is('post')) {
            $competencia = $this->Competencias->patchEntity($competencia, $this->request->getData());
            if ($this->Competencias->save($competencia)) {
                $this->Flash->success(__('The competencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The competencia could not be saved. Please, try again.'));
        }
        $this->set(compact('competencia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Competencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $competencia = $this->Competencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $competencia = $this->Competencias->patchEntity($competencia, $this->request->getData());
            if ($this->Competencias->save($competencia)) {
                $this->Flash->success(__('The competencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The competencia could not be saved. Please, try again.'));
        }
        $this->set(compact('competencia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Competencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $competencia = $this->Competencias->get($id);
        if ($this->Competencias->delete($competencia)) {
            $this->Flash->success(__('The competencia has been deleted.'));
        } else {
            $this->Flash->error(__('The competencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
