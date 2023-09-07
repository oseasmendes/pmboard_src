<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregasopprespostas Controller
 *
 * @property \App\Model\Table\ProjetosentregasopprespostasTable $Projetosentregasopprespostas
 *
 * @method \App\Model\Entity\Projetosentregasoppresposta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasopprespostasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosentregasopenpoints']
        ];
        $projetosentregasopprespostas = $this->paginate($this->Projetosentregasopprespostas);

        $this->set(compact('projetosentregasopprespostas'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregasoppresposta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregasoppresposta = $this->Projetosentregasopprespostas->get($id, [
            'contain' => ['Projetosentregasopenpoints']
        ]);

        $this->set('projetosentregasoppresposta', $projetosentregasoppresposta);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosentregasoppresposta = $this->Projetosentregasopprespostas->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasoppresposta = $this->Projetosentregasopprespostas->patchEntity($projetosentregasoppresposta, $this->request->getData());
            if ($this->Projetosentregasopprespostas->save($projetosentregasoppresposta)) {
                $this->Flash->success(__('The projetosentregasoppresposta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregasoppresposta could not be saved. Please, try again.'));
        }
        $projetosentregasopenpoints = $this->Projetosentregasopprespostas->Projetosentregasopenpoints->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasoppresposta', 'projetosentregasopenpoints'));
    }

    public function addid($id = null)
    {
        $projetosentregasoppresposta = $this->Projetosentregasopprespostas->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasoppresposta = $this->Projetosentregasopprespostas->patchEntity($projetosentregasoppresposta, $this->request->getData());
            $projetosentregasoppresposta->projetosentregasopenpoint_id = $id;
            if ($this->Projetosentregasopprespostas->save($projetosentregasoppresposta)) {
                $this->Flash->success(__('The projetosentregasoppresposta has been saved.'));

               // return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosentregasopenpoints','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetosentregasoppresposta could not be saved. Please, try again.'));
        }
        $projetosentregasopenpoints = $this->Projetosentregasopprespostas->Projetosentregasopenpoints->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasoppresposta', 'projetosentregasopenpoints'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregasoppresposta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregasoppresposta = $this->Projetosentregasopprespostas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregasoppresposta = $this->Projetosentregasopprespostas->patchEntity($projetosentregasoppresposta, $this->request->getData());
           
            $openpoint = $projetosentregasoppresposta->projetosentregasopenpoint_id;
            if ($this->Projetosentregasopprespostas->save($projetosentregasoppresposta)) {
                $this->Flash->success(__('The projetosentregasoppresposta has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosentregasopenpoints','action' => 'view',$openpoint]);
            }
            $this->Flash->error(__('The projetosentregasoppresposta could not be saved. Please, try again.'));
        }
        $projetosentregasopenpoints = $this->Projetosentregasopprespostas->Projetosentregasopenpoints->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasoppresposta', 'projetosentregasopenpoints'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregasoppresposta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregasoppresposta = $this->Projetosentregasopprespostas->get($id);
        $openpoint = $projetosentregasoppresposta->projetosentregasopenpoint_id;
        if ($this->Projetosentregasopprespostas->delete($projetosentregasoppresposta)) {
            $this->Flash->success(__('The projetosentregasoppresposta has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosentregasoppresposta could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Projetosentregasopenpoints','action' => 'view',$openpoint]);
    }
}
