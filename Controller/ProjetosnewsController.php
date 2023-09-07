<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosnews Controller
 *
 * @property \App\Model\Table\ProjetosnewsTable $Projetosnews
 *
 * @method \App\Model\Entity\Projetosnews[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosnewsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos']
        ];
        $projetosnews = $this->paginate($this->Projetosnews);

        $this->set(compact('projetosnews'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosnews id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosnews = $this->Projetosnews->get($id, [
            'contain' => ['Projetos']
        ]);

        $this->set('projetosnews', $projetosnews);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosnews = $this->Projetosnews->newEntity();
        if ($this->request->is('post')) {
            $projetosnews = $this->Projetosnews->patchEntity($projetosnews, $this->request->getData());
            if ($this->Projetosnews->save($projetosnews)) {
                $this->Flash->success(__('The projetosnews has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosnews could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosnews->Projetos->find('list', ['limit' => 200]);
        $this->set(compact('projetosnews', 'projetos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosnews id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosnews = $this->Projetosnews->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosnews = $this->Projetosnews->patchEntity($projetosnews, $this->request->getData());
            if ($this->Projetosnews->save($projetosnews)) {
                $this->Flash->success(__('The projetosnews has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosnews could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosnews->Projetos->find('list', ['limit' => 200]);
        $this->set(compact('projetosnews', 'projetos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosnews id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosnews = $this->Projetosnews->get($id);
        if ($this->Projetosnews->delete($projetosnews)) {
            $this->Flash->success(__('The projetosnews has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosnews could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
