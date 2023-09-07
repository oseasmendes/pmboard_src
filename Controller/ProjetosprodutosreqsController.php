<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosreqs Controller
 *
 * @property \App\Model\Table\ProjetosprodutosreqsTable $Projetosprodutosreqs
 *
 * @method \App\Model\Entity\Projetosprodutosreq[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosreqsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutos', 'Entregastipos', 'Processos', 'Participantes', 'Statusfuncionals', 'Consultores', 'Unidademedidas', 'Frentes']
        ];
        $projetosprodutosreqs = $this->paginate($this->Projetosprodutosreqs);

        $this->set(compact('projetosprodutosreqs'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosreq id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosreq = $this->Projetosprodutosreqs->get($id, [
            'contain' => ['Projetosprodutos', 'Entregastipos', 'Processos', 'Participantes', 'Statusfuncionals', 'Consultores', 'Unidademedidas', 'Frentes', 'Projetosprodutosreqsrefs']
        ]);

        $this->set('projetosprodutosreq', $projetosprodutosreq);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutosreq = $this->Projetosprodutosreqs->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosreq = $this->Projetosprodutosreqs->patchEntity($projetosprodutosreq, $this->request->getData());
            if ($this->Projetosprodutosreqs->save($projetosprodutosreq)) {
                $this->Flash->success(__('The projetosprodutosreq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosreq could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosreqs->Projetosprodutos->find('list', ['limit' => 200]);
        $entregastipos = $this->Projetosprodutosreqs->Entregastipos->find('list', ['limit' => 200]);
        $processos = $this->Projetosprodutosreqs->Processos->find('list', ['limit' => 200]);
        $participantes = $this->Projetosprodutosreqs->Participantes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosreqs->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosprodutosreqs->Consultores->find('list', ['limit' => 200]);
        $unidademedidas = $this->Projetosprodutosreqs->Unidademedidas->find('list', ['limit' => 200]);
        $frentes = $this->Projetosprodutosreqs->Frentes->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosreq', 'projetosprodutos', 'entregastipos', 'processos', 'participantes', 'statusfuncionals', 'consultores', 'unidademedidas', 'frentes'));
    }


 public function addid($id = null)
    {
        $projetosprodutosreq = $this->Projetosprodutosreqs->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosreq = $this->Projetosprodutosreqs->patchEntity($projetosprodutosreq, $this->request->getData());
            $projetosprodutosreq->projetosproduto_id = $id;
            if ($this->Projetosprodutosreqs->save($projetosprodutosreq)) {
                $this->Flash->success(__('The projetosprodutosreq has been saved.'));

                //return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller' => 'Projetosprodutos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosprodutosreq could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosreqs->Projetosprodutos->find('list');
        $entregastipos = $this->Projetosprodutosreqs->Entregastipos->find('list', ['limit' => 200]);
        $processos = $this->Projetosprodutosreqs->Processos->find('list', ['limit' => 200]);
        $participantes = $this->Projetosprodutosreqs->Participantes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosreqs->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosprodutosreqs->Consultores->find('list', ['limit' => 200]);
        $unidademedidas = $this->Projetosprodutosreqs->Unidademedidas->find('list', ['limit' => 200]);
        $frentes = $this->Projetosprodutosreqs->Frentes->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosreq', 'projetosprodutos', 'entregastipos', 'processos', 'participantes', 'statusfuncionals', 'consultores', 'unidademedidas', 'frentes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosreq id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosreq = $this->Projetosprodutosreqs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosreq = $this->Projetosprodutosreqs->patchEntity($projetosprodutosreq, $this->request->getData());
            $produtoid = $projetosprodutosreq->projetosproduto_id;
            if ($this->Projetosprodutosreqs->save($projetosprodutosreq)) {
                $this->Flash->success(__('The projetosprodutosreq has been saved.'));

               // return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller' => 'Projetosprodutos','action' => 'view',$produtoid]);
            }
            $this->Flash->error(__('The projetosprodutosreq could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosreqs->Projetosprodutos->find('list');
        $entregastipos = $this->Projetosprodutosreqs->Entregastipos->find('list', ['limit' => 200]);
        $processos = $this->Projetosprodutosreqs->Processos->find('list', ['limit' => 200]);
        $participantes = $this->Projetosprodutosreqs->Participantes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosreqs->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosprodutosreqs->Consultores->find('list', ['limit' => 200]);
        $unidademedidas = $this->Projetosprodutosreqs->Unidademedidas->find('list', ['limit' => 200]);
        $frentes = $this->Projetosprodutosreqs->Frentes->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosreq', 'projetosprodutos', 'entregastipos', 'processos', 'participantes', 'statusfuncionals', 'consultores', 'unidademedidas', 'frentes'));
    }

     public function editar($id = null)
    {
        $projetosprodutosreq = $this->Projetosprodutosreqs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosreq = $this->Projetosprodutosreqs->patchEntity($projetosprodutosreq, $this->request->getData());            
            $produtoid = $projetosprodutosreq->projetosproduto_id;
            if ($this->Projetosprodutosreqs->save($projetosprodutosreq)) {
                $this->Flash->success(__('The projetosprodutosreq has been saved.'));

                return $this->redirect(['action' => 'index']);
               // return $this->redirect(['controller' => 'Projetosprodutos','action' => 'view',$produtoid]);
            }
            $this->Flash->error(__('The projetosprodutosreq could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosreqs->Projetosprodutos->find('list');
        $entregastipos = $this->Projetosprodutosreqs->Entregastipos->find('list', ['limit' => 200]);
        $processos = $this->Projetosprodutosreqs->Processos->find('list', ['limit' => 200]);
        $participantes = $this->Projetosprodutosreqs->Participantes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosreqs->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosprodutosreqs->Consultores->find('list', ['limit' => 200]);
        $unidademedidas = $this->Projetosprodutosreqs->Unidademedidas->find('list', ['limit' => 200]);
        $frentes = $this->Projetosprodutosreqs->Frentes->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosreq', 'projetosprodutos', 'entregastipos', 'processos', 'participantes', 'statusfuncionals', 'consultores', 'unidademedidas', 'frentes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosreq id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosreq = $this->Projetosprodutosreqs->get($id);
        if ($this->Projetosprodutosreqs->delete($projetosprodutosreq)) {
            $this->Flash->success(__('The projetosprodutosreq has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosreq could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
