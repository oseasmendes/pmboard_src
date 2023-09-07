<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregasreqsscripts Controller
 *
 * @property \App\Model\Table\ProjetosentregasreqsscriptsTable $Projetosentregasreqsscripts
 *
 * @method \App\Model\Entity\Projetosentregasreqsscript[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasreqsscriptsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['projetosentregasreqsrefs']
        ];
        $projetosentregasreqsscripts = $this->paginate($this->Projetosentregasreqsscripts);

        

        $this->set(compact('projetosentregasreqsscripts'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregasreqsscript id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->get($id, [
            'contain' => ['Projetosentregasreqsrefs']
        ]);

        $this->set('projetosentregasreqsscript', $projetosentregasreqsscript);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->patchEntity($projetosentregasreqsscript, $this->request->getData());
            if ($this->Projetosentregasreqsscripts->save($projetosentregasreqsscript)) {
                $this->Flash->success(__('The projetosentregasreqsscript has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregasreqsscript could not be saved. Please, try again.'));
        }        
        $projetosentregasreqsrefs = $this->Projetosentregasreqsscripts->Projetosentregasreqsrefs->find('list', ['limit' => 200]);
        
        $this->set(compact('projetosentregasreqsscript', 'projetosentregasreqsrefs'));
    }

    public function addid($id = null)
    {
        $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->patchEntity($projetosentregasreqsscript, $this->request->getData());
            $projetosentregasreqsscript->projetosentregasreqsref_id = $id;
            
            
            if ($this->Projetosentregasreqsscripts->save($projetosentregasreqsscript)) {
                $this->Flash->success(__('The Script has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$id]);
            }
            $this->Flash->error(__('The script could not be saved. Please, try again.'));
        }

        $projetosentregasreqsrefs = $this->Projetosentregasreqsscripts->Projetosentregasreqsrefs->find('list', 
                                                                                                            array(
                                                                                                                'conditions'=>array('Projetosentregasreqsrefs.id'=>$id),
                                                                                                                'order' => array('Projetosentregasreqsrefs.id' => 'asc')
                                                                                                                )
                                                                                                            );        
        $this->set(compact('projetosentregasreqsscript', 'projetosentregasreqsrefs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregasreqsscript id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->patchEntity($projetosentregasreqsscript, $this->request->getData());
            if ($this->Projetosentregasreqsscripts->save($projetosentregasreqsscript)) {
                $this->Flash->success(__('The projetosentregasreqsscript has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregasreqsscript->projetosentregasreqsref_id]);
            }
            $this->Flash->error(__('The projetosentregasreqsscript could not be saved. Please, try again.'));
        }
        $projetosentregasreqsrefs = $this->Projetosentregasreqsscripts->Projetosentregasreqsrefs->find('list', ['limit' => 200]);
        
        $this->set(compact('projetosentregasreqsscript', 'projetosentregasreqsrefs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregasreqsscript id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregasreqsscript = $this->Projetosentregasreqsscripts->get($id);
        if ($this->Projetosentregasreqsscripts->delete($projetosentregasreqsscript)) {
            $this->Flash->success(__('The Script has been deleted.'));
        } else {
            $this->Flash->error(__('The Script could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregasreqsscript->projetosentregasreqsref_id]);
    }
}
