<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paretosmestres Controller
 *
 * @property \App\Model\Table\ParetosmestresTable $Paretosmestres
 *
 * @method \App\Model\Entity\Paretosmestre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParetosmestresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $paretosmestres = $this->paginate($this->Paretosmestres);

        $this->set(compact('paretosmestres'));
    }

    /**
     * View method
     *
     * @param string|null $id Paretosmestre id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paretosmestre = $this->Paretosmestres->get($id, [
            'contain' => ['Paretos']
        ]);

        $this->set('paretosmestre', $paretosmestre);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paretosmestre = $this->Paretosmestres->newEntity();
        if ($this->request->is('post')) {
            $paretosmestre = $this->Paretosmestres->patchEntity($paretosmestre, $this->request->getData());
            if ($this->Paretosmestres->save($paretosmestre)) {
                $this->Flash->success(__('The paretosmestre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paretosmestre could not be saved. Please, try again.'));
        }
        $this->set(compact('paretosmestre'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paretosmestre id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paretosmestre = $this->Paretosmestres->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paretosmestre = $this->Paretosmestres->patchEntity($paretosmestre, $this->request->getData());
            if ($this->Paretosmestres->save($paretosmestre)) {
                $this->Flash->success(__('The paretosmestre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paretosmestre could not be saved. Please, try again.'));
        }
        $this->set(compact('paretosmestre'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paretosmestre id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paretosmestre = $this->Paretosmestres->get($id);
        if ($this->Paretosmestres->delete($paretosmestre)) {
            $this->Flash->success(__('The paretosmestre has been deleted.'));
        } else {
            $this->Flash->error(__('The paretosmestre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
