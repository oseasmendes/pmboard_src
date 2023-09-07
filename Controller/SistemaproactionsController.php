<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemaproactions Controller
 *
 * @property \App\Model\Table\SistemaproactionsTable $Sistemaproactions
 *
 * @method \App\Model\Entity\Sistemaproaction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemaproactionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemasprocessos', 'Eventos']
        ];
        $sistemaproactions = $this->paginate($this->Sistemaproactions);

        $this->set(compact('sistemaproactions'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemaproaction id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemaproaction = $this->Sistemaproactions->get($id, [
            'contain' => ['Sistemasprocessos', 'Eventos', 'Sistemaprosteps']
        ]);

        $this->set('sistemaproaction', $sistemaproaction);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemaproaction = $this->Sistemaproactions->newEntity();
        if ($this->request->is('post')) {
            $sistemaproaction = $this->Sistemaproactions->patchEntity($sistemaproaction, $this->request->getData());
            if ($this->Sistemaproactions->save($sistemaproaction)) {
                $this->Flash->success(__('The sistemaproaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemaproaction could not be saved. Please, try again.'));
        }
        $sistemasprocessos = $this->Sistemaproactions->Sistemasprocessos->find('list', ['limit' => 200]);
        $eventos = $this->Sistemaproactions->Eventos->find('list', ['limit' => 200]);
        $this->set(compact('sistemaproaction', 'sistemasprocessos', 'eventos'));
    }

    public function addid($id = null)
    {
        $sistemaproaction = $this->Sistemaproactions->newEntity();
        if ($this->request->is('post')) {
            $sistemaproaction = $this->Sistemaproactions->patchEntity($sistemaproaction, $this->request->getData());
            $sistemaproaction->sistemasprocesso_id = $id;
            if ($this->Sistemaproactions->save($sistemaproaction)) {
                $this->Flash->success(__('The sistemaproaction has been saved.'));

               // return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemasprocessos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemaproaction could not be saved. Please, try again.'));
        }
        $sistemasprocessos = $this->Sistemaproactions->Sistemasprocessos->find('list', ['limit' => 2000]);
        $eventos = $this->Sistemaproactions->Eventos->find('list', ['limit' => 200]);
        $this->set(compact('sistemaproaction', 'sistemasprocessos', 'eventos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemaproaction id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemaproaction = $this->Sistemaproactions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemaproaction = $this->Sistemaproactions->patchEntity($sistemaproaction, $this->request->getData());
            $idpro = $sistemaproaction->sistemasprocesso_id;
            if ($this->Sistemaproactions->save($sistemaproaction)) {
                $this->Flash->success(__('The sistemaproaction has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemasprocessos','action' => 'view',$idpro]);
            }
            $this->Flash->error(__('The sistemaproaction could not be saved. Please, try again.'));
        }
        $sistemasprocessos = $this->Sistemaproactions->Sistemasprocessos->find('list', ['limit' => 200]);
        $eventos = $this->Sistemaproactions->Eventos->find('list', ['limit' => 200]);
        $this->set(compact('sistemaproaction', 'sistemasprocessos', 'eventos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemaproaction id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemaproaction = $this->Sistemaproactions->get($id);
        $idpro = $sistemaproaction->sistemasprocesso_id;
        if ($this->Sistemaproactions->delete($sistemaproaction)) {
            $this->Flash->success(__('The sistemaproaction has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemaproaction could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Sistemasprocessos','action' => 'view',$idpro]);
    }
}
