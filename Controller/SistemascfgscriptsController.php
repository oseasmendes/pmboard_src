<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemascfgscripts Controller
 *
 * @property \App\Model\Table\SistemascfgscriptsTable $Sistemascfgscripts
 *
 * @method \App\Model\Entity\Sistemascfgscript[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemascfgscriptsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Scriptstipos', 'Documentos']
        ];
        $sistemascfgscripts = $this->paginate($this->Sistemascfgscripts);

        $this->set(compact('sistemascfgscripts'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemascfgscript id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemascfgscript = $this->Sistemascfgscripts->get($id, [
            'contain' => ['Sistemas', 'Scriptstipos', 'Documentos']
        ]);

        $this->set('sistemascfgscript', $sistemascfgscript);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemascfgscript = $this->Sistemascfgscripts->newEntity();
        if ($this->request->is('post')) {
            $sistemascfgscript = $this->Sistemascfgscripts->patchEntity($sistemascfgscript, $this->request->getData());
            if ($this->Sistemascfgscripts->save($sistemascfgscript)) {
                $this->Flash->success(__('The sistemascfgscript has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemascfgscript could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgscripts->Sistemas->find('list', ['limit' => 200]);
        $scriptstipos = $this->Sistemascfgscripts->Scriptstipos->find('list', ['limit' => 200]);
        $documentos = $this->Sistemascfgscripts->Documentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgscript', 'sistemas', 'scriptstipos', 'documentos'));
    }

    public function addid($id = null)
    {
        $sistemascfgscript = $this->Sistemascfgscripts->newEntity();
        if ($this->request->is('post')) {
            $sistemascfgscript = $this->Sistemascfgscripts->patchEntity($sistemascfgscript, $this->request->getData());
            $sistemascfgscript->sistema_id = $id;
            if ($this->Sistemascfgscripts->save($sistemascfgscript)) {
                $this->Flash->success(__('The sistemascfgscript has been saved.'));

                
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemascfgscript could not be saved. Please, try again.'));
        }
        //$sistemas = $this->Sistemascfgscripts->Sistemas->find('list', ['limit' => 200]);
        $sistemas = $this->Sistemascfgscripts->Sistemas->find('list',array('conditions'=>array('Sistemas.id'=>$id),'order' => array('Sistemas.referencia' => 'asc')));
        $scriptstipos = $this->Sistemascfgscripts->Scriptstipos->find('list', ['limit' => 200]);
        $documentos = $this->Sistemascfgscripts->Documentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgscript', 'sistemas', 'scriptstipos', 'documentos'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Sistemascfgscript id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemascfgscript = $this->Sistemascfgscripts->get($id, [
            'contain' => []
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemascfgscript = $this->Sistemascfgscripts->patchEntity($sistemascfgscript, $this->request->getData());
            
            if ($this->Sistemascfgscripts->save($sistemascfgscript)) {
                $this->Flash->success(__('The sistemascfgscript has been saved.'));

               // return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$sistemascfgscript->sistema_id]);
            }
            $this->Flash->error(__('The sistemascfgscript could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgscripts->Sistemas->find('list', ['limit' => 200]);
        $scriptstipos = $this->Sistemascfgscripts->Scriptstipos->find('list', ['limit' => 200]);
        $documentos = $this->Sistemascfgscripts->Documentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgscript', 'sistemas', 'scriptstipos', 'documentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemascfgscript id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemascfgscript = $this->Sistemascfgscripts->get($id);
        if ($this->Sistemascfgscripts->delete($sistemascfgscript)) {
            $this->Flash->success(__('The sistemascfgscript has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemascfgscript could not be deleted. Please, try again.'));
        }
        
        return $this->redirect(['controller' => 'Sistemas','action' => 'view',$sistemascfgscript->sistema_id]);
    }
}
