<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Etapas Controller
 *
 * @property \App\Model\Table\EtapasTable $Etapas
 *
 * @method \App\Model\Entity\Etapa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EtapasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $etapas = $this->paginate($this->Etapas);

        $this->set(compact('etapas'));
    }

    /**
     * View method
     *
     * @param string|null $id Etapa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $etapa = $this->Etapas->get($id, [
            'contain' => ['Atadetalhes']
        ]);

        $this->set('etapa', $etapa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $etapa = $this->Etapas->newEntity();
        if ($this->request->is('post')) {
            $etapa = $this->Etapas->patchEntity($etapa, $this->request->getData());
            if ($this->Etapas->save($etapa)) {
                $this->Flash->success(__('The etapa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etapa could not be saved. Please, try again.'));
        }
        $this->set(compact('etapa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Etapa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $etapa = $this->Etapas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $etapa = $this->Etapas->patchEntity($etapa, $this->request->getData());
            if ($this->Etapas->save($etapa)) {
                $this->Flash->success(__('The etapa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The etapa could not be saved. Please, try again.'));
        }
        $this->set(compact('etapa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Etapa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $etapa = $this->Etapas->get($id);
        if ($this->Etapas->delete($etapa)) {
            $this->Flash->success(__('The etapa has been deleted.'));
        } else {
            $this->Flash->error(__('The etapa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
