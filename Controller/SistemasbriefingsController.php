<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasbriefings Controller
 *
 * @property \App\Model\Table\SistemasbriefingsTable $Sistemasbriefings
 *
 * @method \App\Model\Entity\Sistemasbriefing[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasbriefingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Departamentos', 'Smcplans']
        ];
        $sistemasbriefings = $this->paginate($this->Sistemasbriefings);

        $this->set(compact('sistemasbriefings'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasbriefing id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasbriefing = $this->Sistemasbriefings->get($id, [
            'contain' => ['Sistemas', 'Departamentos', 'Smcplans']
        ]);

        $this->set('sistemasbriefing', $sistemasbriefing);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemasbriefing = $this->Sistemasbriefings->newEntity();
        if ($this->request->is('post')) {
            $sistemasbriefing = $this->Sistemasbriefings->patchEntity($sistemasbriefing, $this->request->getData());
              $sistemasbriefing->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemasbriefings->save($sistemasbriefing)) {
                $this->Flash->success(__('The Briefing of System has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasbriefing could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasbriefings->Sistemas->find('list', ['limit' => 200]);
        $departamentos = $this->Sistemasbriefings->Departamentos->find('list', ['limit' => 200]);
        $smcplans = $this->Sistemasbriefings->Smcplans->find('list', ['limit' => 200]);
        $this->set(compact('sistemasbriefing', 'sistemas', 'departamentos', 'smcplans'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasbriefing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasbriefing = $this->Sistemasbriefings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasbriefing = $this->Sistemasbriefings->patchEntity($sistemasbriefing, $this->request->getData());
            if ($this->Sistemasbriefings->save($sistemasbriefing)) {
                $this->Flash->success(__('The sistemasbriefing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasbriefing could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasbriefings->Sistemas->find('list', ['limit' => 200]);
        $departamentos = $this->Sistemasbriefings->Departamentos->find('list', ['limit' => 200]);
        $smcplans = $this->Sistemasbriefings->Smcplans->find('list', ['limit' => 200]);
        $this->set(compact('sistemasbriefing', 'sistemas', 'departamentos', 'smcplans'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasbriefing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasbriefing = $this->Sistemasbriefings->get($id);
        if ($this->Sistemasbriefings->delete($sistemasbriefing)) {
            $this->Flash->success(__('The sistemasbriefing has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasbriefing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
