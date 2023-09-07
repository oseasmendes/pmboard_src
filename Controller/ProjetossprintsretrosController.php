<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetossprintsretros Controller
 *
 * @property \App\Model\Table\ProjetossprintsretrosTable $Projetossprintsretros
 *
 * @method \App\Model\Entity\Projetossprintsretro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetossprintsretrosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetossprints', 'Paretos', 'Statusfuncionals']
        ];
        $projetossprintsretros = $this->paginate($this->Projetossprintsretros);

        $this->set(compact('projetossprintsretros'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetossprintsretro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetossprintsretro = $this->Projetossprintsretros->get($id, [
            'contain' => ['Projetossprints', 'Paretos', 'Statusfuncionals',  
            'Projetossprintsretrositems'=> [
                'sort' => ['Projetossprintsretrositems.descricao' => 'ASC'], 
                'conditions' => ['Projetossprintsretrositems.pareto_id =' => 32],
            ]]
]);

        $this->set('projetossprintsretro', $projetossprintsretro);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetossprintsretro = $this->Projetossprintsretros->newEntity();
        if ($this->request->is('post')) {
            $projetossprintsretro = $this->Projetossprintsretros->patchEntity($projetossprintsretro, $this->request->getData());
            if ($this->Projetossprintsretros->save($projetossprintsretro)) {
                $this->Flash->success(__('The projetossprintsretro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsretro could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Projetossprintsretros->Projetossprints->find('list', ['limit' => 200]);
        $paretos = $this->Projetossprintsretros->Paretos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetossprintsretros->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsretro', 'projetossprints', 'paretos', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetossprintsretro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetossprintsretro = $this->Projetossprintsretros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetossprintsretro = $this->Projetossprintsretros->patchEntity($projetossprintsretro, $this->request->getData());
            if ($this->Projetossprintsretros->save($projetossprintsretro)) {
                $this->Flash->success(__('The projetossprintsretro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsretro could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Projetossprintsretros->Projetossprints->find('list', ['limit' => 200]);
        $paretos = $this->Projetossprintsretros->Paretos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetossprintsretros->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsretro', 'projetossprints', 'paretos', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetossprintsretro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetossprintsretro = $this->Projetossprintsretros->get($id);
        if ($this->Projetossprintsretros->delete($projetossprintsretro)) {
            $this->Flash->success(__('The projetossprintsretro has been deleted.'));
        } else {
            $this->Flash->error(__('The projetossprintsretro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
