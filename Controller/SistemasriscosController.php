<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasriscos Controller
 *
 * @property \App\Model\Table\SistemasriscosTable $Sistemasriscos
 *
 * @method \App\Model\Entity\Sistemasrisco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasriscosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Riscos', 'Aplicabilidades']
        ];
        $sistemasriscos = $this->paginate($this->Sistemasriscos);

        $this->set(compact('sistemasriscos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasrisco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasrisco = $this->Sistemasriscos->get($id, [
            'contain' => ['Sistemas', 'Riscos', 'Aplicabilidades']
        ]);

        $this->set('sistemasrisco', $sistemasrisco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemasrisco = $this->Sistemasriscos->newEntity();
        if ($this->request->is('post')) {
            $sistemasrisco = $this->Sistemasriscos->patchEntity($sistemasrisco, $this->request->getData());
             $sistemasrisco->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemasriscos->save($sistemasrisco)) {
                $this->Flash->success(__('The sistemasrisco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasrisco could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasriscos->Sistemas->find('list', ['limit' => 200]);
        $riscos = $this->Sistemasriscos->Riscos->find('list', ['limit' => 200]);
        $aplicabilidades = $this->Sistemasriscos->Aplicabilidades->find('list', ['limit' => 200]);
        $this->set(compact('sistemasrisco', 'sistemas', 'riscos', 'aplicabilidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasrisco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasrisco = $this->Sistemasriscos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasrisco = $this->Sistemasriscos->patchEntity($sistemasrisco, $this->request->getData());
            if ($this->Sistemasriscos->save($sistemasrisco)) {
                $this->Flash->success(__('The sistemasrisco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasrisco could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasriscos->Sistemas->find('list', ['limit' => 200]);
        $riscos = $this->Sistemasriscos->Riscos->find('list', ['limit' => 200]);
        $aplicabilidades = $this->Sistemasriscos->Aplicabilidades->find('list', ['limit' => 200]);
        $this->set(compact('sistemasrisco', 'sistemas', 'riscos', 'aplicabilidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasrisco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasrisco = $this->Sistemasriscos->get($id);
        if ($this->Sistemasriscos->delete($sistemasrisco)) {
            $this->Flash->success(__('The sistemasrisco has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasrisco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
