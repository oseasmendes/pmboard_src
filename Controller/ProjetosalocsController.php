<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosalocs Controller
 *
 * @property \App\Model\Table\ProjetosalocsTable $Projetosalocs
 *
 * @method \App\Model\Entity\Projetosaloc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosalocsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Consultores', 'Statusfuncionals','Tipoalocs']
        ];
        $projetosalocs = $this->paginate($this->Projetosalocs);

        $this->set(compact('projetosalocs'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosaloc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosaloc = $this->Projetosalocs->get($id, [
            'contain' => ['Projetos', 'Consultores', 'Statusfuncionals', 'Projetosalocsnotas', 'Projetosalocsprofiles','Tipoalocs']
        ]);

        $this->set('projetosaloc', $projetosaloc);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosaloc = $this->Projetosalocs->newEntity();
        if ($this->request->is('post')) {
            $projetosaloc = $this->Projetosalocs->patchEntity($projetosaloc, $this->request->getData());
            $projetosaloc->projeto_id = $id;
            if ($this->Projetosalocs->save($projetosaloc)) {
                $this->Flash->success(__('The projetosaloc has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosaloc could not be saved. Please, try again.'));
        }

        $projetos = $this->Projetosalocs->Projetos->find('list', ['limit' => 200]);
        $tipoalocs = $this->Projetosalocs->Tipoalocs->find('list', ['limit' => 200]);
        $consultores = $this->Projetosalocs->Consultores->find('list',array('order' => array('nome' => 'asc')) ,['limit' => 200]);
        $statusfuncionals = $this->Projetosalocs->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosaloc', 'projetos', 'consultores', 'statusfuncionals','tipoalocs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosaloc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosaloc = $this->Projetosalocs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosaloc = $this->Projetosalocs->patchEntity($projetosaloc, $this->request->getData());
            $projetoid = $projetosaloc->projeto_id;
            if ($this->Projetosalocs->save($projetosaloc)) {
                $this->Flash->success(__('The projetosaloc has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetos','action' => 'view',$projetoid]);
            }
            $this->Flash->error(__('The projetosaloc could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosalocs->Projetos->find('list', ['limit' => 200]);
        $consultores = $this->Projetosalocs->Consultores->find('list',array('order' => array('nome' => 'asc')) ,['limit' => 200]);
        $statusfuncionals = $this->Projetosalocs->Statusfuncionals->find('list', ['limit' => 200]);
        $tipoalocs = $this->Projetosalocs->Tipoalocs->find('list', ['limit' => 200]);
        $this->set(compact('projetosaloc', 'projetos', 'consultores', 'statusfuncionals','tipoalocs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosaloc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosaloc = $this->Projetosalocs->get($id);
        $projetoid = $projetosaloc->projeto_id;
        if ($this->Projetosalocs->delete($projetosaloc)) {
            $this->Flash->success(__('The projetosaloc has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosaloc could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Projetos','action' => 'view',$projetoid]);
    }
}
