<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosblockpoints Controller
 *
 * @property \App\Model\Table\ProjetosblockpointsTable $Projetosblockpoints
 *
 * @method \App\Model\Entity\Projetosblockpoint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosblockpointsController extends AppController
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
            ,
            'conditions' => ['Projetosblockpoints.statusfuncional_id =' => 11]
        ];

        $projetosblockpoints = $this->paginate($this->Projetosblockpoints);

        $this->set(compact('projetosblockpoints'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosblockpoint id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosblockpoint = $this->Projetosblockpoints->get($id, [
            'contain' => ['Projetos', 'Statusfuncionals', 'Consultores','Projetosblockpointsfls']
        ]);

        $this->set('projetosblockpoint', $projetosblockpoint);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosblockpoint = $this->Projetosblockpoints->newEntity();
        if ($this->request->is('post')) {
            $projetosblockpoint = $this->Projetosblockpoints->patchEntity($projetosblockpoint, $this->request->getData());
            if ($this->Projetosblockpoints->save($projetosblockpoint)) {
                $this->Flash->success(__('The projetosblockpoint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosblockpoint could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosblockpoints->Projetos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosblockpoints->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosblockpoints->Consultores->find('list',array('conditions'=>array('Consultores.engajado ='=> true),'order' => array('Consultores.nome' => 'asc')) , ['limit' => 200]);
        $this->set(compact('projetosblockpoint', 'projetos', 'statusfuncionals', 'consultores'));
    }

 public function addid($id = null)
    {
        $projetosblockpoint = $this->Projetosblockpoints->newEntity();
        if ($this->request->is('post')) {
            $projetosblockpoint = $this->Projetosblockpoints->patchEntity($projetosblockpoint, $this->request->getData());
            $projetosblockpoint->projeto_id = $id;
            if ($this->Projetosblockpoints->save($projetosblockpoint)) {
                $this->Flash->success(__('The projetosblockpoint has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosblockpoint could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosblockpoints->Projetos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosblockpoints->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosblockpoints->Consultores->find('list',array('conditions'=>array('Consultores.engajado ='=> true),'order' => array('Consultores.nome' => 'asc')) , ['limit' => 200]);
        $this->set(compact('projetosblockpoint', 'projetos', 'statusfuncionals', 'consultores'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Projetosblockpoint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosblockpoint = $this->Projetosblockpoints->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosblockpoint = $this->Projetosblockpoints->patchEntity($projetosblockpoint, $this->request->getData());
            $projetosid = $projetosblockpoint->projeto_id;
            if ($this->Projetosblockpoints->save($projetosblockpoint)) {
                $this->Flash->success(__('The projetosblockpoint has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetos','action' => 'view',$projetosid]);
            }
            $this->Flash->error(__('The projetosblockpoint could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosblockpoints->Projetos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosblockpoints->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosblockpoints->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('projetosblockpoint', 'projetos', 'statusfuncionals', 'consultores'));
    }

    public function editar($id = null)
    {
        $projetosblockpoint = $this->Projetosblockpoints->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosblockpoint = $this->Projetosblockpoints->patchEntity($projetosblockpoint, $this->request->getData());
            if ($this->Projetosblockpoints->save($projetosblockpoint)) {
                $this->Flash->success(__('The projetosblockpoint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosblockpoint could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosblockpoints->Projetos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosblockpoints->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Projetosblockpoints->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('projetosblockpoint', 'projetos', 'statusfuncionals', 'consultores'));
    }
    /**
     * Delete method
     *
     * @param string|null $id Projetosblockpoint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosblockpoint = $this->Projetosblockpoints->get($id);
        $projetosid = $projetosblockpoint->projeto_id;
        if ($this->Projetosblockpoints->delete($projetosblockpoint)) {
            $this->Flash->success(__('The projetosblockpoint has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosblockpoint could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Projetos','action' => 'view',$projetosid]);
    }
}
