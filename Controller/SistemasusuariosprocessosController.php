<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasusuariosprocessos Controller
 *
 * @property \App\Model\Table\SistemasusuariosprocessosTable $Sistemasusuariosprocessos
 *
 * @method \App\Model\Entity\Sistemasusuariosprocesso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasusuariosprocessosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemasusuarios', 'Processos']
        ];
        $sistemasusuariosprocessos = $this->paginate($this->Sistemasusuariosprocessos);

        $this->set(compact('sistemasusuariosprocessos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasusuariosprocesso id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasusuariosprocesso = $this->Sistemasusuariosprocessos->get($id, [
            'contain' => ['Sistemasusuarios', 'Processos']
        ]);

        $this->set('sistemasusuariosprocesso', $sistemasusuariosprocesso);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasusuariosprocesso = $this->Sistemasusuariosprocessos->newEntity();
        if ($this->request->is('post')) {
            $sistemasusuariosprocesso = $this->Sistemasusuariosprocessos->patchEntity($sistemasusuariosprocesso, $this->request->getData());
            if ($this->Sistemasusuariosprocessos->save($sistemasusuariosprocesso)) {
                $this->Flash->success(__('The sistemasusuariosprocesso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasusuariosprocesso could not be saved. Please, try again.'));
        }
        $sistemasusuarios = $this->Sistemasusuariosprocessos->Sistemasusuarios->find('list', ['limit' => 200]);
        $processos = $this->Sistemasusuariosprocessos->Processos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasusuariosprocesso', 'sistemasusuarios', 'processos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasusuariosprocesso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasusuariosprocesso = $this->Sistemasusuariosprocessos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasusuariosprocesso = $this->Sistemasusuariosprocessos->patchEntity($sistemasusuariosprocesso, $this->request->getData());
            if ($this->Sistemasusuariosprocessos->save($sistemasusuariosprocesso)) {
                $this->Flash->success(__('The sistemasusuariosprocesso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasusuariosprocesso could not be saved. Please, try again.'));
        }
        $sistemasusuarios = $this->Sistemasusuariosprocessos->Sistemasusuarios->find('list', ['limit' => 200]);
        $processos = $this->Sistemasusuariosprocessos->Processos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasusuariosprocesso', 'sistemasusuarios', 'processos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasusuariosprocesso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasusuariosprocesso = $this->Sistemasusuariosprocessos->get($id);
        if ($this->Sistemasusuariosprocessos->delete($sistemasusuariosprocesso)) {
            $this->Flash->success(__('The sistemasusuariosprocesso has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasusuariosprocesso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
