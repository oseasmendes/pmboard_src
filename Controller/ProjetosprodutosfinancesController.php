<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosfinances Controller
 *
 * @property \App\Model\Table\ProjetosprodutosfinancesTable $Projetosprodutosfinances
 *
 * @method \App\Model\Entity\Projetosprodutosfinance[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosfinancesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutos', 'Statusfuncionals']
        ];
        $projetosprodutosfinances = $this->paginate($this->Projetosprodutosfinances);

        $this->set(compact('projetosprodutosfinances'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosfinance id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosfinance = $this->Projetosprodutosfinances->get($id, [
            'contain' => ['Projetosprodutos', 'Statusfuncionals']
        ]);

        $this->set('projetosprodutosfinance', $projetosprodutosfinance);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosprodutosfinance = $this->Projetosprodutosfinances->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosfinance = $this->Projetosprodutosfinances->patchEntity($projetosprodutosfinance, $this->request->getData());
             $projetosprodutosfinance->projetosproduto_id = $id;
            if ($this->Projetosprodutosfinances->save($projetosprodutosfinance)) {
                $this->Flash->success(__('The projetosprodutosfinance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosfinance could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosfinances->Projetosprodutos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosfinances->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosfinance', 'projetosprodutos', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosfinance id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosfinance = $this->Projetosprodutosfinances->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosfinance = $this->Projetosprodutosfinances->patchEntity($projetosprodutosfinance, $this->request->getData());
            if ($this->Projetosprodutosfinances->save($projetosprodutosfinance)) {
                $this->Flash->success(__('The projetosprodutosfinance has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosfinance could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosfinances->Projetosprodutos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosfinances->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosfinance', 'projetosprodutos', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosfinance id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosfinance = $this->Projetosprodutosfinances->get($id);
        if ($this->Projetosprodutosfinances->delete($projetosprodutosfinance)) {
            $this->Flash->success(__('The projetosprodutosfinance has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosfinance could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
