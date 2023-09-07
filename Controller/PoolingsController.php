<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Poolings Controller
 *
 * @property \App\Model\Table\PoolingsTable $Poolings
 *
 * @method \App\Model\Entity\Pooling[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PoolingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $poolings = $this->paginate($this->Poolings);

        $this->set(compact('poolings'));
    }

    /**
     * View method
     *
     * @param string|null $id Pooling id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pooling = $this->Poolings->get($id, [
            'contain' => ['Poolingsmembers', 'Projetosprodutosentregas']
        ]);

        $this->set('pooling', $pooling);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pooling = $this->Poolings->newEntity();
        if ($this->request->is('post')) {
            $pooling = $this->Poolings->patchEntity($pooling, $this->request->getData());
            if ($this->Poolings->save($pooling)) {
                $this->Flash->success(__('The pooling has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pooling could not be saved. Please, try again.'));
        }
        $this->set(compact('pooling'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pooling id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pooling = $this->Poolings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pooling = $this->Poolings->patchEntity($pooling, $this->request->getData());
            if ($this->Poolings->save($pooling)) {
                $this->Flash->success(__('The pooling has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pooling could not be saved. Please, try again.'));
        }
        $this->set(compact('pooling'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pooling id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pooling = $this->Poolings->get($id);
        if ($this->Poolings->delete($pooling)) {
            $this->Flash->success(__('The pooling has been deleted.'));
        } else {
            $this->Flash->error(__('The pooling could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
