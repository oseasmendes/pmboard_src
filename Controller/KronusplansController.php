<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kronusplans Controller
 *
 * @property \App\Model\Table\KronusplansTable $Kronusplans
 *
 * @method \App\Model\Entity\Kronusplan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KronusplansController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Statusfuncionals','Projetosprodutos']
        ];
        $kronusplans = $this->paginate($this->Kronusplans);

        $this->set(compact('kronusplans'));
    }

    /**
     * View method
     *
     * @param string|null $id Kronusplan id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kronusplan = $this->Kronusplans->get($id, [
            'contain' => ['Projetos', 'Statusfuncionals', 'Kronus', 'Kronusitems','Projetosprodutos']
        ]);

        $this->set('kronusplan', $kronusplan);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kronusplan = $this->Kronusplans->newEntity();
        if ($this->request->is('post')) {
            $kronusplan = $this->Kronusplans->patchEntity($kronusplan, $this->request->getData());
            if ($this->Kronusplans->save($kronusplan)) {
                $this->Flash->success(__('The kronusplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kronusplan could not be saved. Please, try again.'));
        }
        $projetos = $this->Kronusplans->Projetos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Kronusplans->Projetosprodutos->find('list', ['limit' => 2000]);
        $statusfuncionals = $this->Kronusplans->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('kronusplan', 'projetos','projetosprodutos', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kronusplan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kronusplan = $this->Kronusplans->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kronusplan = $this->Kronusplans->patchEntity($kronusplan, $this->request->getData());
            if ($this->Kronusplans->save($kronusplan)) {
                $this->Flash->success(__('The kronusplan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kronusplan could not be saved. Please, try again.'));
        }
        $projetos = $this->Kronusplans->Projetos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Kronusplans->Projetosprodutos->find('list', ['limit' => 2000]);
        $statusfuncionals = $this->Kronusplans->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('kronusplan', 'projetos','projetosprodutos', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kronusplan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kronusplan = $this->Kronusplans->get($id);
        if ($this->Kronusplans->delete($kronusplan)) {
            $this->Flash->success(__('The kronusplan has been deleted.'));
        } else {
            $this->Flash->error(__('The kronusplan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
