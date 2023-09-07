<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosalocsprofiles Controller
 *
 * @property \App\Model\Table\ProjetosalocsprofilesTable $Projetosalocsprofiles
 *
 * @method \App\Model\Entity\Projetosalocsprofile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosalocsprofilesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosalocs', 'Statusfuncionals', 'Competencias']
        ];
        $projetosalocsprofiles = $this->paginate($this->Projetosalocsprofiles);

        $this->set(compact('projetosalocsprofiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosalocsprofile id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosalocsprofile = $this->Projetosalocsprofiles->get($id, [
            'contain' => ['Projetosalocs', 'Statusfuncionals', 'Competencias','Propostasalocs']
        ]);

        $this->set('projetosalocsprofile', $projetosalocsprofile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosalocsprofile = $this->Projetosalocsprofiles->newEntity();
        if ($this->request->is('post')) {
            $projetosalocsprofile = $this->Projetosalocsprofiles->patchEntity($projetosalocsprofile, $this->request->getData());
            $projetosalocsprofile->projetosaloc_id = $id; 
            if ($this->Projetosalocsprofiles->save($projetosalocsprofile)) {
                $this->Flash->success(__('The projetosalocsprofile has been saved.'));

                //return $this->redirect(['action' => 'index']);

                return $this->redirect(['controller'=>'Projetosalocs','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosalocsprofile could not be saved. Please, try again.'));
        }
        $projetosalocs = $this->Projetosalocsprofiles->Projetosalocs->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosalocsprofiles->Statusfuncionals->find('list', ['limit' => 200]);
        $competencias = $this->Projetosalocsprofiles->Competencias->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 200]);

        $propostasalocs = $this->Projetosalocsprofiles->Propostasalocs->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 2000]);

        $this->set(compact('projetosalocsprofile', 'projetosalocs', 'statusfuncionals', 'competencias','propostasalocs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosalocsprofile id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosalocsprofile = $this->Projetosalocsprofiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosalocsprofile = $this->Projetosalocsprofiles->patchEntity($projetosalocsprofile, $this->request->getData());
            $projetosalocid = $projetosalocsprofile->projetosaloc_id;
            if ($this->Projetosalocsprofiles->save($projetosalocsprofile)) {
                $this->Flash->success(__('The projetosalocsprofile has been saved.'));

                //return $this->redirect(['action' => 'index']);

                return $this->redirect(['controller'=>'Projetosalocs','action' => 'view',$projetosalocid]);
            }
            $this->Flash->error(__('The projetosalocsprofile could not be saved. Please, try again.'));
        }
        $projetosalocs = $this->Projetosalocsprofiles->Projetosalocs->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosalocsprofiles->Statusfuncionals->find('list', ['limit' => 200]);
        $competencias = $this->Projetosalocsprofiles->Competencias->find('list',array('order' => array('descricao' => 'asc')) ,['limit' => 200]);

        $propostasalocs = $this->Projetosalocsprofiles->Propostasalocs->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 2000]);

        $this->set(compact('projetosalocsprofile', 'projetosalocs', 'statusfuncionals', 'competencias','propostasalocs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosalocsprofile id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosalocsprofile = $this->Projetosalocsprofiles->get($id);
        $projetosalocid = $projetosalocsprofile->projetosaloc_id;
        if ($this->Projetosalocsprofiles->delete($projetosalocsprofile)) {
            $this->Flash->success(__('The projetosalocsprofile has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosalocsprofile could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Projetosalocs','action' => 'view',$projetosalocid]);
    }
}
