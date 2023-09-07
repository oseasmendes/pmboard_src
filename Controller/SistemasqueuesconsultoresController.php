<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasqueuesconsultores Controller
 *
 * @property \App\Model\Table\SistemasqueuesconsultoresTable $Sistemasqueuesconsultores
 *
 * @method \App\Model\Entity\Sistemasqueuesconsultore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasqueuesconsultoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemasqueues', 'Consultores']
        ];
        $sistemasqueuesconsultores = $this->paginate($this->Sistemasqueuesconsultores);

        $this->set(compact('sistemasqueuesconsultores'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasqueuesconsultore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasqueuesconsultore = $this->Sistemasqueuesconsultores->get($id, [
            'contain' => ['Sistemasqueues', 'Consultores']
        ]);

        $this->set('sistemasqueuesconsultore', $sistemasqueuesconsultore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasqueuesconsultore = $this->Sistemasqueuesconsultores->newEntity();
        if ($this->request->is('post')) {
            $sistemasqueuesconsultore = $this->Sistemasqueuesconsultores->patchEntity($sistemasqueuesconsultore, $this->request->getData());
            if ($this->Sistemasqueuesconsultores->save($sistemasqueuesconsultore)) {
                $this->Flash->success(__('The sistemasqueuesconsultore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasqueuesconsultore could not be saved. Please, try again.'));
        }
        $sistemasqueues = $this->Sistemasqueuesconsultores->Sistemasqueues->find('list', ['limit' => 200]);
        $consultores = $this->Sistemasqueuesconsultores->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('sistemasqueuesconsultore', 'sistemasqueues', 'consultores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasqueuesconsultore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasqueuesconsultore = $this->Sistemasqueuesconsultores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasqueuesconsultore = $this->Sistemasqueuesconsultores->patchEntity($sistemasqueuesconsultore, $this->request->getData());
            if ($this->Sistemasqueuesconsultores->save($sistemasqueuesconsultore)) {
                $this->Flash->success(__('The sistemasqueuesconsultore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasqueuesconsultore could not be saved. Please, try again.'));
        }
        $sistemasqueues = $this->Sistemasqueuesconsultores->Sistemasqueues->find('list', ['limit' => 200]);
        $consultores = $this->Sistemasqueuesconsultores->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('sistemasqueuesconsultore', 'sistemasqueues', 'consultores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasqueuesconsultore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasqueuesconsultore = $this->Sistemasqueuesconsultores->get($id);
        if ($this->Sistemasqueuesconsultores->delete($sistemasqueuesconsultore)) {
            $this->Flash->success(__('The sistemasqueuesconsultore has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasqueuesconsultore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
