<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultoresausencias Controller
 *
 * @property \App\Model\Table\ConsultoresausenciasTable $Consultoresausencias
 *
 * @method \App\Model\Entity\Consultoresausencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsultoresausenciasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores', 'Statusfuncionals', 'Consultoresausenciastipos'],
            'conditions' => ['Consultoresausencias.statusfuncional_id <> '=> 14,'Consultoresausencias.ativo = '=> 1],             
            'order' => ['Consultoresausencias.datainicio' => 'asc']
        ];
        $consultoresausencias = $this->paginate($this->Consultoresausencias);

        $this->set(compact('consultoresausencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Consultoresausencia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultoresausencia = $this->Consultoresausencias->get($id, [
            'contain' => ['Consultores', 'Statusfuncionals', 'Consultoresausenciastipos']
        ]);

        $this->set('consultoresausencia', $consultoresausencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultoresausencia = $this->Consultoresausencias->newEntity();
        if ($this->request->is('post')) {
            $consultoresausencia = $this->Consultoresausencias->patchEntity($consultoresausencia, $this->request->getData());
            if ($this->Consultoresausencias->save($consultoresausencia)) {
                $this->Flash->success(__('The consultoresausencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoresausencia could not be saved. Please, try again.'));
        }
        $consultores = $this->Consultoresausencias->Consultores->find('list',array('conditions'=>array('Consultores.engajado ='=> true),'order' => array('Consultores.nome' => 'asc')) , ['limit' => 200]);
        $statusfuncionals = $this->Consultoresausencias->Statusfuncionals->find('list', ['limit' => 200]);
        $consultoresausenciastipos = $this->Consultoresausencias->Consultoresausenciastipos->find('list', ['limit' => 200]);
        $this->set(compact('consultoresausencia', 'consultores', 'statusfuncionals', 'consultoresausenciastipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultoresausencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultoresausencia = $this->Consultoresausencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultoresausencia = $this->Consultoresausencias->patchEntity($consultoresausencia, $this->request->getData());
            if ($this->Consultoresausencias->save($consultoresausencia)) {
                $this->Flash->success(__('The consultoresausencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoresausencia could not be saved. Please, try again.'));
        }
        $consultores = $this->Consultoresausencias->Consultores->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Consultoresausencias->Statusfuncionals->find('list', ['limit' => 200]);
        $consultoresausenciastipos = $this->Consultoresausencias->Consultoresausenciastipos->find('list', ['limit' => 200]);
        $this->set(compact('consultoresausencia', 'consultores', 'statusfuncionals', 'consultoresausenciastipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultoresausencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultoresausencia = $this->Consultoresausencias->get($id);
        if ($this->Consultoresausencias->delete($consultoresausencia)) {
            $this->Flash->success(__('The consultoresausencia has been deleted.'));
        } else {
            $this->Flash->error(__('The consultoresausencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
