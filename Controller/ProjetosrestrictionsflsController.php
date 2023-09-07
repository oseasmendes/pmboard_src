<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosrestrictionsfls Controller
 *
 * @property \App\Model\Table\ProjetosrestrictionsflsTable $Projetosrestrictionsfls
 *
 * @method \App\Model\Entity\Projetosrestrictionsfl[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosrestrictionsflsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosrestrictions']
        ];
        $projetosrestrictionsfls = $this->paginate($this->Projetosrestrictionsfls);

        $this->set(compact('projetosrestrictionsfls'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosrestrictionsfl id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosrestrictionsfl = $this->Projetosrestrictionsfls->get($id, [
            'contain' => ['Projetosrestrictions']
        ]);

        $this->set('projetosrestrictionsfl', $projetosrestrictionsfl);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosrestrictionsfl = $this->Projetosrestrictionsfls->newEntity();
        if ($this->request->is('post')) {
            $projetosrestrictionsfl = $this->Projetosrestrictionsfls->patchEntity($projetosrestrictionsfl, $this->request->getData());
            if ($this->Projetosrestrictionsfls->save($projetosrestrictionsfl)) {
                $this->Flash->success(__('The projetosrestrictionsfl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosrestrictionsfl could not be saved. Please, try again.'));
        }
        $projetosrestrictions = $this->Projetosrestrictionsfls->Projetosrestrictions->find('list', ['limit' => 200]);
        $this->set(compact('projetosrestrictionsfl', 'projetosrestrictions'));
    }

    public function addid($id = null)
    {
        $projetosrestrictionsfl = $this->Projetosrestrictionsfls->newEntity();
        if ($this->request->is('post')) {
            $projetosrestrictionsfl = $this->Projetosrestrictionsfls->patchEntity($projetosrestrictionsfl, $this->request->getData());
            if ($this->Projetosrestrictionsfls->save($projetosrestrictionsfl)) {
                $this->Flash->success(__('The projetosrestrictionsfl has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosrestrictions','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosrestrictionsfl could not be saved. Please, try again.'));
        }
        $projetosrestrictions = $this->Projetosrestrictionsfls->Projetosrestrictions->find('list', ['limit' => 2000]);
        $this->set(compact('projetosrestrictionsfl', 'projetosrestrictions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosrestrictionsfl id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosrestrictionsfl = $this->Projetosrestrictionsfls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosrestrictionsfl = $this->Projetosrestrictionsfls->patchEntity($projetosrestrictionsfl, $this->request->getData());
            if ($this->Projetosrestrictionsfls->save($projetosrestrictionsfl)) {
                $this->Flash->success(__('The projetosrestrictionsfl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosrestrictionsfl could not be saved. Please, try again.'));
        }
        $projetosrestrictions = $this->Projetosrestrictionsfls->Projetosrestrictions->find('list', ['limit' => 200]);
        $this->set(compact('projetosrestrictionsfl', 'projetosrestrictions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosrestrictionsfl id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosrestrictionsfl = $this->Projetosrestrictionsfls->get($id);
        if ($this->Projetosrestrictionsfls->delete($projetosrestrictionsfl)) {
            $this->Flash->success(__('The projetosrestrictionsfl has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosrestrictionsfl could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
