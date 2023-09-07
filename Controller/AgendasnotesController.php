<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agendasnotes Controller
 *
 * @property \App\Model\Table\AgendasnotesTable $Agendasnotes
 *
 * @method \App\Model\Entity\Agendasnote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgendasnotesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Agendaschannels', 'Agendas', 'Statusfuncionals']
        ];
        $agendasnotes = $this->paginate($this->Agendasnotes);

        $this->set(compact('agendasnotes'));
    }

    /**
     * View method
     *
     * @param string|null $id Agendasnote id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agendasnote = $this->Agendasnotes->get($id, [
            'contain' => ['Agendaschannels', 'Agendas', 'Statusfuncionals']
        ]);

        $this->set('agendasnote', $agendasnote);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agendasnote = $this->Agendasnotes->newEntity();
        if ($this->request->is('post')) {
            $agendasnote = $this->Agendasnotes->patchEntity($agendasnote, $this->request->getData());
            if ($this->Agendasnotes->save($agendasnote)) {
                $this->Flash->success(__('The agendasnote has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agendasnote could not be saved. Please, try again.'));
        }
        $agendaschannels = $this->Agendasnotes->Agendaschannels->find('list', ['limit' => 200]);
        $agendas = $this->Agendasnotes->Agendas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Agendasnotes->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('agendasnote', 'agendaschannels', 'agendas', 'statusfuncionals'));
    }


      /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function addid($id = null)
    {
        $agendasnote = $this->Agendasnotes->newEntity();
        if ($this->request->is('post')) {
            $agendasnote = $this->Agendasnotes->patchEntity($agendasnote, $this->request->getData());
            $agendasnote->agenda_id = $id;
            if ($this->Agendasnotes->save($agendasnote)) {
                $this->Flash->success(__('The agendasnote has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Agendas','action' => 'view',$id]);
            }

            $this->Flash->error(__('The agendasnote could not be saved. Please, try again.'));
        }
        $agendaschannels = $this->Agendasnotes->Agendaschannels->find('list', ['limit' => 200]);
        $agendas = $this->Agendasnotes->Agendas->find('list', array('conditions'=>array('Agendas.id'=>$id),'order' => array('etiquetaadicional' => 'asc')) , ['limit' => 200]);
        $statusfuncionals = $this->Agendasnotes->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('agendasnote', 'agendaschannels', 'agendas', 'statusfuncionals'));
    }



    /**
     * Edit method
     *
     * @param string|null $id Agendasnote id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agendasnote = $this->Agendasnotes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agendasnote = $this->Agendasnotes->patchEntity($agendasnote, $this->request->getData());
            $agendaid = $agendasnote->agenda_id;
            if ($this->Agendasnotes->save($agendasnote)) {
                $this->Flash->success(__('The agendasnote has been saved.'));

              //   return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Agendas','action' => 'view',$agendaid]);
            }
            $this->Flash->error(__('The agendasnote could not be saved. Please, try again.'));
        }
        $agendaschannels = $this->Agendasnotes->Agendaschannels->find('list', ['limit' => 200]);
        $agendas = $this->Agendasnotes->Agendas->find('list');
        $statusfuncionals = $this->Agendasnotes->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('agendasnote', 'agendaschannels', 'agendas', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agendasnote id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agendasnote = $this->Agendasnotes->get($id);
        $agendaid = $agendasnote->agenda_id;
        if ($this->Agendasnotes->delete($agendasnote)) {
            $this->Flash->success(__('The agendasnote has been deleted.'));
        } else {
            $this->Flash->error(__('The agendasnote could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller' => 'Agendas','action' => 'view',$agendaid]);
        //return $this->redirect(['action' => 'index']);
    }
}
