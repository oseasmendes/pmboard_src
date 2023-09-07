<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Empresasunidades Controller
 *
 * @property \App\Model\Table\EmpresasunidadesTable $Empresasunidades
 *
 * @method \App\Model\Entity\Empresasunidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmpresasunidadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas']
        ];
        $empresasunidades = $this->paginate($this->Empresasunidades);

        $this->set(compact('empresasunidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Empresasunidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $empresasunidade = $this->Empresasunidades->get($id, [
            'contain' => ['Empresas']
        ]);

        $this->set('empresasunidade', $empresasunidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $empresasunidade = $this->Empresasunidades->newEntity();
        if ($this->request->is('post')) {
            $empresasunidade = $this->Empresasunidades->patchEntity($empresasunidade, $this->request->getData());
            if ($this->Empresasunidades->save($empresasunidade)) {
                $this->Flash->success(__('The empresasunidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empresasunidade could not be saved. Please, try again.'));
        }
        $empresas = $this->Empresasunidades->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('empresasunidade', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Empresasunidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $empresasunidade = $this->Empresasunidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $empresasunidade = $this->Empresasunidades->patchEntity($empresasunidade, $this->request->getData());
            if ($this->Empresasunidades->save($empresasunidade)) {
                $this->Flash->success(__('The empresasunidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The empresasunidade could not be saved. Please, try again.'));
        }
        $empresas = $this->Empresasunidades->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('empresasunidade', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Empresasunidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $empresasunidade = $this->Empresasunidades->get($id);
        if ($this->Empresasunidades->delete($empresasunidade)) {
            $this->Flash->success(__('The empresasunidade has been deleted.'));
        } else {
            $this->Flash->error(__('The empresasunidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
