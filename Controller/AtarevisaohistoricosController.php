<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Atarevisaohistoricos Controller
 *
 * @property \App\Model\Table\AtarevisaohistoricosTable $Atarevisaohistoricos
 *
 * @method \App\Model\Entity\Atarevisaohistorico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtarevisaohistoricosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Atas', 'Atadetalhes']
        ];
        $atarevisaohistoricos = $this->paginate($this->Atarevisaohistoricos);

        $this->set(compact('atarevisaohistoricos'));
    }

    /**
     * View method
     *
     * @param string|null $id Atarevisaohistorico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atarevisaohistorico = $this->Atarevisaohistoricos->get($id, [
            'contain' => ['Atas', 'Atadetalhes']
        ]);

        $this->set('atarevisaohistorico', $atarevisaohistorico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atarevisaohistorico = $this->Atarevisaohistoricos->newEntity();
        if ($this->request->is('post')) {
            $atarevisaohistorico = $this->Atarevisaohistoricos->patchEntity($atarevisaohistorico, $this->request->getData());
            if ($this->Atarevisaohistoricos->save($atarevisaohistorico)) {
                $this->Flash->success(__('The atarevisaohistorico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atarevisaohistorico could not be saved. Please, try again.'));
        }
        $atas = $this->Atarevisaohistoricos->Atas->find('list', ['limit' => 200]);
        $atadetalhes = $this->Atarevisaohistoricos->Atadetalhes->find('list', ['limit' => 200]);
        $this->set(compact('atarevisaohistorico', 'atas', 'atadetalhes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Atarevisaohistorico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atarevisaohistorico = $this->Atarevisaohistoricos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atarevisaohistorico = $this->Atarevisaohistoricos->patchEntity($atarevisaohistorico, $this->request->getData());
            if ($this->Atarevisaohistoricos->save($atarevisaohistorico)) {
                $this->Flash->success(__('The atarevisaohistorico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atarevisaohistorico could not be saved. Please, try again.'));
        }
        $atas = $this->Atarevisaohistoricos->Atas->find('list', ['limit' => 200]);
        $atadetalhes = $this->Atarevisaohistoricos->Atadetalhes->find('list', ['limit' => 200]);
        $this->set(compact('atarevisaohistorico', 'atas', 'atadetalhes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Atarevisaohistorico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atarevisaohistorico = $this->Atarevisaohistoricos->get($id);
        if ($this->Atarevisaohistoricos->delete($atarevisaohistorico)) {
            $this->Flash->success(__('The atarevisaohistorico has been deleted.'));
        } else {
            $this->Flash->error(__('The atarevisaohistorico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
