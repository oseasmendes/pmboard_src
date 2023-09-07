<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Processos Controller
 *
 * @property \App\Model\Table\ProcessosTable $Processos
 *
 * @method \App\Model\Entity\Processo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProcessosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {       


        $this->paginate = [
            'contain' => ['Processostipos'],
            'order' => ['processostipo_id' => 'asc','descricao' => 'asc']
        ];
        $processos = $this->paginate($this->Processos);

        $this->set(compact('processos'));
    }

    /**
     * View method
     *
     * @param string|null $id Processo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $processo = $this->Processos->get($id, [
            'contain' => ['Processostipos', 'Atasdetalhes']
        ]);

        $this->set('processo', $processo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $processo = $this->Processos->newEntity();
        if ($this->request->is('post')) {
            $processo = $this->Processos->patchEntity($processo, $this->request->getData());
            if ($this->Processos->save($processo)) {
                $this->Flash->success(__('The processo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The processo could not be saved. Please, try again.'));
        }
        $processostipos = $this->Processos->Processostipos->find('list', ['limit' => 200]);
        $this->set(compact('processo', 'processostipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Processo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $processo = $this->Processos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $processo = $this->Processos->patchEntity($processo, $this->request->getData());
            if ($this->Processos->save($processo)) {
                $this->Flash->success(__('The processo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The processo could not be saved. Please, try again.'));
        }
        $processostipos = $this->Processos->Processostipos->find('list', ['limit' => 200]);
        $this->set(compact('processo', 'processostipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Processo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $processo = $this->Processos->get($id);
        if ($this->Processos->delete($processo)) {
            $this->Flash->success(__('The processo has been deleted.'));
        } else {
            $this->Flash->error(__('The processo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
