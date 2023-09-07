<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetoslearnedlessons Controller
 *
 * @property \App\Model\Table\ProjetoslearnedlessonsTable $Projetoslearnedlessons
 *
 * @method \App\Model\Entity\Projetoslearnedlesson[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetoslearnedlessonsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Aproaches', 'Severidades']
        ];
        $projetoslearnedlessons = $this->paginate($this->Projetoslearnedlessons);

        $this->set(compact('projetoslearnedlessons'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetoslearnedlesson id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetoslearnedlesson = $this->Projetoslearnedlessons->get($id, [
            'contain' => ['Projetos', 'Aproaches', 'Severidades']
        ]);

        $this->set('projetoslearnedlesson', $projetoslearnedlesson);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetoslearnedlesson = $this->Projetoslearnedlessons->newEntity();
        if ($this->request->is('post')) {
            $projetoslearnedlesson = $this->Projetoslearnedlessons->patchEntity($projetoslearnedlesson, $this->request->getData());
            if ($this->Projetoslearnedlessons->save($projetoslearnedlesson)) {
                $this->Flash->success(__('The projetoslearnedlesson has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetoslearnedlesson could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetoslearnedlessons->Projetos->find('list',array('order' => array('codenome' => 'asc')),['limit' => 200]);
        $aproaches = $this->Projetoslearnedlessons->Aproaches->find('list', ['limit' => 200]);
        $severidades = $this->Projetoslearnedlessons->Severidades->find('list', ['limit' => 200]);
        $this->set(compact('projetoslearnedlesson', 'projetos', 'aproaches', 'severidades'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetoslearnedlesson id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetoslearnedlesson = $this->Projetoslearnedlessons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetoslearnedlesson = $this->Projetoslearnedlessons->patchEntity($projetoslearnedlesson, $this->request->getData());
            if ($this->Projetoslearnedlessons->save($projetoslearnedlesson)) {
                $this->Flash->success(__('The projetoslearnedlesson has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetoslearnedlesson could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetoslearnedlessons->Projetos->find('list',array('order' => array('codenome' => 'asc')), ['limit' => 200]);
        $aproaches = $this->Projetoslearnedlessons->Aproaches->find('list', ['limit' => 200]);
        $severidades = $this->Projetoslearnedlessons->Severidades->find('list', ['limit' => 200]);
        $this->set(compact('projetoslearnedlesson', 'projetos', 'aproaches', 'severidades'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetoslearnedlesson id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetoslearnedlesson = $this->Projetoslearnedlessons->get($id);
        if ($this->Projetoslearnedlessons->delete($projetoslearnedlesson)) {
            $this->Flash->success(__('The projetoslearnedlesson has been deleted.'));
        } else {
            $this->Flash->error(__('The projetoslearnedlesson could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
