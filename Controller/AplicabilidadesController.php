<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aplicabilidades Controller
 *
 * @property \App\Model\Table\AplicabilidadesTable $Aplicabilidades
 *
 * @method \App\Model\Entity\Aplicabilidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AplicabilidadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $aplicabilidades = $this->paginate($this->Aplicabilidades);

        $this->set(compact('aplicabilidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Aplicabilidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aplicabilidade = $this->Aplicabilidades->get($id, [
            'contain' => ['Sistemasriscos']
        ]);

        $this->set('aplicabilidade', $aplicabilidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aplicabilidade = $this->Aplicabilidades->newEntity();
        if ($this->request->is('post')) {
            $aplicabilidade = $this->Aplicabilidades->patchEntity($aplicabilidade, $this->request->getData());
            if ($this->Aplicabilidades->save($aplicabilidade)) {
                $this->Flash->success(__('The aplicabilidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aplicabilidade could not be saved. Please, try again.'));
        }
        $this->set(compact('aplicabilidade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aplicabilidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aplicabilidade = $this->Aplicabilidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aplicabilidade = $this->Aplicabilidades->patchEntity($aplicabilidade, $this->request->getData());
            if ($this->Aplicabilidades->save($aplicabilidade)) {
                $this->Flash->success(__('The aplicabilidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aplicabilidade could not be saved. Please, try again.'));
        }
        $this->set(compact('aplicabilidade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aplicabilidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aplicabilidade = $this->Aplicabilidades->get($id);
        if ($this->Aplicabilidades->delete($aplicabilidade)) {
            $this->Flash->success(__('The aplicabilidade has been deleted.'));
        } else {
            $this->Flash->error(__('The aplicabilidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
