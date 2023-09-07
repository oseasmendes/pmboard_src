<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Knowhows Controller
 *
 * @property \App\Model\Table\KnowhowsTable $Knowhows
 *
 * @method \App\Model\Entity\Knowhow[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KnowhowsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $knowhows = $this->paginate($this->Knowhows);

        $this->set(compact('knowhows'));
    }

    /**
     * View method
     *
     * @param string|null $id Knowhow id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $knowhow = $this->Knowhows->get($id, [
            'contain' => ['Consultoresvrstecnologias', 'Sistemasconsultores', 'Sistemasusuarios']
        ]);

        $this->set('knowhow', $knowhow);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $knowhow = $this->Knowhows->newEntity();
        if ($this->request->is('post')) {
            $knowhow = $this->Knowhows->patchEntity($knowhow, $this->request->getData());
            if ($this->Knowhows->save($knowhow)) {
                $this->Flash->success(__('The knowhow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The knowhow could not be saved. Please, try again.'));
        }
        $this->set(compact('knowhow'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Knowhow id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $knowhow = $this->Knowhows->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $knowhow = $this->Knowhows->patchEntity($knowhow, $this->request->getData());
            if ($this->Knowhows->save($knowhow)) {
                $this->Flash->success(__('The knowhow has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The knowhow could not be saved. Please, try again.'));
        }
        $this->set(compact('knowhow'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Knowhow id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $knowhow = $this->Knowhows->get($id);
        if ($this->Knowhows->delete($knowhow)) {
            $this->Flash->success(__('The knowhow has been deleted.'));
        } else {
            $this->Flash->error(__('The knowhow could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
