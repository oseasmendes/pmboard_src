<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregaschanges Controller
 *
 * @property \App\Model\Table\ProjetosentregaschangesTable $Projetosentregaschanges
 *
 * @method \App\Model\Entity\Projetosentregaschange[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregaschangesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosentregasreqsreves', 'Motivos']
        ];
        $projetosentregaschanges = $this->paginate($this->Projetosentregaschanges);

        $this->set(compact('projetosentregaschanges'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregaschange id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregaschange = $this->Projetosentregaschanges->get($id, [
            'contain' => ['Projetosentregasreqsreves', 'Motivos']
        ]);

        $this->set('projetosentregaschange', $projetosentregaschange);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosentregaschange = $this->Projetosentregaschanges->newEntity();
        if ($this->request->is('post')) {
            $projetosentregaschange = $this->Projetosentregaschanges->patchEntity($projetosentregaschange, $this->request->getData());
            if ($this->Projetosentregaschanges->save($projetosentregaschange)) {
                $this->Flash->success(__('The projetosentregaschange has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregaschange could not be saved. Please, try again.'));
        }
        $projetosentregasreqsrefs = $this->Projetosentregaschanges->Projetosentregasreqsrefs->find('list', ['limit' => 200]);
        $motivos = $this->Projetosentregaschanges->Motivos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregaschange', 'projetosentregasreqsrefs', 'motivos'));
    }

    public function addid($id = null)
    {
        $projetosentregaschange = $this->Projetosentregaschanges->newEntity();
        if ($this->request->is('post')) {
            $projetosentregaschange = $this->Projetosentregaschanges->patchEntity($projetosentregaschange, $this->request->getData());
            $projetosentregaschange->projetosentregasreqsref_id = $id;
            if ($this->Projetosentregaschanges->save($projetosentregaschange)) {
                $this->Flash->success(__('The projetosentregaschange has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosentregaschange could not be saved. Please, try again.'));
        }
        $projetosentregasreqsrefs = $this->Projetosentregaschanges->Projetosentregasreqsrefs->find('list', array(
                                                                                                        'conditions'=>array('Projetosentregasreqsrefs.id'=>$id),
                                                                                                        'order' => array('Projetosentregasreqsrefs.id' => 'asc')
                                                                                                        )
                                                                                                    );
        $motivos = $this->Projetosentregaschanges->Motivos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregaschange', 'projetosentregasreqsrefs', 'motivos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregaschange id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregaschange = $this->Projetosentregaschanges->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregaschange = $this->Projetosentregaschanges->patchEntity($projetosentregaschange, $this->request->getData());
            if ($this->Projetosentregaschanges->save($projetosentregaschange)) {
                $this->Flash->success(__('The projetosentregaschange has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregaschange->projetosentregasreqsref_id]);
            }
            $this->Flash->error(__('The projetosentregaschange could not be saved. Please, try again.'));
        }
        $projetosentregasreqsrefs = $this->Projetosentregaschanges->Projetosentregasreqsrefs->find('list', ['limit' => 200]);
        $motivos = $this->Projetosentregaschanges->Motivos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregaschange', 'projetosentregasreqsrefs', 'motivos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregaschange id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregaschange = $this->Projetosentregaschanges->get($id);
        if ($this->Projetosentregaschanges->delete($projetosentregaschange)) {
            $this->Flash->success(__('The projetosentregaschange has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosentregaschange could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregaschange->projetosentregasreqsref_id]);
    }
}
