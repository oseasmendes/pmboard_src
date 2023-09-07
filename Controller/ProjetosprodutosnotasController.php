<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosnotas Controller
 *
 * @property \App\Model\Table\ProjetosprodutosnotasTable $Projetosprodutosnotas
 *
 * @method \App\Model\Entity\Projetosprodutosnota[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosnotasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $dataatual = date('Y-m-d',strtotime("-30 days"));

        $this->paginate = [
            'contain' => ['Notatipos', 'Projetosprodutos'],

                                'conditions' => ['Projetosprodutosnotas.created > '=> $dataatual],
                                 /*'limit' => 100, */             
                                  'order' => [
                                'Projetosprodutosnotas.created' => 'desc'
                                ]
        ];
        $projetosprodutosnotas = $this->paginate($this->Projetosprodutosnotas);

        $this->set(compact('projetosprodutosnotas'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosnota id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosnota = $this->Projetosprodutosnotas->get($id, [
            'contain' => ['Notatipos', 'Projetosprodutos']
        ]);

        $this->set('projetosprodutosnota', $projetosprodutosnota);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosprodutosnota = $this->Projetosprodutosnotas->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosnota = $this->Projetosprodutosnotas->patchEntity($projetosprodutosnota, $this->request->getData());
                $projetosprodutosnota->projetosproduto_id = $id;
            if ($this->Projetosprodutosnotas->save($projetosprodutosnota)) {
                $this->Flash->success(__('The projetosprodutosnota has been saved.'));

//                return $this->redirect(['controller' => 'Projetosprodutos','action' => 'index']);

                return $this->redirect(['controller' => 'Projetosprodutos','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetosprodutosnota could not be saved. Please, try again.'));
        }
        $notatipos = $this->Projetosprodutosnotas->Notatipos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Projetosprodutosnotas->Projetosprodutos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosnota', 'notatipos', 'projetosprodutos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosnota id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosnota = $this->Projetosprodutosnotas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosnota = $this->Projetosprodutosnotas->patchEntity($projetosprodutosnota, $this->request->getData());
            $projetoprodutoid = $projetosprodutosnota->projetosproduto_id;
            if ($this->Projetosprodutosnotas->save($projetosprodutosnota)) {
                $this->Flash->success(__('The projetosprodutosnota has been saved.'));

                //return $this->redirect(['controller' => 'Projetosprodutos','action' => 'index']);
                return $this->redirect(['controller' => 'Projetosprodutos','action' => 'view',$projetoprodutoid]);
            }
            $this->Flash->error(__('The projetosprodutosnota could not be saved. Please, try again.'));
        }
        $notatipos = $this->Projetosprodutosnotas->Notatipos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Projetosprodutosnotas->Projetosprodutos->find('list', ['limit' => 200]);

        $projetosprodutos = $this->Projetosprodutosnotas->Projetosprodutos->find('list', ['limit' => 200]);

        $this->set(compact('projetosprodutosnota', 'notatipos', 'projetosprodutos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosnota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosnota = $this->Projetosprodutosnotas->get($id);
        if ($this->Projetosprodutosnotas->delete($projetosprodutosnota)) {
            $this->Flash->success(__('The projetosprodutosnota has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosnota could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
