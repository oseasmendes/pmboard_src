<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemascfgurls Controller
 *
 * @property \App\Model\Table\SistemascfgurlsTable $Sistemascfgurls
 *
 * @method \App\Model\Entity\Sistemascfgurl[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemascfgurlsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Sistemasdocs']
        ];
        $sistemascfgurls = $this->paginate($this->Sistemascfgurls);

        $this->set(compact('sistemascfgurls'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemascfgurl id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemascfgurl = $this->Sistemascfgurls->get($id, [
            'contain' => ['Sistemas', 'Sistemasdocs']
        ]);

        $this->set('sistemascfgurl', $sistemascfgurl);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemascfgurl = $this->Sistemascfgurls->newEntity();
        if ($this->request->is('post')) {
            $sistemascfgurl = $this->Sistemascfgurls->patchEntity($sistemascfgurl, $this->request->getData());
            if ($this->Sistemascfgurls->save($sistemascfgurl)) {
                $this->Flash->success(__('The sistemascfgurl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemascfgurl could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgurls->Sistemas->find('list', ['limit' => 200]);
        $sistemasdocs = $this->Sistemascfgurls->Sistemasdocs->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgurl', 'sistemas', 'sistemasdocs'));
    }

    public function addid($id = null)
    {
        $sistemascfgurl = $this->Sistemascfgurls->newEntity();
        if ($this->request->is('post')) {
            $sistemascfgurl = $this->Sistemascfgurls->patchEntity($sistemascfgurl, $this->request->getData());
            $sistemascfgurl->sistema_id = $id;
            if ($this->Sistemascfgurls->save($sistemascfgurl)) {
                $this->Flash->success(__('The sistemascfgurl has been saved.'));

                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$id]);

            }
            $this->Flash->error(__('The sistemascfgurl could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgurls->Sistemas->find('list', ['limit' => 2000]);
        $sistemasdocs = $this->Sistemascfgurls->Sistemasdocs->find('list', ['limit' => 2000]);
        $this->set(compact('sistemascfgurl', 'sistemas', 'sistemasdocs'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Sistemascfgurl id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemascfgurl = $this->Sistemascfgurls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemascfgurl = $this->Sistemascfgurls->patchEntity($sistemascfgurl, $this->request->getData());
            if ($this->Sistemascfgurls->save($sistemascfgurl)) {
                $this->Flash->success(__('The sistemascfgurl has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$sistemascfgurl->sistema_id]);
            }
            $this->Flash->error(__('The sistemascfgurl could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgurls->Sistemas->find('list', ['limit' => 200]);
        $sistemasdocs = $this->Sistemascfgurls->Sistemasdocs->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgurl', 'sistemas', 'sistemasdocs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemascfgurl id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemascfgurl = $this->Sistemascfgurls->get($id);
        if ($this->Sistemascfgurls->delete($sistemascfgurl)) {
            $this->Flash->success(__('The sistemascfgurl has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemascfgurl could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Sistemas','action' => 'view',$sistemascfgurl->sistema_id]);
    }
}
