<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosrestrictions Controller
 *
 * @property \App\Model\Table\ProjetosrestrictionsTable $Projetosrestrictions
 *
 * @method \App\Model\Entity\Projetosrestriction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosrestrictionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Statusfuncionals', 'Consultores']
        ];
        $projetosrestrictions = $this->paginate($this->Projetosrestrictions);

        $this->set(compact('projetosrestrictions'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosrestriction id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosrestriction = $this->Projetosrestrictions->get($id, [
            'contain' => ['Projetos', 'Statusfuncionals', 'Consultores', 'Projetosrestrictionsfls']
        ]);

        $this->set('projetosrestriction', $projetosrestriction);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosrestriction = $this->Projetosrestrictions->newEntity();
        if ($this->request->is('post')) {
            $projetosrestriction = $this->Projetosrestrictions->patchEntity($projetosrestriction, $this->request->getData());
            if ($this->Projetosrestrictions->save($projetosrestriction)) {
                $this->Flash->success(__('The projetosrestriction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosrestriction could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosrestrictions->Projetos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosrestrictions->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosrestrictions->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('projetosrestriction', 'projetos', 'statusfuncionals', 'consultores'));
    }

    public function addid($id = null)
    {
        $projetosrestriction = $this->Projetosrestrictions->newEntity();
        if ($this->request->is('post')) {
            $projetosrestriction = $this->Projetosrestrictions->patchEntity($projetosrestriction, $this->request->getData());
            $projetosrestriction->projeto_id = $id;
            if ($this->Projetosrestrictions->save($projetosrestriction)) {
                $this->Flash->success(__('The projetosrestriction has been saved.'));

                // return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosrestriction could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosrestrictions->Projetos->find('list', ['limit' => 2000]);
        $statusfuncionals = $this->Projetosrestrictions->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosrestrictions->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('projetosrestriction', 'projetos', 'statusfuncionals', 'consultores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosrestriction id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosrestriction = $this->Projetosrestrictions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosrestriction = $this->Projetosrestrictions->patchEntity($projetosrestriction, $this->request->getData());
            $projetoid = $projetosrestriction->projeto_id;
            if ($this->Projetosrestrictions->save($projetosrestriction)) {
                $this->Flash->success(__('The projetosrestriction has been saved.'));

                //return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller' => 'Projetos','action' => 'view',$projetoid]);
            }
            $this->Flash->error(__('The projetosrestriction could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosrestrictions->Projetos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosrestrictions->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosrestrictions->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('projetosrestriction', 'projetos', 'statusfuncionals', 'consultores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosrestriction id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosrestriction = $this->Projetosrestrictions->get($id);
        $projetoid = $projetosrestriction->projeto_id;
        if ($this->Projetosrestrictions->delete($projetosrestriction)) {
            $this->Flash->success(__('The projetosrestriction has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosrestriction could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Projetos','action' => 'view',$projetoid]);
    }
}
