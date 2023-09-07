<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosoutofscopes Controller
 *
 * @property \App\Model\Table\ProjetosoutofscopesTable $Projetosoutofscopes
 *
 * @method \App\Model\Entity\Projetosoutofscope[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosoutofscopesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutos', 'Statusfunctionals']
        ];
        $projetosoutofscopes = $this->paginate($this->Projetosoutofscopes);

        $this->set(compact('projetosoutofscopes'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosoutofscope id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosoutofscope = $this->Projetosoutofscopes->get($id, [
            'contain' => ['Projetosprodutos', 'Statusfuncionals']
        ]);

        $this->set('projetosoutofscope', $projetosoutofscope);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosoutofscope = $this->Projetosoutofscopes->newEntity();
        if ($this->request->is('post')) {
            $projetosoutofscope = $this->Projetosoutofscopes->patchEntity($projetosoutofscope, $this->request->getData());
            if ($this->Projetosoutofscopes->save($projetosoutofscope)) {
                $this->Flash->success(__('The projetosoutofscope has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosoutofscope could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosoutofscopes->Projetosprodutos->find('list', ['limit' => 2000]);
        $statusfuncionals = $this->Projetosoutofscopes->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosoutofscope', 'projetosprodutos', 'statusfuncionals'));
    }

    public function addid($id = null)
    {
        $projetosoutofscope = $this->Projetosoutofscopes->newEntity();
        if ($this->request->is('post')) {
            $projetosoutofscope = $this->Projetosoutofscopes->patchEntity($projetosoutofscope, $this->request->getData());
            $projetosoutofscope->projetosproduto_id = $id;

            if ($this->Projetosoutofscopes->save($projetosoutofscope)) {
                $this->Flash->success(__('The projetosoutofscope has been saved.'));

                //return $this->redirect(['action' => 'index']);


                return $this->redirect(['controller' => 'Projetosprodutos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosoutofscope could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosoutofscopes->Projetosprodutos->find('list', ['limit' => 20000]);
        $statusfuncionals = $this->Projetosoutofscopes->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosoutofscope', 'projetosprodutos', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosoutofscope id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosoutofscope = $this->Projetosoutofscopes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosoutofscope = $this->Projetosoutofscopes->patchEntity($projetosoutofscope, $this->request->getData());
            $produtoid = $projetosoutofscope->projetosproduto_id;
            if ($this->Projetosoutofscopes->save($projetosoutofscope)) {
                $this->Flash->success(__('The projetosoutofscope has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosprodutos','action' => 'view',$produtoid]);
            }
            $this->Flash->error(__('The projetosoutofscope could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosoutofscopes->Projetosprodutos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosoutofscopes->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosoutofscope', 'projetosprodutos', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosoutofscope id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosoutofscope = $this->Projetosoutofscopes->get($id);
        $produtoid = $projetosoutofscope->projetosproduto_id;
        if ($this->Projetosoutofscopes->delete($projetosoutofscope)) {
            $this->Flash->success(__('The projetosoutofscope has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosoutofscope could not be deleted. Please, try again.'));
        }

        
        return $this->redirect(['controller' => 'Projetosprodutos','action' => 'view',$produtoid]);
    }
}
