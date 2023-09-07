<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultoresausenciastipos Controller
 *
 * @property \App\Model\Table\ConsultoresausenciastiposTable $Consultoresausenciastipos
 *
 * @method \App\Model\Entity\Consultoresausenciastipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsultoresausenciastiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $consultoresausenciastipos = $this->paginate($this->Consultoresausenciastipos);

        $this->set(compact('consultoresausenciastipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Consultoresausenciastipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultoresausenciastipo = $this->Consultoresausenciastipos->get($id, [
            'contain' => ['Consultoresausencias']
        ]);

        $this->set('consultoresausenciastipo', $consultoresausenciastipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultoresausenciastipo = $this->Consultoresausenciastipos->newEntity();
        if ($this->request->is('post')) {
            $consultoresausenciastipo = $this->Consultoresausenciastipos->patchEntity($consultoresausenciastipo, $this->request->getData());
            if ($this->Consultoresausenciastipos->save($consultoresausenciastipo)) {
                $this->Flash->success(__('The consultoresausenciastipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoresausenciastipo could not be saved. Please, try again.'));
        }
        $this->set(compact('consultoresausenciastipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultoresausenciastipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultoresausenciastipo = $this->Consultoresausenciastipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultoresausenciastipo = $this->Consultoresausenciastipos->patchEntity($consultoresausenciastipo, $this->request->getData());
            if ($this->Consultoresausenciastipos->save($consultoresausenciastipo)) {
                $this->Flash->success(__('The consultoresausenciastipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoresausenciastipo could not be saved. Please, try again.'));
        }
        $this->set(compact('consultoresausenciastipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultoresausenciastipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultoresausenciastipo = $this->Consultoresausenciastipos->get($id);
        if ($this->Consultoresausenciastipos->delete($consultoresausenciastipo)) {
            $this->Flash->success(__('The consultoresausenciastipo has been deleted.'));
        } else {
            $this->Flash->error(__('The consultoresausenciastipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
