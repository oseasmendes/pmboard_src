<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosreqsrefs Controller
 *
 * @property \App\Model\Table\ProjetosprodutosreqsrefsTable $Projetosprodutosreqsrefs
 *
 * @method \App\Model\Entity\Projetosprodutosreqsref[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosreqsrefsController extends AppController
{

     public function initialize(): void
    {
        parent::initialize();     
        $this->loadComponent('Projetosprodutosreqs');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosreqs', 'Projetosprodutosentregas']
        ];
        $projetosprodutosreqsrefs = $this->paginate($this->Projetosprodutosreqsrefs);

        $this->set(compact('projetosprodutosreqsrefs'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosreqsref id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosreqsref = $this->Projetosprodutosreqsrefs->get($id, [
            'contain' => ['Projetosprodutosreqs', 'Projetosprodutosentregas']
        ]);

        $this->set('projetosprodutosreqsref', $projetosprodutosreqsref);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutosreqsref = $this->Projetosprodutosreqsrefs->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosreqsref = $this->Projetosprodutosreqsrefs->patchEntity($projetosprodutosreqsref, $this->request->getData());
            if ($this->Projetosprodutosreqsrefs->save($projetosprodutosreqsref)) {
                $this->Flash->success(__('The projetosprodutosreqsref has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosreqsref could not be saved. Please, try again.'));
        }
        $projetosprodutosreqs = $this->Projetosprodutosreqsrefs->Projetosprodutosreqs->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosprodutosreqsrefs->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosreqsref', 'projetosprodutosreqs', 'projetosprodutosentregas'));
    }

    public function addid($id = null)
    {
        $projetosprodutosreqsref = $this->Projetosprodutosreqsrefs->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosreqsref = $this->Projetosprodutosreqsrefs->patchEntity($projetosprodutosreqsref, $this->request->getData());

            if ($this->Projetosprodutosreqsrefs->save($projetosprodutosreqsref)) {
                $this->Flash->success(__('The projetosprodutosreqsref has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosprodutosreqs','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosprodutosreqsref could not be saved. Please, try again.'));
        }

        //array('conditions'=>array('Projetosprodutos.id'=>$id),'order' => array('produto' => 'asc')));
        //$peoplemail = $this->Peoples->findpeoplemail($peoplescontribution->peoplesnum);
        $produtoid = $this->Projetosprodutosreqs->findId($id);


        $projetosprodutosreqs = $this->Projetosprodutosreqsrefs->Projetosprodutosreqs->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosprodutosreqsrefs->Projetosprodutosentregas->find('list', array('conditions'=>array('Projetosprodutosentregas.projetosproduto_id'=>$produtoid),'order' => array('Projetosprodutosentregas.referencia' => 'asc')));
        $this->set(compact('projetosprodutosreqsref', 'projetosprodutosreqs', 'projetosprodutosentregas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosreqsref id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosreqsref = $this->Projetosprodutosreqsrefs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosreqsref = $this->Projetosprodutosreqsrefs->patchEntity($projetosprodutosreqsref, $this->request->getData());
            if ($this->Projetosprodutosreqsrefs->save($projetosprodutosreqsref)) {
                $this->Flash->success(__('The projetosprodutosreqsref has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosreqsref could not be saved. Please, try again.'));
        }
        $projetosprodutosreqs = $this->Projetosprodutosreqsrefs->Projetosprodutosreqs->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosprodutosreqsrefs->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosreqsref', 'projetosprodutosreqs', 'projetosprodutosentregas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosreqsref id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosreqsref = $this->Projetosprodutosreqsrefs->get($id);
        if ($this->Projetosprodutosreqsrefs->delete($projetosprodutosreqsref)) {
            $this->Flash->success(__('The projetosprodutosreqsref has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosreqsref could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
