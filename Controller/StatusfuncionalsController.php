<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Statusfuncionals Controller
 *
 * @property \App\Model\Table\StatusfuncionalsTable $Statusfuncionals
 *
 * @method \App\Model\Entity\Statusfuncional[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatusfuncionalsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $statusfuncionals = $this->paginate($this->Statusfuncionals);

        $this->set(compact('statusfuncionals'));
    }

    /**
     * View method
     *
     * @param string|null $id Statusfuncional id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statusfuncional = $this->Statusfuncionals->get($id, [
            'contain' => ['Fivewthreehs', 'Projetos', 'Projetosalocs', 'Projetosalocsprofiles', 'Projetosapontamentos', 'Projetosprodutos', 'Projetosprodutosentregas', 'Projetosprodutosfinances', 'Projetosprodutosruns', 'Projetosstatus', 'Sistemas']
        ]);

        $this->set('statusfuncional', $statusfuncional);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statusfuncional = $this->Statusfuncionals->newEntity();
        if ($this->request->is('post')) {
            $statusfuncional = $this->Statusfuncionals->patchEntity($statusfuncional, $this->request->getData());
            if ($this->Statusfuncionals->save($statusfuncional)) {
                $this->Flash->success(__('The statusfuncional has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statusfuncional could not be saved. Please, try again.'));
        }
        $this->set(compact('statusfuncional'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Statusfuncional id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statusfuncional = $this->Statusfuncionals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statusfuncional = $this->Statusfuncionals->patchEntity($statusfuncional, $this->request->getData());
            if ($this->Statusfuncionals->save($statusfuncional)) {
                $this->Flash->success(__('The statusfuncional has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statusfuncional could not be saved. Please, try again.'));
        }
        $this->set(compact('statusfuncional'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Statusfuncional id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statusfuncional = $this->Statusfuncionals->get($id);
        if ($this->Statusfuncionals->delete($statusfuncional)) {
            $this->Flash->success(__('The statusfuncional has been deleted.'));
        } else {
            $this->Flash->error(__('The statusfuncional could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
