<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosentregassprints Controller
 *
 * @property \App\Model\Table\ProjetosprodutosentregassprintsTable $Projetosprodutosentregassprints
 *
 * @method \App\Model\Entity\Projetosprodutosentregassprint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosentregassprintsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutossprints', 'Projetosprodutosentregas']
        ];
        $projetosprodutosentregassprints = $this->paginate($this->Projetosprodutosentregassprints);

        $this->set(compact('projetosprodutosentregassprints'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosentregassprint id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosentregassprint = $this->Projetosprodutosentregassprints->get($id, [
            'contain' => ['Projetosprodutossprints', 'Projetosprodutosentregas']
        ]);

        $this->set('projetosprodutosentregassprint', $projetosprodutosentregassprint);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutosentregassprint = $this->Projetosprodutosentregassprints->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosentregassprint = $this->Projetosprodutosentregassprints->patchEntity($projetosprodutosentregassprint, $this->request->getData());
            if ($this->Projetosprodutosentregassprints->save($projetosprodutosentregassprint)) {
                $this->Flash->success(__('The projetosprodutosentregassprint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosentregassprint could not be saved. Please, try again.'));
        }
        $projetosprodutossprints = $this->Projetosprodutosentregassprints->Projetosprodutossprints->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosprodutosentregassprints->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosentregassprint', 'projetosprodutossprints', 'projetosprodutosentregas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosentregassprint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosentregassprint = $this->Projetosprodutosentregassprints->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosentregassprint = $this->Projetosprodutosentregassprints->patchEntity($projetosprodutosentregassprint, $this->request->getData());
            if ($this->Projetosprodutosentregassprints->save($projetosprodutosentregassprint)) {
                $this->Flash->success(__('The projetosprodutosentregassprint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosentregassprint could not be saved. Please, try again.'));
        }
        $projetosprodutossprints = $this->Projetosprodutosentregassprints->Projetosprodutossprints->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosprodutosentregassprints->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosentregassprint', 'projetosprodutossprints', 'projetosprodutosentregas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosentregassprint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosentregassprint = $this->Projetosprodutosentregassprints->get($id);
        if ($this->Projetosprodutosentregassprints->delete($projetosprodutosentregassprint)) {
            $this->Flash->success(__('The projetosprodutosentregassprint has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosentregassprint could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
