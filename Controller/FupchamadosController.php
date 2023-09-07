<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fupchamados Controller
 *
 * @property \App\Model\Table\FupchamadosTable $Fupchamados
 *
 * @method \App\Model\Entity\Fupchamado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FupchamadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fupagendas']
        ];
        $fupchamados = $this->paginate($this->Fupchamados);

        $this->set(compact('fupchamados'));
    }

    /**
     * View method
     *
     * @param string|null $id Fupchamado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fupchamado = $this->Fupchamados->get($id, [
            'contain' => ['Fupagendas']
        ]);

        $this->set('fupchamado', $fupchamado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fupchamado = $this->Fupchamados->newEntity();
        if ($this->request->is('post')) {
            $fupchamado = $this->Fupchamados->patchEntity($fupchamado, $this->request->getData());
            if ($this->Fupchamados->save($fupchamado)) {
                $this->Flash->success(__('The fupchamado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupchamado could not be saved. Please, try again.'));
        }
        $fupagendas = $this->Fupchamados->Fupagendas->find('list', ['limit' => 200]);
        $this->set(compact('fupchamado', 'fupagendas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fupchamado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fupchamado = $this->Fupchamados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fupchamado = $this->Fupchamados->patchEntity($fupchamado, $this->request->getData());
            if ($this->Fupchamados->save($fupchamado)) {
                $this->Flash->success(__('The fupchamado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupchamado could not be saved. Please, try again.'));
        }
        $fupagendas = $this->Fupchamados->Fupagendas->find('list', ['limit' => 200]);
        $this->set(compact('fupchamado', 'fupagendas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fupchamado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fupchamado = $this->Fupchamados->get($id);
        if ($this->Fupchamados->delete($fupchamado)) {
            $this->Flash->success(__('The fupchamado has been deleted.'));
        } else {
            $this->Flash->error(__('The fupchamado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
