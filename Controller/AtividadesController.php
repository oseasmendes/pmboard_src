<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Atividades Controller
 *
 * @property \App\Model\Table\AtividadesTable $Atividades
 *
 * @method \App\Model\Entity\Atividade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtividadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $atividades = $this->paginate($this->Atividades);

        $this->set(compact('atividades'));
    }

    /**
     * View method
     *
     * @param string|null $id Atividade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atividade = $this->Atividades->get($id, [
            'contain' => ['Atasdetalhes']
        ]);

        $this->set('atividade', $atividade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atividade = $this->Atividades->newEntity();
        if ($this->request->is('post')) {
            $atividade = $this->Atividades->patchEntity($atividade, $this->request->getData());
            if ($this->Atividades->save($atividade)) {
                $this->Flash->success(__('The atividade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atividade could not be saved. Please, try again.'));
        }
        $this->set(compact('atividade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Atividade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atividade = $this->Atividades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atividade = $this->Atividades->patchEntity($atividade, $this->request->getData());
            if ($this->Atividades->save($atividade)) {
                $this->Flash->success(__('The atividade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atividade could not be saved. Please, try again.'));
        }
        $this->set(compact('atividade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Atividade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atividade = $this->Atividades->get($id);
        if ($this->Atividades->delete($atividade)) {
            $this->Flash->success(__('The atividade has been deleted.'));
        } else {
            $this->Flash->error(__('The atividade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
