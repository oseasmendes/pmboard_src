<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasconsultores Controller
 *
 * @property \App\Model\Table\SistemasconsultoresTable $Sistemasconsultores
 *
 * @method \App\Model\Entity\Sistemasconsultore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasconsultoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores', 'Knowhows', 'Sistemas']
        ];
        $sistemasconsultores = $this->paginate($this->Sistemasconsultores);

        $this->set(compact('sistemasconsultores'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasconsultore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasconsultore = $this->Sistemasconsultores->get($id, [
            'contain' => ['Consultores', 'Knowhows', 'Sistemas']
        ]);

        $this->set('sistemasconsultore', $sistemasconsultore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemasconsultore = $this->Sistemasconsultores->newEntity();
        if ($this->request->is('post')) {
            $sistemasconsultore = $this->Sistemasconsultores->patchEntity($sistemasconsultore, $this->request->getData());
             $sistemasconsultore->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemasconsultores->save($sistemasconsultore)) {
                $this->Flash->success(__('The sistemasconsultore has been saved.'));

                
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemasconsultore could not be saved. Please, try again.'));
        }
        $consultores = $this->Sistemasconsultores->Consultores->find('list', ['limit' => 200]);
        $knowhows = $this->Sistemasconsultores->Knowhows->find('list', ['limit' => 200]);
        $sistemas = $this->Sistemasconsultores->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemasconsultore', 'consultores', 'knowhows', 'sistemas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasconsultore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasconsultore = $this->Sistemasconsultores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasconsultore = $this->Sistemasconsultores->patchEntity($sistemasconsultore, $this->request->getData());
            if ($this->Sistemasconsultores->save($sistemasconsultore)) {
                $this->Flash->success(__('The sistemasconsultore has been saved.'));
                
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$sistemasconsultore->sistema_id]);
            }
            $this->Flash->error(__('The sistemasconsultore could not be saved. Please, try again.'));
        }
        $consultores = $this->Sistemasconsultores->Consultores->find('list', ['limit' => 200]);
        $knowhows = $this->Sistemasconsultores->Knowhows->find('list', ['limit' => 200]);
        $sistemas = $this->Sistemasconsultores->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemasconsultore', 'consultores', 'knowhows', 'sistemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasconsultore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasconsultore = $this->Sistemasconsultores->get($id);
        if ($this->Sistemasconsultores->delete($sistemasconsultore)) {
            $this->Flash->success(__('The sistemasconsultore has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasconsultore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
