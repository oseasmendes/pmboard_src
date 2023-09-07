<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Logbooks Controller
 *
 * @property \App\Model\Table\LogbooksTable $Logbooks
 *
 * @method \App\Model\Entity\Logbook[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LogbooksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Programas', 'Atividadetipos']
        ];
        $logbooks = $this->paginate($this->Logbooks);

        $this->set(compact('logbooks'));
    }

    /**
     * View method
     *
     * @param string|null $id Logbook id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logbook = $this->Logbooks->get($id, [
            'contain' => ['Programas', 'Atividadetipos', 'Logbooksitems']
        ]);

        $this->set('logbook', $logbook);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logbook = $this->Logbooks->newEntity();
        if ($this->request->is('post')) {
            $logbook = $this->Logbooks->patchEntity($logbook, $this->request->getData());
            if ($this->Logbooks->save($logbook)) {
                $this->Flash->success(__('The logbook has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logbook could not be saved. Please, try again.'));
        }
        $programas = $this->Logbooks->Programas->find('list', ['limit' => 200]);
        $atividadetipos = $this->Logbooks->Atividadetipos->find('list', ['limit' => 200]);
        $this->set(compact('logbook', 'programas', 'atividadetipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Logbook id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logbook = $this->Logbooks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logbook = $this->Logbooks->patchEntity($logbook, $this->request->getData());
            if ($this->Logbooks->save($logbook)) {
                $this->Flash->success(__('The logbook has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logbook could not be saved. Please, try again.'));
        }
        $programas = $this->Logbooks->Programas->find('list', ['limit' => 200]);
        $atividadetipos = $this->Logbooks->Atividadetipos->find('list', ['limit' => 200]);
        $this->set(compact('logbook', 'programas', 'atividadetipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Logbook id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logbook = $this->Logbooks->get($id);
        if ($this->Logbooks->delete($logbook)) {
            $this->Flash->success(__('The logbook has been deleted.'));
        } else {
            $this->Flash->error(__('The logbook could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
