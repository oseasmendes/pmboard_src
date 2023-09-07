<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetossprintsdailysreferences Controller
 *
 * @property \App\Model\Table\ProjetossprintsdailysreferencesTable $Projetossprintsdailysreferences
 *
 * @method \App\Model\Entity\Projetossprintsdailysreference[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetossprintsdailysreferencesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $dataatual = date('Y-m-d',strtotime("-10 days"));
        $this->paginate = [
            'contain' => ['Projetossprintsdailys'],

                                'conditions' => ['Projetossprintsdailysreferences.created > '=> $dataatual],
                                 /*'limit' => 100, */             
                                  'order' => [
                                'Projetossprintsdailysreferences.created' => 'desc','Projetossprintsdailysreferences.id' => 'asc'
                                ]
        ];
        $projetossprintsdailysreferences = $this->paginate($this->Projetossprintsdailysreferences);

        $this->set(compact('projetossprintsdailysreferences'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetossprintsdailysreference id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetossprintsdailysreference = $this->Projetossprintsdailysreferences->get($id, [
            'contain' => ['Projetossprintsdailys']
        ]);

        $this->set('projetossprintsdailysreference', $projetossprintsdailysreference);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetossprintsdailysreference = $this->Projetossprintsdailysreferences->newEntity();
        if ($this->request->is('post')) {
            $projetossprintsdailysreference = $this->Projetossprintsdailysreferences->patchEntity($projetossprintsdailysreference, $this->request->getData());
            if ($this->Projetossprintsdailysreferences->save($projetossprintsdailysreference)) {
                $this->Flash->success(__('The projetossprintsdailysreference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsdailysreference could not be saved. Please, try again.'));
        }
        $projetossprintsdailys = $this->Projetossprintsdailysreferences->Projetossprintsdailys->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsdailysreference', 'projetossprintsdailys'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetossprintsdailysreference id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetossprintsdailysreference = $this->Projetossprintsdailysreferences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetossprintsdailysreference = $this->Projetossprintsdailysreferences->patchEntity($projetossprintsdailysreference, $this->request->getData());
            if ($this->Projetossprintsdailysreferences->save($projetossprintsdailysreference)) {
                $this->Flash->success(__('The projetossprintsdailysreference has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsdailysreference could not be saved. Please, try again.'));
        }
        $projetossprintsdailys = $this->Projetossprintsdailysreferences->Projetossprintsdailys->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsdailysreference', 'projetossprintsdailys'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetossprintsdailysreference id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetossprintsdailysreference = $this->Projetossprintsdailysreferences->get($id);
        if ($this->Projetossprintsdailysreferences->delete($projetossprintsdailysreference)) {
            $this->Flash->success(__('The projetossprintsdailysreference has been deleted.'));
        } else {
            $this->Flash->error(__('The projetossprintsdailysreference could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
