<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fupdeployed Controller
 *
 * @property \App\Model\Table\FupdeployedTable $Fupdeployed
 *
 * @method \App\Model\Entity\Fupdeployed[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FupdeployedController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fupagendas']
        ];
        $fupdeployed = $this->paginate($this->Fupdeployed);

        $this->set(compact('fupdeployed'));
    }

    /**
     * View method
     *
     * @param string|null $id Fupdeployed id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fupdeployed = $this->Fupdeployed->get($id, [
            'contain' => ['Fupagendas']
        ]);

        $this->set('fupdeployed', $fupdeployed);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fupdeployed = $this->Fupdeployed->newEntity();
        if ($this->request->is('post')) {
            $fupdeployed = $this->Fupdeployed->patchEntity($fupdeployed, $this->request->getData());
            if ($this->Fupdeployed->save($fupdeployed)) {
                $this->Flash->success(__('The fupdeployed has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupdeployed could not be saved. Please, try again.'));
        }
        $fupagendas = $this->Fupdeployed->Fupagendas->find('list', ['limit' => 200]);
        $this->set(compact('fupdeployed', 'fupagendas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fupdeployed id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fupdeployed = $this->Fupdeployed->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fupdeployed = $this->Fupdeployed->patchEntity($fupdeployed, $this->request->getData());
            if ($this->Fupdeployed->save($fupdeployed)) {
                $this->Flash->success(__('The fupdeployed has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupdeployed could not be saved. Please, try again.'));
        }
        $fupagendas = $this->Fupdeployed->Fupagendas->find('list', ['limit' => 200]);
        $this->set(compact('fupdeployed', 'fupagendas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fupdeployed id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fupdeployed = $this->Fupdeployed->get($id);
        if ($this->Fupdeployed->delete($fupdeployed)) {
            $this->Flash->success(__('The fupdeployed has been deleted.'));
        } else {
            $this->Flash->error(__('The fupdeployed could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
