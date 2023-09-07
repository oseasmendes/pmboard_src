<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasprocessos Controller
 *
 * @property \App\Model\Table\SistemasprocessosTable $Sistemasprocessos
 *
 * @method \App\Model\Entity\Sistemasprocesso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasprocessosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Processos']
        ];
        $sistemasprocessos = $this->paginate($this->Sistemasprocessos);

        $this->set(compact('sistemasprocessos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasprocesso id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasprocesso = $this->Sistemasprocessos->get($id, [
            'contain' => ['Sistemas', 'Processos','Sistemaproactions']
        ]);

        $this->set('sistemasprocesso', $sistemasprocesso);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasprocesso = $this->Sistemasprocessos->newEntity();
        if ($this->request->is('post')) {
            $sistemasprocesso = $this->Sistemasprocessos->patchEntity($sistemasprocesso, $this->request->getData());
            if ($this->Sistemasprocessos->save($sistemasprocesso)) {
                $this->Flash->success(__('The sistemasprocesso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasprocesso could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasprocessos->Sistemas->find('list', ['limit' => 200]);
        $processos = $this->Sistemasprocessos->Processos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasprocesso', 'sistemas', 'processos'));
    }

    public function addid($id = null)
    {
        $sistemasprocesso = $this->Sistemasprocessos->newEntity();
        if ($this->request->is('post')) {
            $sistemasprocesso = $this->Sistemasprocessos->patchEntity($sistemasprocesso, $this->request->getData());
            $sistemasprocesso->sistema_id = $id;
            if ($this->Sistemasprocessos->save($sistemasprocesso)) {
                $this->Flash->success(__('The sistemasprocesso has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemasprocesso could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasprocessos->Sistemas->find('list', ['limit' => 2000]);
        $processos = $this->Sistemasprocessos->Processos->find('list',array('order' => array('descricao' => 'asc')) , ['limit' => 200]);
        $this->set(compact('sistemasprocesso', 'sistemas', 'processos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasprocesso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasprocesso = $this->Sistemasprocessos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasprocesso = $this->Sistemasprocessos->patchEntity($sistemasprocesso, $this->request->getData());
            $sysid = $sistemasprocesso->sistema_id;
            if ($this->Sistemasprocessos->save($sistemasprocesso)) {
                $this->Flash->success(__('The sistemasprocesso has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sysid]);
            }
            $this->Flash->error(__('The sistemasprocesso could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasprocessos->Sistemas->find('list', ['limit' => 200]);
        $processos = $this->Sistemasprocessos->Processos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasprocesso', 'sistemas', 'processos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasprocesso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasprocesso = $this->Sistemasprocessos->get($id);
        $sysid = $sistemasprocesso->sistema_id;
        if ($this->Sistemasprocessos->delete($sistemasprocesso)) {
            $this->Flash->success(__('The sistemasprocesso has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasprocesso could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sysid]);
    }
}
