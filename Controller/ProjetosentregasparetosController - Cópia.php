<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregasparetos Controller
 *
 * @property \App\Model\Table\ProjetosentregasparetosTable $Projetosentregasparetos
 *
 * @method \App\Model\Entity\Projetosentregaspareto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasparetosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosentregas', 'Paretos']
        ];
        $projetosentregasparetos = $this->paginate($this->Projetosentregasparetos);

        $this->set(compact('projetosentregasparetos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregaspareto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregaspareto = $this->Projetosentregasparetos->get($id, [
            'contain' => ['Projetosprodutosentregas', 'Paretos']
        ]);

        $this->set('projetosentregaspareto', $projetosentregaspareto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosentregaspareto = $this->Projetosentregasparetos->newEntity();
        $projetosentregaspareto->projetosprodutosentrega_id = $id;
        if ($this->request->is('post')) {
            $projetosentregaspareto = $this->Projetosentregasparetos->patchEntity($projetosentregaspareto, $this->request->getData());
            if ($this->Projetosentregasparetos->save($projetosentregaspareto)) {
                $this->Flash->success(__('The projetosentregaspareto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregaspareto could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosentregasparetos->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $paretos = $this->Projetosentregasparetos->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregaspareto', 'projetosprodutosentregas', 'paretos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregaspareto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregaspareto = $this->Projetosentregasparetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregaspareto = $this->Projetosentregasparetos->patchEntity($projetosentregaspareto, $this->request->getData());
            if ($this->Projetosentregasparetos->save($projetosentregaspareto)) {
                $this->Flash->success(__('The projetosentregaspareto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregaspareto could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosentregasparetos->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $paretos = $this->Projetosentregasparetos->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregaspareto', 'projetosprodutosentregas', 'paretos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregaspareto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregaspareto = $this->Projetosentregasparetos->get($id);
        if ($this->Projetosentregasparetos->delete($projetosentregaspareto)) {
            $this->Flash->success(__('The projetosentregaspareto has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosentregaspareto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
