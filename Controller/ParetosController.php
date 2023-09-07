<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Paretos Controller
 *
 * @property \App\Model\Table\ParetosTable $Paretos
 *
 * @method \App\Model\Entity\Pareto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParetosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Paretosmestres']
        ];
        $paretos = $this->paginate($this->Paretos);

        $this->set(compact('paretos'));
    }

    /**
     * View method
     *
     * @param string|null $id Pareto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pareto = $this->Paretos->get($id, [
            'contain' => ['Paretosmestres', 'Projetosentregasparetos', 'Projetosparetos', 'Projetosprodutosentregas', 'Projetosprodutosparetos', 'ViewKanbanentregas']
        ]);

        $this->set('pareto', $pareto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pareto = $this->Paretos->newEntity();
        if ($this->request->is('post')) {
            $pareto = $this->Paretos->patchEntity($pareto, $this->request->getData());
            if ($this->Paretos->save($pareto)) {
                $this->Flash->success(__('The pareto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pareto could not be saved. Please, try again.'));
        }
        $paretosmestres = $this->Paretos->Paretosmestres->find('list', ['limit' => 200]);
        $this->set(compact('pareto', 'paretosmestres'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pareto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pareto = $this->Paretos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pareto = $this->Paretos->patchEntity($pareto, $this->request->getData());
            if ($this->Paretos->save($pareto)) {
                $this->Flash->success(__('The pareto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pareto could not be saved. Please, try again.'));
        }
        $paretosmestres = $this->Paretos->Paretosmestres->find('list', ['limit' => 200]);
        $this->set(compact('pareto', 'paretosmestres'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pareto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pareto = $this->Paretos->get($id);
        if ($this->Paretos->delete($pareto)) {
            $this->Flash->success(__('The pareto has been deleted.'));
        } else {
            $this->Flash->error(__('The pareto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
