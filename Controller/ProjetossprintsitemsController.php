<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetossprintsitems Controller
 *
 * @property \App\Model\Table\ProjetossprintsitemsTable $Projetossprintsitems
 *
 * @method \App\Model\Entity\Projetossprintsitem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetossprintsitemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetossprints', 'Projetosprodutosentregas', 'Statusfuncionals', 'Paretos']
        ];
        $projetossprintsitems = $this->paginate($this->Projetossprintsitems);

        $this->set(compact('projetossprintsitems'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetossprintsitem id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetossprintsitem = $this->Projetossprintsitems->get($id, [
            'contain' => ['Projetossprints', 'Projetosprodutosentregas', 'Statusfuncionals', 'Paretos']
        ]);

        $this->set('projetossprintsitem', $projetossprintsitem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetossprintsitem = $this->Projetossprintsitems->newEntity();
        if ($this->request->is('post')) {
            $projetossprintsitem = $this->Projetossprintsitems->patchEntity($projetossprintsitem, $this->request->getData());
            if ($this->Projetossprintsitems->save($projetossprintsitem)) {
                $this->Flash->success(__('The projetossprintsitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsitem could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Projetossprintsitems->Projetossprints->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetossprintsitems->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetossprintsitems->Statusfuncionals->find('list', ['limit' => 200]);
        $paretos = $this->Projetossprintsitems->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsitem', 'projetossprints', 'projetosprodutosentregas', 'statusfuncionals', 'paretos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetossprintsitem id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetossprintsitem = $this->Projetossprintsitems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetossprintsitem = $this->Projetossprintsitems->patchEntity($projetossprintsitem, $this->request->getData());
            if ($this->Projetossprintsitems->save($projetossprintsitem)) {
                $this->Flash->success(__('The projetossprintsitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsitem could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Projetossprintsitems->Projetossprints->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetossprintsitems->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetossprintsitems->Statusfuncionals->find('list', ['limit' => 200]);
        $paretos = $this->Projetossprintsitems->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsitem', 'projetossprints', 'projetosprodutosentregas', 'statusfuncionals', 'paretos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetossprintsitem id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetossprintsitem = $this->Projetossprintsitems->get($id);
        if ($this->Projetossprintsitems->delete($projetossprintsitem)) {
            $this->Flash->success(__('The projetossprintsitem has been deleted.'));
        } else {
            $this->Flash->error(__('The projetossprintsitem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
