<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Riscos Controller
 *
 * @property \App\Model\Table\RiscosTable $Riscos
 *
 * @method \App\Model\Entity\Risco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RiscosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Riscoscategorias']
        ];
        $riscos = $this->paginate($this->Riscos);

        $this->set(compact('riscos'));
    }

    /**
     * View method
     *
     * @param string|null $id Risco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $risco = $this->Riscos->get($id, [
            'contain' => ['Riscoscategorias', 'Sistemasriscos']
        ]);

        $this->set('risco', $risco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $risco = $this->Riscos->newEntity();
        if ($this->request->is('post')) {
            $risco = $this->Riscos->patchEntity($risco, $this->request->getData());
            if ($this->Riscos->save($risco)) {
                $this->Flash->success(__('The risco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The risco could not be saved. Please, try again.'));
        }
        $riscoscategorias = $this->Riscos->Riscoscategorias->find('list', ['limit' => 200]);
        $this->set(compact('risco', 'riscoscategorias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Risco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $risco = $this->Riscos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $risco = $this->Riscos->patchEntity($risco, $this->request->getData());
            if ($this->Riscos->save($risco)) {
                $this->Flash->success(__('The risco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The risco could not be saved. Please, try again.'));
        }
        $riscoscategorias = $this->Riscos->Riscoscategorias->find('list', ['limit' => 200]);
        $this->set(compact('risco', 'riscoscategorias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Risco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $risco = $this->Riscos->get($id);
        if ($this->Riscos->delete($risco)) {
            $this->Flash->success(__('The risco has been deleted.'));
        } else {
            $this->Flash->error(__('The risco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
