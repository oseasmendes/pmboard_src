<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetossprintsretrositems Controller
 *
 * @property \App\Model\Table\ProjetossprintsretrositemsTable $Projetossprintsretrositems
 *
 * @method \App\Model\Entity\Projetossprintsretrositem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetossprintsretrositemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetossprintsretros', 'Paretos']
        ];
        $projetossprintsretrositems = $this->paginate($this->Projetossprintsretrositems);

        $this->set(compact('projetossprintsretrositems'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetossprintsretrositem id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetossprintsretrositem = $this->Projetossprintsretrositems->get($id, [
            'contain' => ['Projetossprintsretros', 'Paretos']
        ]);

        $this->set('projetossprintsretrositem', $projetossprintsretrositem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetossprintsretrositem = $this->Projetossprintsretrositems->newEntity();
        if ($this->request->is('post')) {
            $projetossprintsretrositem = $this->Projetossprintsretrositems->patchEntity($projetossprintsretrositem, $this->request->getData());
            if ($this->Projetossprintsretrositems->save($projetossprintsretrositem)) {
                $this->Flash->success(__('The projetossprintsretrositem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsretrositem could not be saved. Please, try again.'));
        }
        $projetossprintsretros = $this->Projetossprintsretrositems->Projetossprintsretros->find('list', ['limit' => 200]);
        $paretos = $this->Projetossprintsretrositems->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsretrositem', 'projetossprintsretros', 'paretos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetossprintsretrositem id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetossprintsretrositem = $this->Projetossprintsretrositems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetossprintsretrositem = $this->Projetossprintsretrositems->patchEntity($projetossprintsretrositem, $this->request->getData());
            if ($this->Projetossprintsretrositems->save($projetossprintsretrositem)) {
                $this->Flash->success(__('The projetossprintsretrositem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsretrositem could not be saved. Please, try again.'));
        }
        $projetossprintsretros = $this->Projetossprintsretrositems->Projetossprintsretros->find('list', ['limit' => 200]);
        $paretos = $this->Projetossprintsretrositems->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsretrositem', 'projetossprintsretros', 'paretos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetossprintsretrositem id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetossprintsretrositem = $this->Projetossprintsretrositems->get($id);
        if ($this->Projetossprintsretrositems->delete($projetossprintsretrositem)) {
            $this->Flash->success(__('The projetossprintsretrositem has been deleted.'));
        } else {
            $this->Flash->error(__('The projetossprintsretrositem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
