<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultoresvrstecnologias Controller
 *
 * @property \App\Model\Table\ConsultoresvrstecnologiasTable $Consultoresvrstecnologias
 *
 * @method \App\Model\Entity\Consultoresvrstecnologia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsultoresvrstecnologiasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores', 'Tecnologias', 'Knowhows']

        ];
        $consultoresvrstecnologias = $this->paginate($this->Consultoresvrstecnologias);

        $this->set(compact('consultoresvrstecnologias'));
    }

    /**
     * View method
     *
     * @param string|null $id Consultoresvrstecnologia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultoresvrstecnologia = $this->Consultoresvrstecnologias->get($id, [
            'contain' => ['Consultores', 'Tecnologias', 'Knowhows']
        ]);

        $this->set('consultoresvrstecnologia', $consultoresvrstecnologia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultoresvrstecnologia = $this->Consultoresvrstecnologias->newEntity();
        if ($this->request->is('post')) {
            $consultoresvrstecnologia = $this->Consultoresvrstecnologias->patchEntity($consultoresvrstecnologia, $this->request->getData());
            if ($this->Consultoresvrstecnologias->save($consultoresvrstecnologia)) {
                $this->Flash->success(__('The consultoresvrstecnologia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoresvrstecnologia could not be saved. Please, try again.'));
        }
        $consultores = $this->Consultoresvrstecnologias->Consultores->find('list',array('order' => array('nome' => 'asc')) ,['limit' => 2000]);

         

        $tecnologias = $this->Consultoresvrstecnologias->Tecnologias->find('list',array('order' => array('descricao' => 'asc')) ,['limit' => 2000]);
        $knowhows = $this->Consultoresvrstecnologias->Knowhows->find('list', ['limit' => 200]);
        $this->set(compact('consultoresvrstecnologia', 'consultores', 'tecnologias', 'knowhows'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultoresvrstecnologia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultoresvrstecnologia = $this->Consultoresvrstecnologias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultoresvrstecnologia = $this->Consultoresvrstecnologias->patchEntity($consultoresvrstecnologia, $this->request->getData());
            if ($this->Consultoresvrstecnologias->save($consultoresvrstecnologia)) {
                $this->Flash->success(__('The consultoresvrstecnologia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoresvrstecnologia could not be saved. Please, try again.'));
        }
        $consultores = $this->Consultoresvrstecnologias->Consultores->find('list', ['limit' => 200]);
        $tecnologias = $this->Consultoresvrstecnologias->Tecnologias->find('list', ['limit' => 200]);
        $knowhows = $this->Consultoresvrstecnologias->Knowhows->find('list', ['limit' => 200]);
        $this->set(compact('consultoresvrstecnologia', 'consultores', 'tecnologias', 'knowhows'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultoresvrstecnologia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultoresvrstecnologia = $this->Consultoresvrstecnologias->get($id);
        if ($this->Consultoresvrstecnologias->delete($consultoresvrstecnologia)) {
            $this->Flash->success(__('The consultoresvrstecnologia has been deleted.'));
        } else {
            $this->Flash->error(__('The consultoresvrstecnologia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
