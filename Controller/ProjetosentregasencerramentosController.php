<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregasencerramentos Controller
 *
 * @property \App\Model\Table\ProjetosentregasencerramentosTable $Projetosentregasencerramentos
 *
 * @method \App\Model\Entity\Projetosentregasencerramento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasencerramentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosentregas', 'Solucoesaplicadas', 'Consultores', 'Sistemasfaqs']
        ];
        $projetosentregasencerramentos = $this->paginate($this->Projetosentregasencerramentos);

        $this->set(compact('projetosentregasencerramentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregasencerramento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregasencerramento = $this->Projetosentregasencerramentos->get($id, [
            'contain' => ['Projetosprodutosentregas', 'Solucoesaplicadas', 'Consultores', 'Sistemasfaqs']
        ]);

        $this->set('projetosentregasencerramento', $projetosentregasencerramento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosentregasencerramento = $this->Projetosentregasencerramentos->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasencerramento = $this->Projetosentregasencerramentos->patchEntity($projetosentregasencerramento, $this->request->getData());
            if ($this->Projetosentregasencerramentos->save($projetosentregasencerramento)) {
                $this->Flash->success(__('The projetosentregasencerramento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregasencerramento could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosentregasencerramentos->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $solucoesaplicadas = $this->Projetosentregasencerramentos->Solucoesaplicadas->find('list', ['limit' => 200]);
        $consultores = $this->Projetosentregasencerramentos->Consultores->find('list', ['limit' => 200]);
        $sistemasfaqs = $this->Projetosentregasencerramentos->Sistemasfaqs->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasencerramento', 'projetosprodutosentregas', 'solucoesaplicadas', 'consultores', 'sistemasfaqs'));
    }

    public function addid($id = null)
    {
        $projetosentregasencerramento = $this->Projetosentregasencerramentos->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasencerramento = $this->Projetosentregasencerramentos->patchEntity($projetosentregasencerramento, $this->request->getData());
            $projetosentregasencerramento->projetosprodutosentrega_id = $id;
            if ($this->Projetosentregasencerramentos->save($projetosentregasencerramento)) {
                $this->Flash->success(__('The projetosentregasencerramento has been saved.'));

                
                return $this->redirect(['controller'=>'projetosprodutosentregas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosentregasencerramento could not be saved. Please, try again.'));
        }

        //$projetosprodutosentregas = $this->Projetosentregasnotas->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')));

        $projetosprodutosentregas = $this->Projetosentregasencerramentos->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')));
        $solucoesaplicadas = $this->Projetosentregasencerramentos->Solucoesaplicadas->find('list', ['limit' => 200]);
        $consultores = $this->Projetosentregasencerramentos->Consultores->find('list', ['limit' => 200]);
        $sistemasfaqs = $this->Projetosentregasencerramentos->Sistemasfaqs->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasencerramento', 'projetosprodutosentregas', 'solucoesaplicadas', 'consultores', 'sistemasfaqs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregasencerramento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregasencerramento = $this->Projetosentregasencerramentos->get($id, [
            'contain' => []
        ]);
        $identrega = $projetosentregasencerramento->projetosprodutosentrega_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregasencerramento = $this->Projetosentregasencerramentos->patchEntity($projetosentregasencerramento, $this->request->getData());
            
            if ($this->Projetosentregasencerramentos->save($projetosentregasencerramento)) {
                $this->Flash->success(__('The projetosentregasencerramento has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'projetosprodutosentregas','action' => 'view',$identrega]);
            }
            $this->Flash->error(__('The projetosentregasencerramento could not be saved. Please, try again.'));
        }


        $projetosprodutosentregas = $this->Projetosentregasencerramentos->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$identrega),'order' => array('Descricao' => 'asc')));
        //$projetosprodutosentregas = $this->Projetosentregasencerramentos->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $solucoesaplicadas = $this->Projetosentregasencerramentos->Solucoesaplicadas->find('list', ['limit' => 200]);
        $consultores = $this->Projetosentregasencerramentos->Consultores->find('list', ['limit' => 200]);
        $sistemasfaqs = $this->Projetosentregasencerramentos->Sistemasfaqs->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasencerramento', 'projetosprodutosentregas', 'solucoesaplicadas', 'consultores', 'sistemasfaqs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregasencerramento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregasencerramento = $this->Projetosentregasencerramentos->get($id);
        $identrega = $projetosentregasencerramento->projetosprodutosentrega_id;
        if ($this->Projetosentregasencerramentos->delete($projetosentregasencerramento)) {
            $this->Flash->success(__('The projetosentregasencerramento has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosentregasencerramento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        
    }
}
