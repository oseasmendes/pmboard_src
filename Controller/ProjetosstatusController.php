<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosstatus Controller
 *
 * @property \App\Model\Table\ProjetosstatusTable $Projetosstatus
 *
 * @method \App\Model\Entity\Projetosstatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosstatusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Statusfuncionals', 'Motivos', 'Responsabilidades']
        ];
        $projetosstatus = $this->paginate($this->Projetosstatus);

        $this->set(compact('projetosstatus'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosstatus id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosstatus = $this->Projetosstatus->get($id, [
            'contain' => ['Projetos', 'Statusfuncionals', 'Motivos', 'Responsabilidades']
        ]);

        $this->set('projetosstatus', $projetosstatus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosstatus = $this->Projetosstatus->newEntity();
        if ($this->request->is('post')) {
            $projetosstatus = $this->Projetosstatus->patchEntity($projetosstatus, $this->request->getData());
             $projetosstatus->projeto_id = $id;
            if ($this->Projetosstatus->save($projetosstatus)) {
                $this->Flash->success(__('The projetosstatus has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosstatus could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosstatus->Projetos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosstatus->Statusfuncionals->find('list', ['limit' => 200]);
        $motivos = $this->Projetosstatus->Motivos->find('list', ['limit' => 200]);
        $responsabilidades = $this->Projetosstatus->Responsabilidades->find('list', ['limit' => 200]);
        $this->set(compact('projetosstatus', 'projetos', 'statusfuncionals', 'motivos', 'responsabilidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosstatus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosstatus = $this->Projetosstatus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosstatus = $this->Projetosstatus->patchEntity($projetosstatus, $this->request->getData());
            $projectid = $projetosstatus->projeto_id;
            if ($this->Projetosstatus->save($projetosstatus)) {
                $this->Flash->success(__('The projetosstatus has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetos','action' => 'view',$projectid]);
            }
            $this->Flash->error(__('The projetosstatus could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosstatus->Projetos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosstatus->Statusfuncionals->find('list', ['limit' => 200]);
        $motivos = $this->Projetosstatus->Motivos->find('list', ['limit' => 200]);
        $responsabilidades = $this->Projetosstatus->Responsabilidades->find('list', ['limit' => 200]);
        $this->set(compact('projetosstatus', 'projetos', 'statusfuncionals', 'motivos', 'responsabilidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosstatus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosstatus = $this->Projetosstatus->get($id);
        if ($this->Projetosstatus->delete($projetosstatus)) {
            $this->Flash->success(__('The projetosstatus has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosstatus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
