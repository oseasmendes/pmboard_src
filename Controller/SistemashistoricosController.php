<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemashistoricos Controller
 *
 * @property \App\Model\Table\SistemashistoricosTable $Sistemashistoricos
 *
 * @method \App\Model\Entity\Sistemashistorico[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemashistoricosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas']
        ];
        $sistemashistoricos = $this->paginate($this->Sistemashistoricos);

        $this->set(compact('sistemashistoricos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemashistorico id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemashistorico = $this->Sistemashistoricos->get($id, [
            'contain' => ['Sistemas']
        ]);

        $this->set('sistemashistorico', $sistemashistorico);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemashistorico = $this->Sistemashistoricos->newEntity();
        if ($this->request->is('post')) {
            $sistemashistorico = $this->Sistemashistoricos->patchEntity($sistemashistorico, $this->request->getData());
              $sistemashistorico->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemashistoricos->save($sistemashistorico)) {
                $this->Flash->success(__('The sistemashistorico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemashistorico could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemashistoricos->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemashistorico', 'sistemas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemashistorico id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemashistorico = $this->Sistemashistoricos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemashistorico = $this->Sistemashistoricos->patchEntity($sistemashistorico, $this->request->getData());
            if ($this->Sistemashistoricos->save($sistemashistorico)) {
                $this->Flash->success(__('The sistemashistorico has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemashistorico could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemashistoricos->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemashistorico', 'sistemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemashistorico id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemashistorico = $this->Sistemashistoricos->get($id);
        if ($this->Sistemashistoricos->delete($sistemashistorico)) {
            $this->Flash->success(__('The sistemashistorico has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemashistorico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
