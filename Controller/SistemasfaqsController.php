<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasfaqs Controller
 *
 * @property \App\Model\Table\SistemasfaqsTable $Sistemasfaqs
 *
 * @method \App\Model\Entity\Sistemasfaq[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasfaqsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas']
        ];
        $sistemasfaqs = $this->paginate($this->Sistemasfaqs);

        $this->set(compact('sistemasfaqs'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasfaq id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasfaq = $this->Sistemasfaqs->get($id, [
            'contain' => ['Sistemas', 'Entregasfaqs', 'Sistemasfaqsdetalhes']
        ]);

        $this->set('sistemasfaq', $sistemasfaq);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasfaq = $this->Sistemasfaqs->newEntity();
        if ($this->request->is('post')) {
            $sistemasfaq = $this->Sistemasfaqs->patchEntity($sistemasfaq, $this->request->getData());
            if ($this->Sistemasfaqs->save($sistemasfaq)) {
                $this->Flash->success(__('The sistemasfaq has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasfaq could not be saved. Please, try again.'));
        }

        $sistemas = $this->Sistemasfaqs->Sistemas->find('list',array('order' => array('descricao' => 'asc')),['limit' => 2000]);       

        $this->set(compact('sistemasfaq', 'sistemas'));
    }

    public function addid($id = null)
    {
        $sistemasfaq = $this->Sistemasfaqs->newEntity();
        $sistemasfaq->sistema_id = $id;

        if ($this->request->is('post')) {
            $sistemasfaq = $this->Sistemasfaqs->patchEntity($sistemasfaq, $this->request->getData());
            if ($this->Sistemasfaqs->save($sistemasfaq)) {
                $this->Flash->success(__('The sistemasfaq has been saved.'));

               // return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemasfaq could not be saved. Please, try again.'));
        }
        
        $sistemas = $this->Sistemasfaqs->Sistemas->find('list',array('conditions'=>array('Sistemas.id'=>$id),'order' => array('Sistemas.referencia' => 'asc')));

        $this->set(compact('sistemasfaq', 'sistemas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasfaq id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasfaq = $this->Sistemasfaqs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasfaq = $this->Sistemasfaqs->patchEntity($sistemasfaq, $this->request->getData());
            
            if ($this->Sistemasfaqs->save($sistemasfaq)) {
                $this->Flash->success(__('The sistemasfaq has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Sistemasfaqs','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemasfaq could not be saved. Please, try again.'));
        }
        
        //$sistemas = $this->Sistemasfaqs->Sistemas->find('list', ['limit' => 200]);

        $sistemas = $this->Sistemasfaqs->Sistemas->find('list',array('order' => array('descricao' => 'asc')),['limit' => 2000]);       

        $this->set(compact('sistemasfaq', 'sistemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasfaq id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasfaq = $this->Sistemasfaqs->get($id);
        if ($this->Sistemasfaqs->delete($sistemasfaq)) {
            $this->Flash->success(__('The sistemasfaq has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasfaq could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
