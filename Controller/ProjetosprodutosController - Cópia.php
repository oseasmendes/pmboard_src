<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutos Controller
 *
 * @property \App\Model\Table\ProjetosprodutosTable $Projetosprodutos
 *
 * @method \App\Model\Entity\Projetosproduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Statusfuncionals']
        ];
        $projetosprodutos = $this->paginate($this->Projetosprodutos);

        $this->set(compact('projetosprodutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosproduto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosproduto = $this->Projetosprodutos->get($id, [
            'contain' => ['Projetos', 'Statusfuncionals', 'Agendaanual', 'Projetosprodutosentregas', 'Projetosprodutosfeedbacks', 'Projetosprodutosnotas', 'Projetosprodutosparetos']
        ]);

        $this->set('projetosproduto', $projetosproduto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosproduto = $this->Projetosprodutos->newEntity();
        $projetosproduto->projeto_id = $id;
        if ($this->request->is('post')) {
            $projetosproduto = $this->Projetosprodutos->patchEntity($projetosproduto, $this->request->getData());
            if ($this->Projetosprodutos->save($projetosproduto)) {
                $this->Flash->success(__('The projetosproduto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosproduto could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosprodutos->Projetos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutos->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosproduto', 'projetos', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosproduto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosproduto = $this->Projetosprodutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosproduto = $this->Projetosprodutos->patchEntity($projetosproduto, $this->request->getData());
            if ($this->Projetosprodutos->save($projetosproduto)) {
                $this->Flash->success(__('The projetosproduto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosproduto could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosprodutos->Projetos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutos->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosproduto', 'projetos', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosproduto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosproduto = $this->Projetosprodutos->get($id);
        if ($this->Projetosprodutos->delete($projetosproduto)) {
            $this->Flash->success(__('The projetosproduto has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosproduto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
