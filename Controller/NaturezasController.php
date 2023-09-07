<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Naturezas Controller
 *
 * @property \App\Model\Table\NaturezasTable $Naturezas
 *
 * @method \App\Model\Entity\Natureza[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NaturezasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $naturezas = $this->paginate($this->Naturezas);

        $this->set(compact('naturezas'));
    }

    /**
     * View method
     *
     * @param string|null $id Natureza id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $natureza = $this->Naturezas->get($id, [
            'contain' => ['Todos']
        ]);

        $this->set('natureza', $natureza);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $natureza = $this->Naturezas->newEntity();
        if ($this->request->is('post')) {
            $natureza = $this->Naturezas->patchEntity($natureza, $this->request->getData());
            if ($this->Naturezas->save($natureza)) {
                $this->Flash->success(__('The natureza has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The natureza could not be saved. Please, try again.'));
        }
        $this->set(compact('natureza'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Natureza id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $natureza = $this->Naturezas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $natureza = $this->Naturezas->patchEntity($natureza, $this->request->getData());
            if ($this->Naturezas->save($natureza)) {
                $this->Flash->success(__('The natureza has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The natureza could not be saved. Please, try again.'));
        }
        $this->set(compact('natureza'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Natureza id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $natureza = $this->Naturezas->get($id);
        if ($this->Naturezas->delete($natureza)) {
            $this->Flash->success(__('The natureza has been deleted.'));
        } else {
            $this->Flash->error(__('The natureza could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
