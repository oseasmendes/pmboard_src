<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasestrategias Controller
 *
 * @property \App\Model\Table\SistemasestrategiasTable $Sistemasestrategias
 *
 * @method \App\Model\Entity\Sistemasestrategia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasestrategiasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Estrategias']
        ];
        $sistemasestrategias = $this->paginate($this->Sistemasestrategias);

        $this->set(compact('sistemasestrategias'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasestrategia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasestrategia = $this->Sistemasestrategias->get($id, [
            'contain' => ['Estrategias', 'Sistemas']
        ]);

        $this->set('sistemasestrategia', $sistemasestrategia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasestrategia = $this->Sistemasestrategias->newEntity();
        if ($this->request->is('post')) {
            $sistemasestrategia = $this->Sistemasestrategias->patchEntity($sistemasestrategia, $this->request->getData());
            if ($this->Sistemasestrategias->save($sistemasestrategia)) {
                $this->Flash->success(__('The sistemasestrategia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasestrategia could not be saved. Please, try again.'));
        }
        $estrategias = $this->Sistemasestrategias->Estrategias->find('list', ['limit' => 200]);
        $this->set(compact('sistemasestrategia', 'estrategias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasestrategia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasestrategia = $this->Sistemasestrategias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasestrategia = $this->Sistemasestrategias->patchEntity($sistemasestrategia, $this->request->getData());
            if ($this->Sistemasestrategias->save($sistemasestrategia)) {
                $this->Flash->success(__('The sistemasestrategia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasestrategia could not be saved. Please, try again.'));
        }
        $estrategias = $this->Sistemasestrategias->Estrategias->find('list', ['limit' => 200]);
        $this->set(compact('sistemasestrategia', 'estrategias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasestrategia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasestrategia = $this->Sistemasestrategias->get($id);
        if ($this->Sistemasestrategias->delete($sistemasestrategia)) {
            $this->Flash->success(__('The sistemasestrategia has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasestrategia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
