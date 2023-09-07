<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemascfgintegrations Controller
 *
 * @property \App\Model\Table\SistemascfgintegrationsTable $Sistemascfgintegrations
 *
 * @method \App\Model\Entity\Sistemascfgintegration[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemascfgintegrationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tecnologias', 'Sistemas', 'Integrations']
        ];
        $sistemascfgintegrations = $this->paginate($this->Sistemascfgintegrations);

        $this->set(compact('sistemascfgintegrations'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemascfgintegration id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemascfgintegration = $this->Sistemascfgintegrations->get($id, [
            'contain' => ['Tecnologias', 'Sistemas', 'Integrations']
        ]);

        $this->set('sistemascfgintegration', $sistemascfgintegration);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemascfgintegration = $this->Sistemascfgintegrations->newEntity();
        if ($this->request->is('post')) {
            $sistemascfgintegration = $this->Sistemascfgintegrations->patchEntity($sistemascfgintegration, $this->request->getData());
             $sistemascfgintegration->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemascfgintegrations->save($sistemascfgintegration)) {
                $this->Flash->success(__('The Integration has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The Integration could not be saved. Please, try again.'));
        }
        $tecnologias = $this->Sistemascfgintegrations->Tecnologias->find('list',array('order' => array('descricao' => 'asc')), ['limit' => 2000]);
        $sistemas = $this->Sistemascfgintegrations->Sistemas->find('list',array('order' => array('descricao' => 'asc')), ['limit' => 2000]);
        $integrations = $this->Sistemascfgintegrations->Integrations->find('list',array('order' => array('descricao' => 'asc')), ['limit' => 2000]);
        $sistemascfgtransactions = $this->Sistemascfgintegrations->Sistemascfgtransactions->find('list',array('order' => array('descricao' => 'asc')), ['limit' => 2000]);
        $this->set(compact('sistemascfgintegration', 'tecnologias', 'sistemas', 'integrations','sistemascfgtransactions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemascfgintegration id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemascfgintegration = $this->Sistemascfgintegrations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemascfgintegration = $this->Sistemascfgintegrations->patchEntity($sistemascfgintegration, $this->request->getData());
            if ($this->Sistemascfgintegrations->save($sistemascfgintegration)) {
                $this->Flash->success(__('The sistemascfgintegration has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sistemascfgintegration->sistema_id]);
            }
            $this->Flash->error(__('The sistemascfgintegration could not be saved. Please, try again.'));
        }

        $tecnologias = $this->Sistemascfgintegrations->Tecnologias->find('list',array('order' => array('descricao' => 'asc')), ['limit' => 2000]);
        $sistemas = $this->Sistemascfgintegrations->Sistemas->find('list',array('order' => array('descricao' => 'asc')), ['limit' => 2000]);
        $integrations = $this->Sistemascfgintegrations->Integrations->find('list',array('order' => array('descricao' => 'asc')), ['limit' => 2000]);
        $sistemascfgtransactions = $this->Sistemascfgintegrations->Sistemascfgtransactions->find('list',array('order' => array('descricao' => 'asc')), ['limit' => 2000]);
        $this->set(compact('sistemascfgintegration', 'tecnologias', 'sistemas', 'integrations','sistemascfgtransactions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemascfgintegration id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemascfgintegration = $this->Sistemascfgintegrations->get($id);
        if ($this->Sistemascfgintegrations->delete($sistemascfgintegration)) {
            $this->Flash->success(__('The sistemascfgintegration has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemascfgintegration could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sistemascfgintegration->sistema_id]);
        
    }
}
