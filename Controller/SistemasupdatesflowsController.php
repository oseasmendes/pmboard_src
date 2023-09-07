<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasupdatesflows Controller
 *
 * @property \App\Model\Table\SistemasupdatesflowsTable $Sistemasupdatesflows
 *
 * @method \App\Model\Entity\Sistemasupdatesflow[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasupdatesflowsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemasupdates', 'Motivos', 'Ambientes', 'Statusfuncionals']
        ];
        $sistemasupdatesflows = $this->paginate($this->Sistemasupdatesflows);

        $this->set(compact('sistemasupdatesflows'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasupdatesflow id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasupdatesflow = $this->Sistemasupdatesflows->get($id, [
            'contain' => ['Sistemasupdates', 'Motivos', 'Ambientes', 'Statusfuncionals','Projetosprodutosentregas']
        ]);

        $this->set('sistemasupdatesflow', $sistemasupdatesflow);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasupdatesflow = $this->Sistemasupdatesflows->newEntity();
        if ($this->request->is('post')) {
            $sistemasupdatesflow = $this->Sistemasupdatesflows->patchEntity($sistemasupdatesflow, $this->request->getData());
            if ($this->Sistemasupdatesflows->save($sistemasupdatesflow)) {
                $this->Flash->success(__('The sistemasupdatesflow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasupdatesflow could not be saved. Please, try again.'));
        }
        $sistemasupdates = $this->Sistemasupdatesflows->Sistemasupdates->find('list', ['limit' => 200]);
        $motivos = $this->Sistemasupdatesflows->Motivos->find('list', ['limit' => 200]);
        $ambientes = $this->Sistemasupdatesflows->Ambientes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Sistemasupdatesflows->Statusfuncionals->find('list', ['limit' => 200]);

                                                    
        $projetosprodutosentregas = $this->Sistemasupdatesflows->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.statusfuncional_id != '=> 14,
                                                                                                                                'Projetosprodutosentregas.comentario NOT IN '=> ['Implementado em Produção','Cancelado','Hold TI','Hold Area','Closed','Resolved']),
                                                                                                                                'order' => array('Projetosprodutosentregas.Descricao' => 'desc')));
        
                                                                                                                                $this->set(compact('sistemasupdatesflow', 'sistemasupdates', 'motivos', 'ambientes', 'statusfuncionals','projetosprodutosentregas'));
    }

    public function addid($id = null)
    {
        $sistemasupdatesflow = $this->Sistemasupdatesflows->newEntity();
        $sistemasupdatesflow->sistemasupdate_id = $id;
        if ($this->request->is('post')) {
            $sistemasupdatesflow = $this->Sistemasupdatesflows->patchEntity($sistemasupdatesflow, $this->request->getData());
            if ($this->Sistemasupdatesflows->save($sistemasupdatesflow)) {
                $this->Flash->success(__('The sistemasupdatesflow has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemasupdates','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemasupdatesflow could not be saved. Please, try again.'));
        }
        $sistemasupdates = $this->Sistemasupdatesflows->Sistemasupdates->find('list', ['limit' => 200]);
        $motivos = $this->Sistemasupdatesflows->Motivos->find('list',array('order' => array('descricao' => 'asc')),['limit' => 1200]);
        $ambientes = $this->Sistemasupdatesflows->Ambientes->find('list',array('order' => array('descricao' => 'asc')),['limit' => 1200]);
        $statusfuncionals = $this->Sistemasupdatesflows->Statusfuncionals->find('list',array('order' => array('descricao' => 'asc')),['limit' => 1200]);
        $projetosprodutosentregas = $this->Sistemasupdatesflows->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.statusfuncional_id != '=> 14,
        'Projetosprodutosentregas.comentario NOT IN '=> ['Implementado em Produção','Cancelado','Hold TI','Hold Area','Closed','Resolved']),
        'order' => array('Projetosprodutosentregas.Canal' => 'asc','Projetosprodutosentregas.Referencia' => 'desc')));

        
                                                                                                                                $this->set(compact('sistemasupdatesflow', 'sistemasupdates', 'motivos', 'ambientes', 'statusfuncionals','projetosprodutosentregas'));
        $this->set(compact('sistemasupdatesflow', 'sistemasupdates', 'motivos', 'ambientes', 'statusfuncionals','projetosprodutosentregas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasupdatesflow id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasupdatesflow = $this->Sistemasupdatesflows->get($id, [
            'contain' => []
        ]);
        $supdid = $sistemasupdatesflow->sistemasupdate_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasupdatesflow = $this->Sistemasupdatesflows->patchEntity($sistemasupdatesflow, $this->request->getData());
            if ($this->Sistemasupdatesflows->save($sistemasupdatesflow)) {
                $this->Flash->success(__('The sistemasupdatesflow has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemasupdates','action' => 'view',$supdid]);
            }
            $this->Flash->error(__('The sistemasupdatesflow could not be saved. Please, try again.'));
        }
        $sistemasupdates = $this->Sistemasupdatesflows->Sistemasupdates->find('list', ['limit' => 200]);
        $motivos = $this->Sistemasupdatesflows->Motivos->find('list', ['limit' => 200]);
        $ambientes = $this->Sistemasupdatesflows->Ambientes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Sistemasupdatesflows->Statusfuncionals->find('list', ['limit' => 200]);
        //$projetosprodutosentregas = $this->Sistemasupdatesflows->Projetosprodutosentregas->find('list', ['limit' => 200]);

        $projetosprodutosentregas = $this->Sistemasupdatesflows->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.statusfuncional_id != '=> 14,
                                                                                                                                'Projetosprodutosentregas.comentario NOT IN '=> ['Implementado em Produção','Cancelado','Hold TI','Hold Area','Closed','Resolved']),
                                                                                                                                'order' => array('Projetosprodutosentregas.Canal' => 'asc','Projetosprodutosentregas.Referencia' => 'desc')));
        
                                                                                                                                $this->set(compact('sistemasupdatesflow', 'sistemasupdates', 'motivos', 'ambientes', 'statusfuncionals','projetosprodutosentregas'));
        $this->set(compact('sistemasupdatesflow', 'sistemasupdates', 'motivos', 'ambientes', 'statusfuncionals','projetosprodutosentregas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasupdatesflow id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasupdatesflow = $this->Sistemasupdatesflows->get($id);
        $supdid = $sistemasupdatesflow->sistemasupdate_id;
        if ($this->Sistemasupdatesflows->delete($sistemasupdatesflow)) {
            $this->Flash->success(__('The sistemasupdatesflow has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasupdatesflow could not be deleted. Please, try again.'));
        }
        return $this->redirect(['controller'=>'Sistemasupdates','action' => 'view',$supdid]);
        //return $this->redirect(['action' => 'index']);
    }
}
