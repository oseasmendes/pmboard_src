<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasupdates Controller
 *
 * @property \App\Model\Table\SistemasupdatesTable $Sistemasupdates
 *
 * @method \App\Model\Entity\Sistemasupdate[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasupdatesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
           // 'conditions'=> ['Sistemasupdates.statusfuncional_id = ' => 11],
            'order' => ['Sistemasupdates.sistema_id' => 'asc','Sistemasupdates.dataupdate' => 'desc'],
            'contain' => ['Sistemas', 'Statusfuncionals']
        ];
        $sistemasupdates = $this->paginate($this->Sistemasupdates);

        $this->set(compact('sistemasupdates'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasupdate id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasupdate = $this->Sistemasupdates->get($id, [
            'contain' => ['Sistemas', 
                            'Statusfuncionals',
                            'Sistemasupdatesflows'=> [
                                'sort' => ['Sistemasupdatesflows.data' => 'DESC']]
                            ]
        ]);

        $this->set('sistemasupdate', $sistemasupdate);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasupdate = $this->Sistemasupdates->newEntity();
        if ($this->request->is('post')) {
            $sistemasupdate = $this->Sistemasupdates->patchEntity($sistemasupdate, $this->request->getData());
            if ($this->Sistemasupdates->save($sistemasupdate)) {
                $this->Flash->success(__('The sistemasupdate has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasupdate could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasupdates->Sistemas->find('list',array('conditions'=>array('Sistemas.ativo'=>true),'order' => array('Sistemas.codenome' => 'asc')));
        $statusfuncionals = $this->Sistemasupdates->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('sistemasupdate', 'sistemas', 'statusfuncionals'));
    }

    public function addid($id = null)
    {
        $sistemasupdate = $this->Sistemasupdates->newEntity();
        if ($this->request->is('post')) {
            $sistemasupdate = $this->Sistemasupdates->patchEntity($sistemasupdate, $this->request->getData());
            $sistemasupdate->sistema_id = $id;
            if ($this->Sistemasupdates->save($sistemasupdate)) {
                $this->Flash->success(__('The sistemasupdate has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$id]);

            }
            $this->Flash->error(__('The sistemasupdate could not be saved. Please, try again.'));
        }

        $sistemasmodulos = $this->Sistemasupdates->Sistemasmodulos->find('list',array('conditions'=>array('Sistemasmodulos.sistema_id'=>$id),'order' => array('Sistemasmodulos.nome' => 'asc')));
        $sistemas = $this->Sistemasupdates->Sistemas->find('list',array('conditions'=>array('Sistemas.id'=>$id),'order' => array('Sistemas.referencia' => 'asc')));
        $statusfuncionals = $this->Sistemasupdates->Statusfuncionals->find('list',array('order' => array('descricao' => 'asc')) , ['limit' => 200]);
        $this->set(compact('sistemasupdate', 'sistemas','sistemasmodulos' ,'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasupdate id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasupdate = $this->Sistemasupdates->get($id, [
            'contain' => []
        ]);
        $sistemaid = $sistemasupdate->sistema_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasupdate = $this->Sistemasupdates->patchEntity($sistemasupdate, $this->request->getData());
            

            if ($this->Sistemasupdates->save($sistemasupdate)) {
                $this->Flash->success(__('The sistemasupdate has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sistemaid]);
            }
            $this->Flash->error(__('The sistemasupdate could not be saved. Please, try again.'));
        }
        //$sistemas = $this->Sistemasupdates->Sistemas->find('list', ['limit' => 200]);
        $sistemasmodulos = $this->Sistemasupdates->Sistemasmodulos->find('list',array('conditions'=>array('Sistemasmodulos.sistema_id'=>$sistemaid),'order' => array('Sistemasmodulos.nome' => 'asc')));
        $sistemas = $this->Sistemasupdates->Sistemas->find('list',array('conditions'=>array('Sistemas.id'=>$sistemaid),'order' => array('Sistemas.referencia' => 'asc')));
        $statusfuncionals = $this->Sistemasupdates->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('sistemasupdate', 'sistemas', 'statusfuncionals','sistemasmodulos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasupdate id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasupdate = $this->Sistemasupdates->get($id);

        $sistemaid = $sistemasupdate->sistema_id;
        if ($this->Sistemasupdates->delete($sistemasupdate)) {
            $this->Flash->success(__('The sistemasupdate has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasupdate could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sistemaid]);
        
    }
}
