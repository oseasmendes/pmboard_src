<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Esupportsetlprodutos Controller
 *
 * @property \App\Model\Table\EsupportsetlprodutosTable $Esupportsetlprodutos
 *
 * @method \App\Model\Entity\Esupportsetlproduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EsupportsetlprodutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Projetosprodutos']
        ];
        $esupportsetlprodutos = $this->paginate($this->Esupportsetlprodutos);

        $this->set(compact('esupportsetlprodutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Esupportsetlproduto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $esupportsetlproduto = $this->Esupportsetlprodutos->get($id, [
            'contain' => ['Projetos', 'Projetosprodutos']
        ]);

        $this->set('esupportsetlproduto', $esupportsetlproduto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $esupportsetlproduto = $this->Esupportsetlprodutos->newEntity();
        if ($this->request->is('post')) {
            $esupportsetlproduto = $this->Esupportsetlprodutos->patchEntity($esupportsetlproduto, $this->request->getData());
            if ($this->Esupportsetlprodutos->save($esupportsetlproduto)) {
                $this->Flash->success(__('The esupportsetlproduto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlproduto could not be saved. Please, try again.'));
        }
        $projetos = $this->Esupportsetlprodutos->Projetos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Esupportsetlprodutos->Projetosprodutos->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlproduto', 'projetos', 'projetosprodutos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Esupportsetlproduto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $esupportsetlproduto = $this->Esupportsetlprodutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $esupportsetlproduto = $this->Esupportsetlprodutos->patchEntity($esupportsetlproduto, $this->request->getData());
            if ($this->Esupportsetlprodutos->save($esupportsetlproduto)) {
                $this->Flash->success(__('The esupportsetlproduto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlproduto could not be saved. Please, try again.'));
        }
        $projetos = $this->Esupportsetlprodutos->Projetos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Esupportsetlprodutos->Projetosprodutos->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlproduto', 'projetos', 'projetosprodutos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Esupportsetlproduto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $esupportsetlproduto = $this->Esupportsetlprodutos->get($id);
        if ($this->Esupportsetlprodutos->delete($esupportsetlproduto)) {
            $this->Flash->success(__('The esupportsetlproduto has been deleted.'));
        } else {
            $this->Flash->error(__('The esupportsetlproduto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
