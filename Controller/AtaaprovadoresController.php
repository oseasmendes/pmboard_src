<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ataaprovadores Controller
 *
 * @property \App\Model\Table\AtaaprovadoresTable $Ataaprovadores
 *
 * @method \App\Model\Entity\Ataaprovadore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtaaprovadoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Atas', 'Participantes']
        ];
        $ataaprovadores = $this->paginate($this->Ataaprovadores);

        $this->set(compact('ataaprovadores'));
    }

    /**
     * View method
     *
     * @param string|null $id Ataaprovadore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ataaprovadore = $this->Ataaprovadores->get($id, [
            'contain' => ['Atas', 'Participantes']
        ]);

        $this->set('ataaprovadore', $ataaprovadore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ataaprovadore = $this->Ataaprovadores->newEntity();
        if ($this->request->is('post')) {
            $ataaprovadore = $this->Ataaprovadores->patchEntity($ataaprovadore, $this->request->getData());
            if ($this->Ataaprovadores->save($ataaprovadore)) {
                $this->Flash->success(__('The ataaprovadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ataaprovadore could not be saved. Please, try again.'));
        }
        $atas = $this->Ataaprovadores->Atas->find('list', ['limit' => 200]);
        $participantes = $this->Ataaprovadores->Participantes->find('list', ['limit' => 200]);
        $this->set(compact('ataaprovadore', 'atas', 'participantes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ataaprovadore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ataaprovadore = $this->Ataaprovadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ataaprovadore = $this->Ataaprovadores->patchEntity($ataaprovadore, $this->request->getData());
            if ($this->Ataaprovadores->save($ataaprovadore)) {
                $this->Flash->success(__('The ataaprovadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ataaprovadore could not be saved. Please, try again.'));
        }
        $atas = $this->Ataaprovadores->Atas->find('list', ['limit' => 200]);
        $participantes = $this->Ataaprovadores->Participantes->find('list', ['limit' => 200]);
        $this->set(compact('ataaprovadore', 'atas', 'participantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ataaprovadore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ataaprovadore = $this->Ataaprovadores->get($id);
        if ($this->Ataaprovadores->delete($ataaprovadore)) {
            $this->Flash->success(__('The ataaprovadore has been deleted.'));
        } else {
            $this->Flash->error(__('The ataaprovadore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
