<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Periodotipos Controller
 *
 * @property \App\Model\Table\PeriodotiposTable $Periodotipos
 *
 * @method \App\Model\Entity\Periodotipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PeriodotiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $periodotipos = $this->paginate($this->Periodotipos);

        $this->set(compact('periodotipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Periodotipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $periodotipo = $this->Periodotipos->get($id, [
            'contain' => ['Propostasalocs']
        ]);

        $this->set('periodotipo', $periodotipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $periodotipo = $this->Periodotipos->newEntity();
        if ($this->request->is('post')) {
            $periodotipo = $this->Periodotipos->patchEntity($periodotipo, $this->request->getData());
            if ($this->Periodotipos->save($periodotipo)) {
                $this->Flash->success(__('The periodotipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The periodotipo could not be saved. Please, try again.'));
        }
        $this->set(compact('periodotipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Periodotipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $periodotipo = $this->Periodotipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $periodotipo = $this->Periodotipos->patchEntity($periodotipo, $this->request->getData());
            if ($this->Periodotipos->save($periodotipo)) {
                $this->Flash->success(__('The periodotipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The periodotipo could not be saved. Please, try again.'));
        }
        $this->set(compact('periodotipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Periodotipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $periodotipo = $this->Periodotipos->get($id);
        if ($this->Periodotipos->delete($periodotipo)) {
            $this->Flash->success(__('The periodotipo has been deleted.'));
        } else {
            $this->Flash->error(__('The periodotipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
