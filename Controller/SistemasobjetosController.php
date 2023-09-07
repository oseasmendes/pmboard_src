<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasobjetos Controller
 *
 * @property \App\Model\Table\SistemasobjetosTable $Sistemasobjetos
 *
 * @method \App\Model\Entity\Sistemasobjeto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasobjetosController extends AppController
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
        $sistemasobjetos = $this->paginate($this->Sistemasobjetos);

        $this->set(compact('sistemasobjetos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasobjeto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasobjeto = $this->Sistemasobjetos->get($id, [
            'contain' => ['Sistemas', 'Projetosentregasreqsrefsobjs']
        ]);

        $this->set('sistemasobjeto', $sistemasobjeto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasobjeto = $this->Sistemasobjetos->newEntity();
        if ($this->request->is('post')) {
            $sistemasobjeto = $this->Sistemasobjetos->patchEntity($sistemasobjeto, $this->request->getData());
            if ($this->Sistemasobjetos->save($sistemasobjeto)) {
                $this->Flash->success(__('The sistemasobjeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasobjeto could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasobjetos->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemasobjeto', 'sistemas'));
    }

    public function addid($id = null)
    {
        $sistemasobjeto = $this->Sistemasobjetos->newEntity();
        if ($this->request->is('post')) {
            $sistemasobjeto = $this->Sistemasobjetos->patchEntity($sistemasobjeto, $this->request->getData());
            $sistemasobjeto->sistema_id = $id;
            if ($this->Sistemasobjetos->save($sistemasobjeto)) {
                $this->Flash->success(__('The sistemasobjeto has been saved.'));

                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The Objetc could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasobjetos->Sistemas->find('list',array('conditions'=>array('Sistemas.id'=> $id),'order' => array('codenome' => 'asc')) , ['limit' => 2000]); 
        $objetostipos = $this->Sistemasobjetos->Objetostipos->find('list',array('order' => array('Objetostipos.descricao' => 'asc')) , ['limit' => 2000]); 
        $this->set(compact('sistemasobjeto', 'sistemas','objetostipos'));
    }



    /**
     * Edit method
     *
     * @param string|null $id Sistemasobjeto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasobjeto = $this->Sistemasobjetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasobjeto = $this->Sistemasobjetos->patchEntity($sistemasobjeto, $this->request->getData());
            if ($this->Sistemasobjetos->save($sistemasobjeto)) {
                $this->Flash->success(__('The sistemasobjeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasobjeto could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasobjetos->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemasobjeto', 'sistemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasobjeto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasobjeto = $this->Sistemasobjetos->get($id);
        if ($this->Sistemasobjetos->delete($sistemasobjeto)) {
            $this->Flash->success(__('The sistemasobjeto has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasobjeto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
