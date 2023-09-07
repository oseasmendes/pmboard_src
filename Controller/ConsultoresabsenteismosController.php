<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultoresabsenteismos Controller
 *
 * @property \App\Model\Table\ConsultoresabsenteismosTable $Consultoresabsenteismos
 *
 * @method \App\Model\Entity\Consultoresabsenteismo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsultoresabsenteismosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores']
        ];
        $consultoresabsenteismos = $this->paginate($this->Consultoresabsenteismos);

        $this->set(compact('consultoresabsenteismos'));
    }

    /**
     * View method
     *
     * @param string|null $id Consultoresabsenteismo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultoresabsenteismo = $this->Consultoresabsenteismos->get($id, [
            'contain' => ['Consultores']
        ]);

        $this->set('consultoresabsenteismo', $consultoresabsenteismo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultoresabsenteismo = $this->Consultoresabsenteismos->newEntity();
        if ($this->request->is('post')) {
            $consultoresabsenteismo = $this->Consultoresabsenteismos->patchEntity($consultoresabsenteismo, $this->request->getData());
            if ($this->Consultoresabsenteismos->save($consultoresabsenteismo)) {
                $this->Flash->success(__('The consultoresabsenteismo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoresabsenteismo could not be saved. Please, try again.'));
        }
        
        $consultores = $this->Consultoresabsenteismos->Consultores->find('list',array('order' => array('nome' => 'asc')), ['limit' => 200]);

        $this->set(compact('consultoresabsenteismo', 'consultores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultoresabsenteismo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultoresabsenteismo = $this->Consultoresabsenteismos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultoresabsenteismo = $this->Consultoresabsenteismos->patchEntity($consultoresabsenteismo, $this->request->getData());
            if ($this->Consultoresabsenteismos->save($consultoresabsenteismo)) {
                $this->Flash->success(__('The consultoresabsenteismo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoresabsenteismo could not be saved. Please, try again.'));
        }
        
        $consultores = $this->Consultoresabsenteismos->Consultores->find('list',array('order' => array('nome' => 'asc')), ['limit' => 200]);

        

        $this->set(compact('consultoresabsenteismo', 'consultores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultoresabsenteismo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultoresabsenteismo = $this->Consultoresabsenteismos->get($id);
        if ($this->Consultoresabsenteismos->delete($consultoresabsenteismo)) {
            $this->Flash->success(__('The consultoresabsenteismo has been deleted.'));
        } else {
            $this->Flash->error(__('The consultoresabsenteismo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
