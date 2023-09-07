<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosruns Controller
 *
 * @property \App\Model\Table\ProjetosprodutosrunsTable $Projetosprodutosruns
 *
 * @method \App\Model\Entity\Projetosprodutosrun[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosrunsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $projetosprodutos = $this->Projetosprodutosruns->Projetosprodutos->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 200]);        
        $keyword = $this->request->getQueryParams('descricao');

         if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                     'contain' => ['Projetosprodutos', 'Statusfuncionals', 'Processos'],
                     'conditions' => ['Projetosprodutosruns.descricao LIKE '=> '%'.$keyword['descricao'].'%'],             
                     'order' => ['Projetosprodutosruns.created' => 'desc']        
                    ];
                    $projetosprodutosruns = $this->paginate($this->Projetosprodutosruns);
                    } elseif (!empty($keyword['projetosproduto_id'])) 
                            {
                                $this->paginate = [
                                'contain' => ['Projetosprodutos', 'Statusfuncionals', 'Processos'],
                                'conditions' => ['projetosproduto_id = '=> $keyword['projetosproduto_id']], 
                                'order' => ['Projetosprodutosruns.created' => 'desc']            
                                ];

                                $projetosprodutosruns = $this->paginate($this->Projetosprodutosruns);
                            } else 
                            {
                                $this->paginate = [
                                  'contain' => ['Projetosprodutos', 'Statusfuncionals', 'Processos'],
                                 /*'limit' => 100, */             
                                  'order' => ['Projetosprodutosruns.created' => 'desc']
                                //'Projetosnotas.descricao' => 'asc']

                            ];
                            $projetosprodutosruns = $this->paginate($this->Projetosprodutosruns);
                            }




       /* $this->paginate = [
            'contain' => ['Projetosprodutos', 'Statusfuncionals', 'Processos'],
            'order' => ['Projetosprodutosruns.created' => 'desc']            
        ];
        $projetosprodutosruns = $this->paginate($this->Projetosprodutosruns); */

        $this->set(compact('projetosprodutosruns','projetosprodutos','statusfuncionals', 'processos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosrun id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosrun = $this->Projetosprodutosruns->get($id, [
            'contain' => ['Projetosprodutos', 'Statusfuncionals', 'Processos']
        ]);

        $this->set('projetosprodutosrun', $projetosprodutosrun);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutosrun = $this->Projetosprodutosruns->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosrun = $this->Projetosprodutosruns->patchEntity($projetosprodutosrun, $this->request->getData());
            if ($this->Projetosprodutosruns->save($projetosprodutosrun)) {
                $this->Flash->success(__('The projetosprodutosrun has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosrun could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosruns->Projetosprodutos->find('list',array('order' => array('descricao' => 'asc')) ,['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosruns->Statusfuncionals->find('list',array('order' => array('descricao' => 'asc')) ,['limit' => 200]);
        $processos = $this->Projetosprodutosruns->Processos->find('list',array('order' => array('descricao' => 'asc')) ,['limit' => 200]);
        $this->set(compact('projetosprodutosrun', 'projetosprodutos', 'statusfuncionals', 'processos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosrun id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosrun = $this->Projetosprodutosruns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosrun = $this->Projetosprodutosruns->patchEntity($projetosprodutosrun, $this->request->getData());
            if ($this->Projetosprodutosruns->save($projetosprodutosrun)) {
                $this->Flash->success(__('The projetosprodutosrun has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosrun could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosruns->Projetosprodutos->find('list',array('order' => array('descricao' => 'asc')) ,['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosruns->Statusfuncionals->find('list',array('order' => array('descricao' => 'asc')) ,['limit' => 200]);
        $processos = $this->Projetosprodutosruns->Processos->find('list',array('order' => array('descricao' => 'asc')) ,['limit' => 200]);
        $this->set(compact('projetosprodutosrun', 'projetosprodutos', 'statusfuncionals', 'processos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosrun id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosrun = $this->Projetosprodutosruns->get($id);
        if ($this->Projetosprodutosruns->delete($projetosprodutosrun)) {
            $this->Flash->success(__('The projetosprodutosrun has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosrun could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
