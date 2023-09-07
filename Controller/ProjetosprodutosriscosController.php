<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosriscos Controller
 *
 * @property \App\Model\Table\ProjetosprodutosriscosTable $Projetosprodutosriscos
 *
 * @method \App\Model\Entity\Projetosprodutosrisco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosriscosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutos', 'Riscos', 'Aplicabilidades']
        ];
        $projetosprodutosriscos = $this->paginate($this->Projetosprodutosriscos);

        $this->set(compact('projetosprodutosriscos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosrisco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosrisco = $this->Projetosprodutosriscos->get($id, [
            'contain' => ['Projetosprodutos', 'Riscos', 'Aplicabilidades', 'Projetosprodutosriscosimpactos', 'Projetosprodutosriscoseventos']
        ]);

        $this->set('projetosprodutosrisco', $projetosprodutosrisco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosprodutosrisco = $this->Projetosprodutosriscos->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosrisco = $this->Projetosprodutosriscos->patchEntity($projetosprodutosrisco, $this->request->getData());
             $projetosprodutosrisco->projetosproduto_id = $id;
            if ($this->Projetosprodutosriscos->save($projetosprodutosrisco)) {
                $this->Flash->success(__('The projetosprodutosrisco has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosprodutos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosprodutosrisco could not be saved. Please, try again.'));
        }
        //$projetosprodutos = $this->Projetosprodutosriscos->Projetosprodutos->find('list', array('order' => array('descricao' => 'asc')),['limit' => 2000]);

        $projetosprodutos = $this->Projetosprodutosriscos->Projetosprodutos->find('list', array('conditions'=>array('Projetosprodutos.id'=>$id),'order' => array('descricao' => 'asc')),['limit' => 2000]);
         $riscos = $this->Projetosprodutosriscos->Riscos->find('list',array('order' => array('descricao' => 'asc')),['limit' => 200]);
        $aplicabilidades = $this->Projetosprodutosriscos->Aplicabilidades->find('list', ['limit' => 200]);

        $probabilidades = $this->Projetosprodutosriscos->Probabilidades->find('list', ['limit' => 200]);

        $severidades = $this->Projetosprodutosriscos->Severidades->find('list', ['limit' => 200]);


        $this->set(compact('projetosprodutosrisco', 'projetosprodutos', 'riscos', 'aplicabilidades','probabilidades','severidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosrisco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosrisco = $this->Projetosprodutosriscos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosrisco = $this->Projetosprodutosriscos->patchEntity($projetosprodutosrisco, $this->request->getData());
           $ret = $projetosprodutosrisco->projetosproduto_id;
            if ($this->Projetosprodutosriscos->save($projetosprodutosrisco)) {
                $this->Flash->success(__('The projetosprodutosrisco has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosprodutos','action' => 'view',$ret]);
            }
            $this->Flash->error(__('The projetosprodutosrisco could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosriscos->Projetosprodutos->find('list', ['limit' => 200]);
        $riscos = $this->Projetosprodutosriscos->Riscos->find('list', ['limit' => 200]);
        $aplicabilidades = $this->Projetosprodutosriscos->Aplicabilidades->find('list', ['limit' => 200]);

        $probabilidades = $this->Projetosprodutosriscos->Probabilidades->find('list', ['limit' => 200]);

           $severidades = $this->Projetosprodutosriscos->Severidades->find('list', ['limit' => 200]);


        $this->set(compact('projetosprodutosrisco', 'projetosprodutos', 'riscos', 'aplicabilidades','probabilidades','severidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosrisco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosrisco = $this->Projetosprodutosriscos->get($id);
        $ret = $projetosprodutosrisco->projetosproduto_id;
        if ($this->Projetosprodutosriscos->delete($projetosprodutosrisco)) {
            $this->Flash->success(__('The projetosprodutosrisco has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosrisco could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Projetosprodutos','action' => 'view',$ret]);
    }
}
