<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetoscutovers Controller
 *
 * @property \App\Model\Table\ProjetoscutoversTable $Projetoscutovers
 *
 * @method \App\Model\Entity\Projetoscutover[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetoscutoversController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Projetosprodutos', 'Etapas', 'Statusfuncionals']
        ];
        $projetoscutovers = $this->paginate($this->Projetoscutovers);

        $this->set(compact('projetoscutovers'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetoscutover id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetoscutover = $this->Projetoscutovers->get($id, [
            'contain' => ['Projetos', 'Projetosprodutos', 'Etapas', 'Statusfuncionals', 'Projetoscutoversflws','Fases']
        ]);

        $this->set('projetoscutover', $projetoscutover);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetoscutover = $this->Projetoscutovers->newEntity();
        if ($this->request->is('post')) {
            $projetoscutover = $this->Projetoscutovers->patchEntity($projetoscutover, $this->request->getData());
            if ($this->Projetoscutovers->save($projetoscutover)) {
                $this->Flash->success(__('The projetoscutover has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetoscutover could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetoscutovers->Projetos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Projetoscutovers->Projetosprodutos->find('list', ['limit' => 200]);
        $etapas = $this->Projetoscutovers->Etapas->find('list', ['limit' => 200]);
        $fases = $this->Projetoscutovers->Fases->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetoscutovers->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetoscutover', 'projetos', 'projetosprodutos', 'etapas', 'fases' , 'statusfuncionals'));
    }

public function addid($id = null)
    {
        $projetoscutover = $this->Projetoscutovers->newEntity();
        if ($this->request->is('post')) {
            $projetoscutover = $this->Projetoscutovers->patchEntity($projetoscutover, $this->request->getData());
            $projetoscutover->projeto_id = $id;
            if ($this->Projetoscutovers->save($projetoscutover)) {
                $this->Flash->success(__('The projetoscutover has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetoscutover could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetoscutovers->Projetos->find('list', ['limit' => 2000]);
        $projetosprodutos = $this->Projetoscutovers->Projetosprodutos->find('list',array('conditions'=>array('Projetosprodutos.projeto_id'=>$id),'order' => array('codenome' => 'asc')));
        $etapas = $this->Projetoscutovers->Etapas->find('list', ['limit' => 200]);
        $fases = $this->Projetoscutovers->Fases->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetoscutovers->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetoscutover', 'projetos', 'projetosprodutos', 'etapas', 'fases' , 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetoscutover id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetoscutover = $this->Projetoscutovers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetoscutover = $this->Projetoscutovers->patchEntity($projetoscutover, $this->request->getData());
            if ($this->Projetoscutovers->save($projetoscutover)) {
                $this->Flash->success(__('The projetoscutover has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetoscutover could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetoscutovers->Projetos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Projetoscutovers->Projetosprodutos->find('list', ['limit' => 200]);
        $etapas = $this->Projetoscutovers->Etapas->find('list', ['limit' => 200]);
        $fases = $this->Projetoscutovers->Fases->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetoscutovers->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetoscutover', 'projetos', 'projetosprodutos', 'etapas','fases', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetoscutover id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetoscutover = $this->Projetoscutovers->get($id);
        if ($this->Projetoscutovers->delete($projetoscutover)) {
            $this->Flash->success(__('The projetoscutover has been deleted.'));
        } else {
            $this->Flash->error(__('The projetoscutover could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
