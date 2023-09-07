<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ambientes Controller
 *
 * @property \App\Model\Table\AmbientesTable $Ambientes
 *
 * @method \App\Model\Entity\Ambiente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AmbientesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $ambientes = $this->paginate($this->Ambientes);

        $this->set(compact('ambientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Ambiente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ambiente = $this->Ambientes->get($id, [
            'contain' => ['Projetosprodutosentregas']
        ]);

        $this->set('ambiente', $ambiente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ambiente = $this->Ambientes->newEntity();
        if ($this->request->is('post')) {
            $ambiente = $this->Ambientes->patchEntity($ambiente, $this->request->getData());
            if ($this->Ambientes->save($ambiente)) {
                $this->Flash->success(__('The ambiente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ambiente could not be saved. Please, try again.'));
        }
        $this->set(compact('ambiente'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ambiente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ambiente = $this->Ambientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ambiente = $this->Ambientes->patchEntity($ambiente, $this->request->getData());
            if ($this->Ambientes->save($ambiente)) {
                $this->Flash->success(__('The ambiente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ambiente could not be saved. Please, try again.'));
        }
        $this->set(compact('ambiente'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ambiente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ambiente = $this->Ambientes->get($id);
        if ($this->Ambientes->delete($ambiente)) {
            $this->Flash->success(__('The ambiente has been deleted.'));
        } else {
            $this->Flash->error(__('The ambiente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
