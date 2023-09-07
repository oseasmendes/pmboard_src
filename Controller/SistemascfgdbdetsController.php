<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemascfgdbdets Controller
 *
 * @property \App\Model\Table\SistemascfgdbdetsTable $Sistemascfgdbdets
 *
 * @method \App\Model\Entity\Sistemascfgdbdet[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemascfgdbdetsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemascfgdbs']
        ];
        $sistemascfgdbdets = $this->paginate($this->Sistemascfgdbdets);

        $this->set(compact('sistemascfgdbdets'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemascfgdbdet id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemascfgdbdet = $this->Sistemascfgdbdets->get($id, [
            'contain' => ['Sistemascfgdbs']
        ]);

        $this->set('sistemascfgdbdet', $sistemascfgdbdet);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemascfgdbdet = $this->Sistemascfgdbdets->newEntity();
        if ($this->request->is('post')) {
            $sistemascfgdbdet = $this->Sistemascfgdbdets->patchEntity($sistemascfgdbdet, $this->request->getData());
             $sistemascfgdbdet->sistemascfgdb_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemascfgdbdets->save($sistemascfgdbdet)) {
                $this->Flash->success(__('The sistemascfgdbdet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemascfgdbdet could not be saved. Please, try again.'));
        }
        $sistemascfgdbs = $this->Sistemascfgdbdets->Sistemascfgdbs->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgdbdet', 'sistemascfgdbs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemascfgdbdet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemascfgdbdet = $this->Sistemascfgdbdets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemascfgdbdet = $this->Sistemascfgdbdets->patchEntity($sistemascfgdbdet, $this->request->getData());
            if ($this->Sistemascfgdbdets->save($sistemascfgdbdet)) {
                $this->Flash->success(__('The sistemascfgdbdet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemascfgdbdet could not be saved. Please, try again.'));
        }
        $sistemascfgdbs = $this->Sistemascfgdbdets->Sistemascfgdbs->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgdbdet', 'sistemascfgdbs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemascfgdbdet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemascfgdbdet = $this->Sistemascfgdbdets->get($id);
        if ($this->Sistemascfgdbdets->delete($sistemascfgdbdet)) {
            $this->Flash->success(__('The sistemascfgdbdet has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemascfgdbdet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
