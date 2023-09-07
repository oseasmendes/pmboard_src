<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasmodulos Controller
 *
 * @property \App\Model\Table\SistemasmodulosTable $Sistemasmodulos
 *
 * @method \App\Model\Entity\Sistemasmodulo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasmodulosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Statusfuncionals']
        ];
        $sistemasmodulos = $this->paginate($this->Sistemasmodulos);

        $this->set(compact('sistemasmodulos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasmodulo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasmodulo = $this->Sistemasmodulos->get($id, [
            'contain' => ['Sistemas', 'Statusfuncionals']
        ]);

        $this->set('sistemasmodulo', $sistemasmodulo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function addnoid()
    {
        $sistemasmodulo = $this->Sistemasmodulos->newEntity();
        if ($this->request->is('post')) {
            $sistemasmodulo = $this->Sistemasmodulos->patchEntity($sistemasmodulo, $this->request->getData());
            if ($this->Sistemasmodulos->save($sistemasmodulo)) {
                $this->Flash->success(__('The sistemasmodulo has been saved.'));

                return $this->redirect(['action' => 'index']);
                
            }
            $this->Flash->error(__('The sistemasmodulo could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasmodulos->Sistemas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Sistemasmodulos->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('sistemasmodulo', 'sistemas', 'statusfuncionals'));
    }

    public function add($id = null)
    {
        $sistemasmodulo = $this->Sistemasmodulos->newEntity();
        if ($this->request->is('post')) {
            $sistemasmodulo = $this->Sistemasmodulos->patchEntity($sistemasmodulo, $this->request->getData());
            $sistemasmodulo->sistema_id = $id;
            if ($this->Sistemasmodulos->save($sistemasmodulo)) {
                $this->Flash->success(__('The sistemasmodulo has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemasmodulo could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasmodulos->Sistemas->find('list', array('conditions'=>array('Sistemas.id'=>$id),'order' => array('descricao' => 'asc')) , ['limit' => 200]);
        $statusfuncionals = $this->Sistemasmodulos->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('sistemasmodulo', 'sistemas', 'statusfuncionals'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Sistemasmodulo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasmodulo = $this->Sistemasmodulos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasmodulo = $this->Sistemasmodulos->patchEntity($sistemasmodulo, $this->request->getData());
           // $sistemasmodulo->sistema_id = $id;

             $sistemaid = $sistemasmodulo->sistema_id;
            if ($this->Sistemasmodulos->save($sistemasmodulo)) {
                $this->Flash->success(__('The sistemasmodulo has been saved.'));

                //return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sistemaid]);
            }
            $this->Flash->error(__('The sistemasmodulo could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasmodulos->Sistemas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Sistemasmodulos->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('sistemasmodulo', 'sistemas', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasmodulo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasmodulo = $this->Sistemasmodulos->get($id);
        if ($this->Sistemasmodulos->delete($sistemasmodulo)) {
            $this->Flash->success(__('The sistemasmodulo has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasmodulo could not be deleted. Please, try again.'));
        }

        
        return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sistemasmodulo->id]);
    }
}
