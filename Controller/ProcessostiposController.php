<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Processostipos Controller
 *
 * @property \App\Model\Table\ProcessostiposTable $Processostipos
 *
 * @method \App\Model\Entity\Processostipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProcessostiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $processostipos = $this->paginate($this->Processostipos);

        $this->set(compact('processostipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Processostipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $processostipo = $this->Processostipos->get($id, [
            'contain' => ['Processos']
        ]);

        $this->set('processostipo', $processostipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $processostipo = $this->Processostipos->newEntity();
        if ($this->request->is('post')) {
            $processostipo = $this->Processostipos->patchEntity($processostipo, $this->request->getData());
            if ($this->Processostipos->save($processostipo)) {
                $this->Flash->success(__('The processostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The processostipo could not be saved. Please, try again.'));
        }
        
        $this->set(compact('processostipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Processostipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $processostipo = $this->Processostipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $processostipo = $this->Processostipos->patchEntity($processostipo, $this->request->getData());
            if ($this->Processostipos->save($processostipo)) {
                $this->Flash->success(__('The processostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The processostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('processostipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Processostipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $processostipo = $this->Processostipos->get($id);
        if ($this->Processostipos->delete($processostipo)) {
            $this->Flash->success(__('The processostipo has been deleted.'));
        } else {
            $this->Flash->error(__('The processostipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
