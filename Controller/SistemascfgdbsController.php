<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemascfgdbs Controller
 *
 * @property \App\Model\Table\SistemascfgdbsTable $Sistemascfgdbs
 *
 * @method \App\Model\Entity\Sistemascfgdb[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemascfgdbsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Bancos']
        ];
        $sistemascfgdbs = $this->paginate($this->Sistemascfgdbs);

        $this->set(compact('sistemascfgdbs'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemascfgdb id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemascfgdb = $this->Sistemascfgdbs->get($id, [
            'contain' => ['Sistemas', 'Bancos', 'Sistemascfgdbdets']
        ]);

        $this->set('sistemascfgdb', $sistemascfgdb);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemascfgdb = $this->Sistemascfgdbs->newEntity();
        if ($this->request->is('post')) {
            $sistemascfgdb = $this->Sistemascfgdbs->patchEntity($sistemascfgdb, $this->request->getData());
              $sistemascfgdb->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemascfgdbs->save($sistemascfgdb)) {
                $this->Flash->success(__('The sistemascfgdb has been saved.'));

                //return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller' => 'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemascfgdb could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgdbs->Sistemas->find('list', ['limit' => 200]);
        $ambientes = $this->Sistemascfgdbs->Ambientes->find('list', ['limit' => 200]);
        $bancos = $this->Sistemascfgdbs->Bancos->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgdb', 'sistemas', 'bancos','ambientes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemascfgdb id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemascfgdb = $this->Sistemascfgdbs->get($id, [
            'contain' => []
        ]);
        $sistemaid = $sistemascfgdb->sistema_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemascfgdb = $this->Sistemascfgdbs->patchEntity($sistemascfgdb, $this->request->getData());
            if ($this->Sistemascfgdbs->save($sistemascfgdb)) {
                $this->Flash->success(__('The sistemascfgdb has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$sistemaid]);
            }
            $this->Flash->error(__('The sistemascfgdb could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgdbs->Sistemas->find('list', ['limit' => 200]);
        $ambientes = $this->Sistemascfgdbs->Ambientes->find('list', ['limit' => 200]);
        $bancos = $this->Sistemascfgdbs->Bancos->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgdb', 'sistemas', 'bancos','ambientes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemascfgdb id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemascfgdb = $this->Sistemascfgdbs->get($id);
        $sistemaid = $sistemascfgdb->sistema_id;
        if ($this->Sistemascfgdbs->delete($sistemascfgdb)) {
            $this->Flash->success(__('The sistemascfgdb has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemascfgdb could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Sistemas','action' => 'view',$sistemaid]);
    }
}
