<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosentregasdiarios Controller
 *
 * @property \App\Model\Table\ProjetosprodutosentregasdiariosTable $Projetosprodutosentregasdiarios
 *
 * @method \App\Model\Entity\Projetosprodutosentregasdiario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosentregasdiariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosentregas', 'Consultores', 'Fivewthreehs', 'Statusfuncionals']
        ];
        $projetosprodutosentregasdiarios = $this->paginate($this->Projetosprodutosentregasdiarios);

        $this->set(compact('projetosprodutosentregasdiarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosentregasdiario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosentregasdiario = $this->Projetosprodutosentregasdiarios->get($id, [
            'contain' => ['Projetosprodutosentregas', 'Consultores', 'Fivewthreehs', 'Statusfuncionals']
        ]);

        $this->set('projetosprodutosentregasdiario', $projetosprodutosentregasdiario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
  


     public function add($id = null)
    {
        $projetosprodutosentregasdiario = $this->Projetosprodutosentregasdiarios->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosentregasdiario = $this->Projetosprodutosentregasdiarios->patchEntity($projetosprodutosentregasdiario, $this->request->getData());
            
            $projetosprodutosentregasdiario->projetosprodutosentrega_id = $id;

            if ($this->Projetosprodutosentregasdiarios->save($projetosprodutosentregasdiario)) {
                $this->Flash->success(__('The projetosprodutosentregasdiario has been saved.'));

                //return $this->redirect(['action' => 'index']);

                return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetosprodutosentregasdiario could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosprodutosentregasdiarios->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')));

        $consultores = $this->Projetosprodutosentregasdiarios->Consultores->find('list',array('order' => array('nome' => 'asc')), ['limit' => 200]);
        $fivewthreehs = $this->Projetosprodutosentregasdiarios->Fivewthreehs->find('list', ['limit' => 2000]);
        $statusfuncionals = $this->Projetosprodutosentregasdiarios->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosentregasdiario', 'projetosprodutosentregas', 'consultores', 'fivewthreehs', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosentregasdiario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosentregasdiario = $this->Projetosprodutosentregasdiarios->get($id, [
            'contain' => []
        ]);

        $entregaid = $projetosprodutosentregasdiario->projetosprodutosentrega_id; 
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosentregasdiario = $this->Projetosprodutosentregasdiarios->patchEntity($projetosprodutosentregasdiario, $this->request->getData());

        $entregaid = $projetosprodutosentregasdiario->projetosprodutosentrega_id; 


            if ($this->Projetosprodutosentregasdiarios->save($projetosprodutosentregasdiario)) {
                $this->Flash->success(__('The projetosprodutosentregasdiario has been saved.'));

                //return $this->redirect(['action' => 'index']);

                return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$entregaid]);


            }
            $this->Flash->error(__('The projetosprodutosentregasdiario could not be saved. Please, try again.'));
        }

        $projetosprodutosentregas = $this->Projetosprodutosentregasdiarios->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=> $entregaid ),'order' => array('Descricao' => 'asc')),['limit' => 200]);
        $consultores = $this->Projetosprodutosentregasdiarios->Consultores->find('list', ['limit' => 200]);
        $fivewthreehs = $this->Projetosprodutosentregasdiarios->Fivewthreehs->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosentregasdiarios->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosentregasdiario', 'projetosprodutosentregas', 'consultores', 'fivewthreehs', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosentregasdiario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosentregasdiario = $this->Projetosprodutosentregasdiarios->get($id);

      $projetosprodutosentregaid = $projetosprodutosentregasdiario->projetosprodutosentrega_id; 

        if ($this->Projetosprodutosentregasdiarios->delete($projetosprodutosentregasdiario)) {
            $this->Flash->success(__('The projetosprodutosentregasdiario has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosentregasdiario could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);

         return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$projetosprodutosentregaid]);


    }
}
