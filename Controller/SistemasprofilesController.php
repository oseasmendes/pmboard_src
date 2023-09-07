<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasprofiles Controller
 *
 * @property \App\Model\Table\SistemasprofilesTable $Sistemasprofiles
 *
 * @method \App\Model\Entity\Sistemasprofile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasprofilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Responsabilidades']
        ];
        $sistemasprofiles = $this->paginate($this->Sistemasprofiles);

        $this->set(compact('sistemasprofiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasprofile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasprofile = $this->Sistemasprofiles->get($id, [
            'contain' => ['Responsabilidades', 'Sistemasprofilescontracts']
        ]);

        $this->set('sistemasprofile', $sistemasprofile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasprofile = $this->Sistemasprofiles->newEntity();
        if ($this->request->is('post')) {
            $sistemasprofile = $this->Sistemasprofiles->patchEntity($sistemasprofile, $this->request->getData());
            if ($this->Sistemasprofiles->save($sistemasprofile)) {
                $this->Flash->success(__('The sistemasprofile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasprofile could not be saved. Please, try again.'));
        }
        $responsabilidades = $this->Sistemasprofiles->Responsabilidades->find('list', ['limit' => 200]);
        $this->set(compact('sistemasprofile', 'responsabilidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasprofile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasprofile = $this->Sistemasprofiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasprofile = $this->Sistemasprofiles->patchEntity($sistemasprofile, $this->request->getData());
            if ($this->Sistemasprofiles->save($sistemasprofile)) {
                $this->Flash->success(__('The sistemasprofile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasprofile could not be saved. Please, try again.'));
        }
        $responsabilidades = $this->Sistemasprofiles->Responsabilidades->find('list', ['limit' => 200]);
        $this->set(compact('sistemasprofile', 'responsabilidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasprofile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasprofile = $this->Sistemasprofiles->get($id);
        if ($this->Sistemasprofiles->delete($sistemasprofile)) {
            $this->Flash->success(__('The sistemasprofile has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasprofile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
