<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregasreqsrefsents Controller
 *
 * @property \App\Model\Table\ProjetosentregasreqsrefsentsTable $Projetosentregasreqsrefsents
 *
 * @method \App\Model\Entity\Projetosentregasreqsrefsent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasreqsrefsentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosentregasreqsreves']
        ];
        $projetosentregasreqsrefsents = $this->paginate($this->Projetosentregasreqsrefsents);

        $this->set(compact('projetosentregasreqsrefsents'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregasreqsrefsent id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregasreqsrefsent = $this->Projetosentregasreqsrefsents->get($id, [
            'contain' => ['Projetosentregasreqsreves']
        ]);

        $this->set('projetosentregasreqsrefsent', $projetosentregasreqsrefsent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosentregasreqsrefsent = $this->Projetosentregasreqsrefsents->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasreqsrefsent = $this->Projetosentregasreqsrefsents->patchEntity($projetosentregasreqsrefsent, $this->request->getData());
            if ($this->Projetosentregasreqsrefsents->save($projetosentregasreqsrefsent)) {
                $this->Flash->success(__('The projetosentregasreqsrefsent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregasreqsrefsent could not be saved. Please, try again.'));
        }
        $projetosentregasreqsreves = $this->Projetosentregasreqsrefsents->Projetosentregasreqsreves->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreqsrefsent', 'projetosentregasreqsreves'));
    }

    public function addid($id = null)
    {
        $projetosentregasreqsrefsent = $this->Projetosentregasreqsrefsents->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasreqsrefsent = $this->Projetosentregasreqsrefsents->patchEntity($projetosentregasreqsrefsent, $this->request->getData());
            $projetosentregasreqsrefsent->projetosentregasreqsref_id = $id;
            if ($this->Projetosentregasreqsrefsents->save($projetosentregasreqsrefsent)) {
                $this->Flash->success(__('The projetosentregasreqsrefsent has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosentregasreqsrefsent could not be saved. Please, try again.'));
        }
        $projetosentregasreqsrefs = $this->Projetosentregasreqsrefsents->Projetosentregasreqsrefs->find('list', array('conditions'=>array('Projetosentregasreqsrefs.id'=>$id),'order' => array('Projetosentregasreqsrefs.id' => 'desc')));
        $this->set(compact('projetosentregasreqsrefsent', 'projetosentregasreqsref'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregasreqsrefsent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregasreqsrefsent = $this->Projetosentregasreqsrefsents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregasreqsrefsent = $this->Projetosentregasreqsrefsents->patchEntity($projetosentregasreqsrefsent, $this->request->getData());
            if ($this->Projetosentregasreqsrefsents->save($projetosentregasreqsrefsent)) {
                $this->Flash->success(__('The projetosentregasreqsrefsent has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregasreqsrefsent->projetosentregasreqsref_id]);
            }
            $this->Flash->error(__('The projetosentregasreqsrefsent could not be saved. Please, try again.'));
        }
        $projetosentregasreqsreves = $this->Projetosentregasreqsrefsents->Projetosentregasreqsreves->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreqsrefsent', 'projetosentregasreqsreves'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregasreqsrefsent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregasreqsrefsent = $this->Projetosentregasreqsrefsents->get($id);
        if ($this->Projetosentregasreqsrefsents->delete($projetosentregasreqsrefsent)) {
            $this->Flash->success(__('The projetosentregasreqsrefsent has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosentregasreqsrefsent could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregasreqsrefsent->projetosentregasreqsref_id]);
    }
}
