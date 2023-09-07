<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pmolancamentostipos Controller
 *
 * @property \App\Model\Table\PmolancamentostiposTable $Pmolancamentostipos
 *
 * @method \App\Model\Entity\Pmolancamentostipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PmolancamentostiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pmolancamentostipos = $this->paginate($this->Pmolancamentostipos);

        $this->set(compact('pmolancamentostipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Pmolancamentostipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pmolancamentostipo = $this->Pmolancamentostipos->get($id, [
            'contain' => ['Pmocapacitytransactions']
        ]);

        $this->set('pmolancamentostipo', $pmolancamentostipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pmolancamentostipo = $this->Pmolancamentostipos->newEntity();
        if ($this->request->is('post')) {
            $pmolancamentostipo = $this->Pmolancamentostipos->patchEntity($pmolancamentostipo, $this->request->getData());
            if ($this->Pmolancamentostipos->save($pmolancamentostipo)) {
                $this->Flash->success(__('The pmolancamentostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pmolancamentostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('pmolancamentostipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pmolancamentostipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pmolancamentostipo = $this->Pmolancamentostipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pmolancamentostipo = $this->Pmolancamentostipos->patchEntity($pmolancamentostipo, $this->request->getData());
            if ($this->Pmolancamentostipos->save($pmolancamentostipo)) {
                $this->Flash->success(__('The pmolancamentostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pmolancamentostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('pmolancamentostipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pmolancamentostipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pmolancamentostipo = $this->Pmolancamentostipos->get($id);
        if ($this->Pmolancamentostipos->delete($pmolancamentostipo)) {
            $this->Flash->success(__('The pmolancamentostipo has been deleted.'));
        } else {
            $this->Flash->error(__('The pmolancamentostipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
