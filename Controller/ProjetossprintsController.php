<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetossprints Controller
 *
 * @property \App\Model\Table\ProjetossprintsTable $Projetossprints
 *
 * @method \App\Model\Entity\Projetossprint[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetossprintsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       
        
        $this->paginate = [
            'contain' => ['Projetos', 'Sprinttipos']
        ];
        $projetossprints = $this->paginate($this->Projetossprints);

        $this->set(compact('projetossprints'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetossprint id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetossprint = $this->Projetossprints->get($id, [
            'contain' => ['Projetos', 'Sprinttipos', 'Jiraetlversions', 'Projetossprintsforecasts', 'Projetossprintsitems'=> [
                'sort' => ['Projetossprintsitems.referencia' => 'ASC']]
            , 'Projetossprintsrealizados']
        ]);

        $this->set('projetossprint', $projetossprint);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetossprint = $this->Projetossprints->newEntity();
        if ($this->request->is('post')) {
            $projetossprint = $this->Projetossprints->patchEntity($projetossprint, $this->request->getData());
            if ($this->Projetossprints->save($projetossprint)) {
                $this->Flash->success(__('The projetossprint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprint could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetossprints->Projetos->find('list', ['limit' => 200]);
        $sprinttipos = $this->Projetossprints->Sprinttipos->find('list', ['limit' => 200]);
        $this->set(compact('projetossprint', 'projetos', 'sprinttipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetossprint id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetossprint = $this->Projetossprints->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetossprint = $this->Projetossprints->patchEntity($projetossprint, $this->request->getData());
            if ($this->Projetossprints->save($projetossprint)) {
                $this->Flash->success(__('The projetossprint has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprint could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetossprints->Projetos->find('list', ['limit' => 200]);
        $sprinttipos = $this->Projetossprints->Sprinttipos->find('list', ['limit' => 200]);
        $this->set(compact('projetossprint', 'projetos', 'sprinttipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetossprint id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetossprint = $this->Projetossprints->get($id);
        if ($this->Projetossprints->delete($projetossprint)) {
            $this->Flash->success(__('The projetossprint has been deleted.'));
        } else {
            $this->Flash->error(__('The projetossprint could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
