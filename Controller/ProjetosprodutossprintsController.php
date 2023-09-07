<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutossprints Controller
 *
 * @property \App\Model\Table\ProjetosprodutossprintsTable $Projetosprodutossprints
 *
 * @method \App\Model\Entity\Projetosprodutossprint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutossprintsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutos', 'Sprinttipos']
        ];
        $projetosprodutossprints = $this->paginate($this->Projetosprodutossprints);

        $this->set(compact('projetosprodutossprints'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutossprint id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutossprint = $this->Projetosprodutossprints->get($id, [
            'contain' => ['Projetosprodutos', 'Sprinttipos', 'Projetosprodutosentregassprints']
        ]);

        $this->set('projetosprodutossprint', $projetosprodutossprint);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutossprint = $this->Projetosprodutossprints->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutossprint = $this->Projetosprodutossprints->patchEntity($projetosprodutossprint, $this->request->getData());
            if ($this->Projetosprodutossprints->save($projetosprodutossprint)) {
                $this->Flash->success(__('The projetosprodutossprint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutossprint could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutossprints->Projetosprodutos->find('list', ['limit' => 200]);
        $sprinttipos = $this->Projetosprodutossprints->Sprinttipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutossprint', 'projetosprodutos', 'sprinttipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutossprint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutossprint = $this->Projetosprodutossprints->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutossprint = $this->Projetosprodutossprints->patchEntity($projetosprodutossprint, $this->request->getData());
            if ($this->Projetosprodutossprints->save($projetosprodutossprint)) {
                $this->Flash->success(__('The projetosprodutossprint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutossprint could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutossprints->Projetosprodutos->find('list', ['limit' => 200]);
        $sprinttipos = $this->Projetosprodutossprints->Sprinttipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutossprint', 'projetosprodutos', 'sprinttipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutossprint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutossprint = $this->Projetosprodutossprints->get($id);
        if ($this->Projetosprodutossprints->delete($projetosprodutossprint)) {
            $this->Flash->success(__('The projetosprodutossprint has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutossprint could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
