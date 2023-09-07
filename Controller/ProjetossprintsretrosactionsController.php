<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetossprintsretrosactions Controller
 *
 * @property \App\Model\Table\ProjetossprintsretrosactionsTable $Projetossprintsretrosactions
 *
 * @method \App\Model\Entity\Projetossprintsretrosaction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetossprintsretrosactionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetossprintsretrositems', 'Consultores', 'Pillars', 'Pillarsareas', 'Pillarsresponsabilities', 'Statusfuncionals']
        ];
        $projetossprintsretrosactions = $this->paginate($this->Projetossprintsretrosactions);

        $this->set(compact('projetossprintsretrosactions'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetossprintsretrosaction id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetossprintsretrosaction = $this->Projetossprintsretrosactions->get($id, [
            'contain' => ['Projetossprintsretrositems', 'Consultores', 'Pillars', 'Pillarsareas', 'Pillarsresponsabilities', 'Statusfuncionals']
        ]);

        $this->set('projetossprintsretrosaction', $projetossprintsretrosaction);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetossprintsretrosaction = $this->Projetossprintsretrosactions->newEntity();
        if ($this->request->is('post')) {
            $projetossprintsretrosaction = $this->Projetossprintsretrosactions->patchEntity($projetossprintsretrosaction, $this->request->getData());
            $projetossprintsretrosaction->projetossprintsretrositem_id = $id;
            if ($this->Projetossprintsretrosactions->save($projetossprintsretrosaction)) {
                $this->Flash->success(__('The projetossprintsretrosaction has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetossprintsretrositems','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetossprintsretrosaction could not be saved. Please, try again.'));
        }
        
        $projetossprintsretrositems = $this->Projetossprintsretrosactions->Projetossprintsretrositems->find('list', array('conditions'=>array('Projetossprintsretrositems.id'=>$id),'order' => array('descricao' => 'asc')), ['limit' => 200]);        
        $consultores = $this->Projetossprintsretrosactions->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=> true),'order' => array('nome' => 'asc')) , ['limit' => 200]);        
        $pillars = $this->Projetossprintsretrosactions->Pillars->find('list', ['limit' => 200]);
        $pillarsareas = $this->Projetossprintsretrosactions->Pillarsareas->find('list', ['limit' => 200]);
        $pillarsresponsabilities = $this->Projetossprintsretrosactions->Pillarsresponsabilities->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetossprintsretrosactions->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsretrosaction', 'projetossprintsretrositems', 'consultores', 'pillars', 'pillarsareas', 'pillarsresponsabilities', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetossprintsretrosaction id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetossprintsretrosaction = $this->Projetossprintsretrosactions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetossprintsretrosaction = $this->Projetossprintsretrosactions->patchEntity($projetossprintsretrosaction, $this->request->getData());
            if ($this->Projetossprintsretrosactions->save($projetossprintsretrosaction)) {
                $this->Flash->success(__('The projetossprintsretrosaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsretrosaction could not be saved. Please, try again.'));
        }
        $projetossprintsretrositems = $this->Projetossprintsretrosactions->Projetossprintsretrositems->find('list', ['limit' => 200]);
        $consultores = $this->Projetossprintsretrosactions->Consultores->find('list', ['limit' => 200]);
        $pillars = $this->Projetossprintsretrosactions->Pillars->find('list', ['limit' => 200]);
        $pillarsareas = $this->Projetossprintsretrosactions->Pillarsareas->find('list', ['limit' => 200]);
        $pillarsresponsabilities = $this->Projetossprintsretrosactions->Pillarsresponsabilities->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetossprintsretrosactions->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsretrosaction', 'projetossprintsretrositems', 'consultores', 'pillars', 'pillarsareas', 'pillarsresponsabilities', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetossprintsretrosaction id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetossprintsretrosaction = $this->Projetossprintsretrosactions->get($id);
        if ($this->Projetossprintsretrosactions->delete($projetossprintsretrosaction)) {
            $this->Flash->success(__('The projetossprintsretrosaction has been deleted.'));
        } else {
            $this->Flash->error(__('The projetossprintsretrosaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
