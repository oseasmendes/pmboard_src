<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Unidademedidas Controller
 *
 * @property \App\Model\Table\UnidademedidasTable $Unidademedidas
 *
 * @method \App\Model\Entity\Unidademedida[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UnidademedidasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $unidademedidas = $this->paginate($this->Unidademedidas);

        $this->set(compact('unidademedidas'));
    }

    /**
     * View method
     *
     * @param string|null $id Unidademedida id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $unidademedida = $this->Unidademedidas->get($id, [
            'contain' => ['Projetosprodutosentregas']
        ]);

        $this->set('unidademedida', $unidademedida);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $unidademedida = $this->Unidademedidas->newEntity();
        if ($this->request->is('post')) {
            $unidademedida = $this->Unidademedidas->patchEntity($unidademedida, $this->request->getData());
            if ($this->Unidademedidas->save($unidademedida)) {
                $this->Flash->success(__('The unidademedida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The unidademedida could not be saved. Please, try again.'));
        }
        $this->set(compact('unidademedida'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Unidademedida id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $unidademedida = $this->Unidademedidas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $unidademedida = $this->Unidademedidas->patchEntity($unidademedida, $this->request->getData());
            if ($this->Unidademedidas->save($unidademedida)) {
                $this->Flash->success(__('The unidademedida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The unidademedida could not be saved. Please, try again.'));
        }
        $this->set(compact('unidademedida'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Unidademedida id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $unidademedida = $this->Unidademedidas->get($id);
        if ($this->Unidademedidas->delete($unidademedida)) {
            $this->Flash->success(__('The unidademedida has been deleted.'));
        } else {
            $this->Flash->error(__('The unidademedida could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
