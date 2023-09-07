<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Propostas Controller
 *
 * @property \App\Model\Table\PropostasTable $Propostas
 *
 * @method \App\Model\Entity\Proposta[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PropostasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas', 'Statusfuncionals', 'Centrocustos']
        ];
        $propostas = $this->paginate($this->Propostas);

        $this->set(compact('propostas'));
    }

    /**
     * View method
     *
     * @param string|null $id Proposta id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proposta = $this->Propostas->get($id, [
            'contain' => ['Empresas', 'Statusfuncionals', 'Centrocustos', 'Projetos', 'Propostasalocs']
        ]);

        $this->set('proposta', $proposta);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proposta = $this->Propostas->newEntity();
        if ($this->request->is('post')) {
            $proposta = $this->Propostas->patchEntity($proposta, $this->request->getData());
            if ($this->Propostas->save($proposta)) {
                $this->Flash->success(__('The proposta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proposta could not be saved. Please, try again.'));
        }
        $empresas = $this->Propostas->Empresas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Propostas->Statusfuncionals->find('list', ['limit' => 200]);
        $centrocustos = $this->Propostas->Centrocustos->find('list', ['limit' => 200]);
        $this->set(compact('proposta', 'empresas', 'statusfuncionals', 'centrocustos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Proposta id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proposta = $this->Propostas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proposta = $this->Propostas->patchEntity($proposta, $this->request->getData());
            if ($this->Propostas->save($proposta)) {
                $this->Flash->success(__('The proposta has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proposta could not be saved. Please, try again.'));
        }
        $empresas = $this->Propostas->Empresas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Propostas->Statusfuncionals->find('list', ['limit' => 200]);
        $centrocustos = $this->Propostas->Centrocustos->find('list', ['limit' => 200]);
        $this->set(compact('proposta', 'empresas', 'statusfuncionals', 'centrocustos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Proposta id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proposta = $this->Propostas->get($id);
        if ($this->Propostas->delete($proposta)) {
            $this->Flash->success(__('The proposta has been deleted.'));
        } else {
            $this->Flash->error(__('The proposta could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
