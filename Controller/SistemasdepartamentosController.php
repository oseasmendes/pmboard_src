<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasdepartamentos Controller
 *
 * @property \App\Model\Table\SistemasdepartamentosTable $Sistemasdepartamentos
 *
 * @method \App\Model\Entity\Sistemasdepartamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasdepartamentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Departamentos']
        ];
        $sistemasdepartamentos = $this->paginate($this->Sistemasdepartamentos);

        $this->set(compact('sistemasdepartamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasdepartamento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasdepartamento = $this->Sistemasdepartamentos->get($id, [
            'contain' => ['Sistemas', 'Departamentos']
        ]);

        $this->set('sistemasdepartamento', $sistemasdepartamento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasdepartamento = $this->Sistemasdepartamentos->newEntity();
        if ($this->request->is('post')) {
            $sistemasdepartamento = $this->Sistemasdepartamentos->patchEntity($sistemasdepartamento, $this->request->getData());
            if ($this->Sistemasdepartamentos->save($sistemasdepartamento)) {
                $this->Flash->success(__('The sistemasdepartamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasdepartamento could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasdepartamentos->Sistemas->find('list', ['limit' => 200]);
        $departamentos = $this->Sistemasdepartamentos->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasdepartamento', 'sistemas', 'departamentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasdepartamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasdepartamento = $this->Sistemasdepartamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasdepartamento = $this->Sistemasdepartamentos->patchEntity($sistemasdepartamento, $this->request->getData());
            if ($this->Sistemasdepartamentos->save($sistemasdepartamento)) {
                $this->Flash->success(__('The sistemasdepartamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasdepartamento could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasdepartamentos->Sistemas->find('list', ['limit' => 200]);
        $departamentos = $this->Sistemasdepartamentos->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasdepartamento', 'sistemas', 'departamentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasdepartamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasdepartamento = $this->Sistemasdepartamentos->get($id);
        if ($this->Sistemasdepartamentos->delete($sistemasdepartamento)) {
            $this->Flash->success(__('The sistemasdepartamento has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasdepartamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
