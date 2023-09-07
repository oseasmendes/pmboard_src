<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Programasplanotaxas Controller
 *
 * @property \App\Model\Table\ProgramasplanotaxasTable $Programasplanotaxas
 *
 * @method \App\Model\Entity\Programasplanotaxa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgramasplanotaxasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Competencias', 'Programas']
        ];
        $programasplanotaxas = $this->paginate($this->Programasplanotaxas);

        $this->set(compact('programasplanotaxas'));
    }

    /**
     * View method
     *
     * @param string|null $id Programasplanotaxa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $programasplanotaxa = $this->Programasplanotaxas->get($id, [
            'contain' => ['Competencias', 'Programas']
        ]);

        $this->set('programasplanotaxa', $programasplanotaxa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $programasplanotaxa = $this->Programasplanotaxas->newEntity();
        if ($this->request->is('post')) {
            $programasplanotaxa = $this->Programasplanotaxas->patchEntity($programasplanotaxa, $this->request->getData());
            if ($this->Programasplanotaxas->save($programasplanotaxa)) {
                $this->Flash->success(__('The programasplanotaxa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programasplanotaxa could not be saved. Please, try again.'));
        }
        $competencias = $this->Programasplanotaxas->Competencias->find('list', ['limit' => 200]);
        $programas = $this->Programasplanotaxas->Programas->find('list', ['limit' => 200]);
        $this->set(compact('programasplanotaxa', 'competencias', 'programas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Programasplanotaxa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $programasplanotaxa = $this->Programasplanotaxas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programasplanotaxa = $this->Programasplanotaxas->patchEntity($programasplanotaxa, $this->request->getData());
            if ($this->Programasplanotaxas->save($programasplanotaxa)) {
                $this->Flash->success(__('The programasplanotaxa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programasplanotaxa could not be saved. Please, try again.'));
        }
        $competencias = $this->Programasplanotaxas->Competencias->find('list', ['limit' => 200]);
        $programas = $this->Programasplanotaxas->Programas->find('list', ['limit' => 200]);
        $this->set(compact('programasplanotaxa', 'competencias', 'programas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Programasplanotaxa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $programasplanotaxa = $this->Programasplanotaxas->get($id);
        if ($this->Programasplanotaxas->delete($programasplanotaxa)) {
            $this->Flash->success(__('The programasplanotaxa has been deleted.'));
        } else {
            $this->Flash->error(__('The programasplanotaxa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
