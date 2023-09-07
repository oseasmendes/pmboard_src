<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregasreqs Controller
 *
 * @property \App\Model\Table\ProjetosentregasreqsTable $Projetosentregasreqs
 *
 * @method \App\Model\Entity\Projetosentregasreq[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasreqsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosentregas', 'Entregastipos', 'Processos', 'Participantes', 'Statusfuncionals', 'Consultores', 'Unidademedidas', 'Frentes'],
            
        ];
        $projetosentregasreqs = $this->paginate($this->Projetosentregasreqs);

        $this->set(compact('projetosentregasreqs'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregasreq id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregasreq = $this->Projetosentregasreqs->get($id, [
            'contain' => ['Projetosprodutosentregas', 
                        'Entregastipos', 
                        'Processos', 
                        'Participantes', 
                        'Statusfuncionals', 
                        'Consultores', 
                        'Unidademedidas', 
                        'Frentes', 
                        'Projetosentregasreqsrefs'=> [
                            'sort' => ['Projetosentregasreqsrefs.ordem' => 'ASC']]]
        ]);

        $this->set('projetosentregasreq', $projetosentregasreq);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosentregasreq = $this->Projetosentregasreqs->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasreq = $this->Projetosentregasreqs->patchEntity($projetosentregasreq, $this->request->getData());
            if ($this->Projetosentregasreqs->save($projetosentregasreq)) {
                $this->Flash->success(__('The projetosentregasreq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregasreq could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosentregasreqs->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $entregastipos = $this->Projetosentregasreqs->Entregastipos->find('list', ['limit' => 200]);
        $processos = $this->Projetosentregasreqs->Processos->find('list', ['limit' => 200]);
        $participantes = $this->Projetosentregasreqs->Participantes->find('list', array('conditions'=>array('Participantes.empresa_id'=> '8'),'order' => array('Participantes.nome' => 'asc')));
        $statusfuncionals = $this->Projetosentregasreqs->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosentregasreqs->Consultores->find('list', ['limit' => 200]);
        $unidademedidas = $this->Projetosentregasreqs->Unidademedidas->find('list', ['limit' => 200]);
        $frentes = $this->Projetosentregasreqs->Frentes->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreq', 'projetosprodutosentregas', 'entregastipos', 'processos', 'participantes', 'statusfuncionals', 'consultores', 'unidademedidas', 'frentes'));
    }


    public function addid($id = null)
    {
        $projetosentregasreq = $this->Projetosentregasreqs->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasreq = $this->Projetosentregasreqs->patchEntity($projetosentregasreq, $this->request->getData());
            $projetosentregasreq->projetosprodutosentrega_id = $id;    
            if ($this->Projetosentregasreqs->save($projetosentregasreq)) {
                $this->Flash->success(__('The projetosentregasreq has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosentregasreq could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosentregasreqs->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')));
        $entregastipos = $this->Projetosentregasreqs->Entregastipos->find('list', ['limit' => 200]);
        $processos = $this->Projetosentregasreqs->Processos->find('list', array('order' => array('Processos.processostipo_id' => 'asc','Processos.descricao' => 'asc')));
        $participantes = $this->Projetosentregasreqs->Participantes->find('list', array('conditions'=>array('Participantes.empresa_id'=> '8'),'order' => array('Participantes.nome' => 'asc')));
        $statusfuncionals = $this->Projetosentregasreqs->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosentregasreqs->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=>true),'order' => array('Consultores.cargo' => 'asc','Consultores.nome' => 'asc')), ['limit' => 200]); 
        $developers = $this->Projetosentregasreqs->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=>true),'order' => array('Consultores.cargo' => 'asc','Consultores.nome' => 'asc')), ['limit' => 200]); 
        $unidademedidas = $this->Projetosentregasreqs->Unidademedidas->find('list', ['limit' => 200]);
        $frentes = $this->Projetosentregasreqs->Frentes->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreq', 'projetosprodutosentregas', 'entregastipos', 'processos', 'participantes', 'statusfuncionals', 'consultores', 'unidademedidas', 'frentes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregasreq id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregasreq = $this->Projetosentregasreqs->get($id, [
            'contain' => []
        ]);
        $entregaid = $projetosentregasreq->projetosprodutosentrega_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregasreq = $this->Projetosentregasreqs->patchEntity($projetosentregasreq, $this->request->getData());
            
            if ($this->Projetosentregasreqs->save($projetosentregasreq)) {
                $this->Flash->success(__('The projetosentregasreq has been saved.'));

                // return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$entregaid]);

            }
            $this->Flash->error(__('The projetosentregasreq could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosentregasreqs->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$entregaid),'order' => array('Descricao' => 'asc')));
        $entregastipos = $this->Projetosentregasreqs->Entregastipos->find('list', ['limit' => 200]);
        $processos = $this->Projetosentregasreqs->Processos->find('list', ['limit' => 200]);
        $participantes = $this->Projetosentregasreqs->Participantes->find('list', array('conditions'=>array('Participantes.empresa_id'=> '8'),'order' => array('Participantes.nome' => 'asc')));
        $statusfuncionals = $this->Projetosentregasreqs->Statusfuncionals->find('list', ['limit' => 200]);        
        $consultores = $this->Projetosentregasreqs->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=>true),'order' => array('Consultores.cargo' => 'asc','Consultores.nome' => 'asc')), ['limit' => 200]); 
        $developers = $this->Projetosentregasreqs->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=>true),'order' => array('Consultores.cargo' => 'asc','Consultores.nome' => 'asc')), ['limit' => 200]); 
        $unidademedidas = $this->Projetosentregasreqs->Unidademedidas->find('list', ['limit' => 200]);
        $frentes = $this->Projetosentregasreqs->Frentes->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreq', 'projetosprodutosentregas', 'entregastipos', 'processos', 'participantes', 'statusfuncionals', 'consultores', 'unidademedidas', 'frentes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregasreq id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregasreq = $this->Projetosentregasreqs->get($id);
        $entregaid = $projetosentregasreq->projetosprodutosentrega_id;
        if ($this->Projetosentregasreqs->delete($projetosentregasreq)) {
            $this->Flash->success(__('The projetosentregasreq has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosentregasreq could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$entregaid]);
    }
}
