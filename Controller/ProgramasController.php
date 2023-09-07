<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Programas Controller
 *
 * @property \App\Model\Table\ProgramasTable $Programas
 *
 * @method \App\Model\Entity\Programa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgramasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Portfolios'],
            'conditions' => ['programas.ativo'=> true],       
            'order' => [
          'Programas.descricao' => 'asc']
        ];
        $programas = $this->paginate($this->Programas);

        $this->set(compact('programas'));
    }

    /**
     * View method
     *
     * @param string|null $id Programa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $programa = $this->Programas->get($id, [
            'contain' => ['Portfolios', 'Programasnotas', 'Programasplanotaxas', 'Projetos']
        ]);

        $this->set('programa', $programa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $programa = $this->Programas->newEntity();
        if ($this->request->is('post')) {
            $programa = $this->Programas->patchEntity($programa, $this->request->getData());
            if ($this->Programas->save($programa)) {
                $this->Flash->success(__('The programa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programa could not be saved. Please, try again.'));
        }
        $portfolios = $this->Programas->Portfolios->find('list', ['limit' => 200]);
        $this->set(compact('programa', 'portfolios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Programa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $programa = $this->Programas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programa = $this->Programas->patchEntity($programa, $this->request->getData());
            if ($this->Programas->save($programa)) {
                $this->Flash->success(__('The programa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programa could not be saved. Please, try again.'));
        }
        $portfolios = $this->Programas->Portfolios->find('list', ['limit' => 200]);
        $this->set(compact('programa', 'portfolios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Programa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $programa = $this->Programas->get($id);
        if ($this->Programas->delete($programa)) {
            $this->Flash->success(__('The programa has been deleted.'));
        } else {
            $this->Flash->error(__('The programa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
