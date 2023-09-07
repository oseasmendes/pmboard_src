<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Estrategias Controller
 *
 * @property \App\Model\Table\EstrategiasTable $Estrategias
 *
 * @method \App\Model\Entity\Estrategia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstrategiasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $estrategias = $this->paginate($this->Estrategias);

        $this->set(compact('estrategias'));
    }

    /**
     * View method
     *
     * @param string|null $id Estrategia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estrategia = $this->Estrategias->get($id, [
            'contain' => ['Sistemasestrategias']
        ]);

        $this->set('estrategia', $estrategia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estrategia = $this->Estrategias->newEntity();
        if ($this->request->is('post')) {
            $estrategia = $this->Estrategias->patchEntity($estrategia, $this->request->getData());
            if ($this->Estrategias->save($estrategia)) {
                $this->Flash->success(__('The estrategia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estrategia could not be saved. Please, try again.'));
        }
        $this->set(compact('estrategia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estrategia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estrategia = $this->Estrategias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estrategia = $this->Estrategias->patchEntity($estrategia, $this->request->getData());
            if ($this->Estrategias->save($estrategia)) {
                $this->Flash->success(__('The estrategia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estrategia could not be saved. Please, try again.'));
        }
        $this->set(compact('estrategia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estrategia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estrategia = $this->Estrategias->get($id);
        if ($this->Estrategias->delete($estrategia)) {
            $this->Flash->success(__('The estrategia has been deleted.'));
        } else {
            $this->Flash->error(__('The estrategia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
