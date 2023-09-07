<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Atarevisoes Controller
 *
 * @property \App\Model\Table\AtarevisoesTable $Atarevisoes
 *
 * @method \App\Model\Entity\Atareviso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtarevisoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Atas', 'Participantes']
        ];
        $atarevisoes = $this->paginate($this->Atarevisoes);

        $this->set(compact('atarevisoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Atareviso id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atareviso = $this->Atarevisoes->get($id, [
            'contain' => ['Atas', 'Participantes']
        ]);

        $this->set('atareviso', $atareviso);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atareviso = $this->Atarevisoes->newEntity();
        if ($this->request->is('post')) {
            $atareviso = $this->Atarevisoes->patchEntity($atareviso, $this->request->getData());
            if ($this->Atarevisoes->save($atareviso)) {
                $this->Flash->success(__('The atareviso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atareviso could not be saved. Please, try again.'));
        }
        $atas = $this->Atarevisoes->Atas->find('list', ['limit' => 200]);
        $participantes = $this->Atarevisoes->Participantes->find('list', ['limit' => 200]);
        $this->set(compact('atareviso', 'atas', 'participantes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Atareviso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atareviso = $this->Atarevisoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atareviso = $this->Atarevisoes->patchEntity($atareviso, $this->request->getData());
            if ($this->Atarevisoes->save($atareviso)) {
                $this->Flash->success(__('The atareviso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atareviso could not be saved. Please, try again.'));
        }
        $atas = $this->Atarevisoes->Atas->find('list', ['limit' => 200]);
        $participantes = $this->Atarevisoes->Participantes->find('list', ['limit' => 200]);
        $this->set(compact('atareviso', 'atas', 'participantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Atareviso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atareviso = $this->Atarevisoes->get($id);
        if ($this->Atarevisoes->delete($atareviso)) {
            $this->Flash->success(__('The atareviso has been deleted.'));
        } else {
            $this->Flash->error(__('The atareviso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
