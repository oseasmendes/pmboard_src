<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosalocs Controller
 *
 * @property \App\Model\Table\ProjetosprodutosalocsTable $Projetosprodutosalocs
 *
 * @method \App\Model\Entity\Projetosprodutosaloc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosalocsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutos', 'Consultores', 'Statusfuncionals', 'Tipoalocs']
        ];
        $projetosprodutosalocs = $this->paginate($this->Projetosprodutosalocs);

        $this->set(compact('projetosprodutosalocs'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosaloc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosaloc = $this->Projetosprodutosalocs->get($id, [
            'contain' => ['Projetosprodutos', 'Consultores', 'Statusfuncionals', 'Tipoalocs']
        ]);

        $this->set('projetosprodutosaloc', $projetosprodutosaloc);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutosaloc = $this->Projetosprodutosalocs->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosaloc = $this->Projetosprodutosalocs->patchEntity($projetosprodutosaloc, $this->request->getData());
            if ($this->Projetosprodutosalocs->save($projetosprodutosaloc)) {
                $this->Flash->success(__('The projetosprodutosaloc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosaloc could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosalocs->Projetosprodutos->find('list', ['limit' => 200]);
        $consultores = $this->Projetosprodutosalocs->Consultores->find('list',array('order' => array('nome' => 'asc')) ,['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosalocs->Statusfuncionals->find('list', ['limit' => 200]);
        $tipoalocs = $this->Projetosprodutosalocs->Tipoalocs->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosaloc', 'projetosprodutos', 'consultores', 'statusfuncionals', 'tipoalocs'));
    }

    public function addid($id = null)
    {
        $projetosprodutosaloc = $this->Projetosprodutosalocs->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosaloc = $this->Projetosprodutosalocs->patchEntity($projetosprodutosaloc, $this->request->getData());
            $projetosprodutosaloc->projetosproduto_id = $id;

            if ($this->Projetosprodutosalocs->save($projetosprodutosaloc)) {
                $this->Flash->success(__('The projetosprodutosaloc has been saved.'));

//                return $this->redirect(['action' => 'index']);

                return $this->redirect(['controller' => 'Projetosprodutos','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetosprodutosaloc could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosalocs->Projetosprodutos->find('list', ['limit' => 2000]);
        $consultores = $this->Projetosprodutosalocs->Consultores->find('list',array('conditions' => ['Consultores.engajado = '=> true],'order' => array('cargo' => 'asc','nome' => 'asc')) ,['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosalocs->Statusfuncionals->find('list', ['limit' => 200]);
        $tipoalocs = $this->Projetosprodutosalocs->Tipoalocs->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosaloc', 'projetosprodutos', 'consultores', 'statusfuncionals', 'tipoalocs'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosaloc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosaloc = $this->Projetosprodutosalocs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosaloc = $this->Projetosprodutosalocs->patchEntity($projetosprodutosaloc, $this->request->getData());
            $idproduto = $projetosprodutosaloc->projetosproduto_id;
            if ($this->Projetosprodutosalocs->save($projetosprodutosaloc)) {
                $this->Flash->success(__('The projetosprodutosaloc has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosprodutos','action' => 'view',$idproduto]);
            }
            $this->Flash->error(__('The projetosprodutosaloc could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosalocs->Projetosprodutos->find('list', ['limit' => 200]);
       $consultores = $this->Projetosprodutosalocs->Consultores->find('list',array('conditions' => ['Consultores.engajado = '=> true],'order' => array('cargo' => 'asc','nome' => 'asc')) ,['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosalocs->Statusfuncionals->find('list', ['limit' => 200]);
        $tipoalocs = $this->Projetosprodutosalocs->Tipoalocs->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosaloc', 'projetosprodutos', 'consultores', 'statusfuncionals', 'tipoalocs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosaloc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosaloc = $this->Projetosprodutosalocs->get($id);
        if ($this->Projetosprodutosalocs->delete($projetosprodutosaloc)) {
            $this->Flash->success(__('The projetosprodutosaloc has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosaloc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
