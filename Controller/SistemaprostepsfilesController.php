<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemaprostepsfiles Controller
 *
 * @property \App\Model\Table\SistemaprostepsfilesTable $Sistemaprostepsfiles
 *
 * @method \App\Model\Entity\Sistemaprostepsfile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemaprostepsfilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemaprosteps']
        ];
        $sistemaprostepsfiles = $this->paginate($this->Sistemaprostepsfiles);

        $this->set(compact('sistemaprostepsfiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemaprostepsfile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemaprostepsfile = $this->Sistemaprostepsfiles->get($id, [
            'contain' => ['Sistemaprosteps']
        ]);

        $this->set('sistemaprostepsfile', $sistemaprostepsfile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemaprostepsfile = $this->Sistemaprostepsfiles->newEntity();
        if ($this->request->is('post')) {
            $sistemaprostepsfile = $this->Sistemaprostepsfiles->patchEntity($sistemaprostepsfile, $this->request->getData());
            if ($this->Sistemaprostepsfiles->save($sistemaprostepsfile)) {
                $this->Flash->success(__('The sistemaprostepsfile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemaprostepsfile could not be saved. Please, try again.'));
        }
        $sistemaprosteps = $this->Sistemaprostepsfiles->Sistemaprosteps->find('list', ['limit' => 200]);
        $this->set(compact('sistemaprostepsfile', 'sistemaprosteps'));
    }

    public function addid($id = null)
    {
        $sistemaprostepsfile = $this->Sistemaprostepsfiles->newEntity();
        if ($this->request->is('post')) {
            $sistemaprostepsfile = $this->Sistemaprostepsfiles->patchEntity($sistemaprostepsfile, $this->request->getData());
            $sistemaprostepsfile->sistemaprostep_id = $id;
            if ($this->Sistemaprostepsfiles->save($sistemaprostepsfile)) {
                $this->Flash->success(__('The sistemaprostepsfile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemaprostepsfile could not be saved. Please, try again.'));
        }
        $sistemaprosteps = $this->Sistemaprostepsfiles->Sistemaprosteps->find('list', ['limit' => 2000]);
        $this->set(compact('sistemaprostepsfile', 'sistemaprosteps'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemaprostepsfile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemaprostepsfile = $this->Sistemaprostepsfiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemaprostepsfile = $this->Sistemaprostepsfiles->patchEntity($sistemaprostepsfile, $this->request->getData());
            if ($this->Sistemaprostepsfiles->save($sistemaprostepsfile)) {
                $this->Flash->success(__('The sistemaprostepsfile has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemaprostepsfile could not be saved. Please, try again.'));
        }
        $sistemaprosteps = $this->Sistemaprostepsfiles->Sistemaprosteps->find('list', ['limit' => 200]);
        $this->set(compact('sistemaprostepsfile', 'sistemaprosteps'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemaprostepsfile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemaprostepsfile = $this->Sistemaprostepsfiles->get($id);
        if ($this->Sistemaprostepsfiles->delete($sistemaprostepsfile)) {
            $this->Flash->success(__('The sistemaprostepsfile has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemaprostepsfile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
