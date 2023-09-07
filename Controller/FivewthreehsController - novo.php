<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fivewthreehs Controller
 *
 * @property \App\Model\Table\FivewthreehsTable $Fivewthreehs
 *
 * @method \App\Model\Entity\Fivewthreeh[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FivewthreehsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Programas', 'Projetos', 'Projetosprodutos', 'Participantes', 'Statusfuncionals', 'Consultores', 'Atas', 'Empresas', 'Fivewthreehstypes']
        ];
        $fivewthreehs = $this->paginate($this->Fivewthreehs);

        $this->set(compact('fivewthreehs'));
    }

    /**
     * View method
     *
     * @param string|null $id Fivewthreeh id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fivewthreeh = $this->Fivewthreehs->get($id, [
            'contain' => ['Programas', 'Projetos', 'Projetosprodutos', 'Participantes', 'Statusfuncionals', 'Consultores', 'Atas', 'Empresas', 'Fivewthreehstypes', 'Atasdetalhes', 'Fivewthreehsparetos', 'Projetosprodutosentregasdiarios']
        ]);

        $this->set('fivewthreeh', $fivewthreeh);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fivewthreeh = $this->Fivewthreehs->newEntity();
        if ($this->request->is('post')) {
            $fivewthreeh = $this->Fivewthreehs->patchEntity($fivewthreeh, $this->request->getData());
            if ($this->Fivewthreehs->save($fivewthreeh)) {
                $this->Flash->success(__('The fivewthreeh has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fivewthreeh could not be saved. Please, try again.'));
        }
        $programas = $this->Fivewthreehs->Programas->find('list', ['limit' => 200]);
        $projetos = $this->Fivewthreehs->Projetos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Fivewthreehs->Projetosprodutos->find('list', ['limit' => 200]);
        $participantes = $this->Fivewthreehs->Participantes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Fivewthreehs->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Fivewthreehs->Consultores->find('list', ['limit' => 200]);
        $atas = $this->Fivewthreehs->Atas->find('list', ['limit' => 200]);
        $empresas = $this->Fivewthreehs->Empresas->find('list', ['limit' => 200]);
        $fivewthreehstypes = $this->Fivewthreehs->Fivewthreehstypes->find('list', ['limit' => 200]);
        $this->set(compact('fivewthreeh', 'programas', 'projetos', 'projetosprodutos', 'participantes', 'statusfuncionals', 'consultores', 'atas', 'empresas', 'fivewthreehstypes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fivewthreeh id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fivewthreeh = $this->Fivewthreehs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fivewthreeh = $this->Fivewthreehs->patchEntity($fivewthreeh, $this->request->getData());
            if ($this->Fivewthreehs->save($fivewthreeh)) {
                $this->Flash->success(__('The fivewthreeh has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fivewthreeh could not be saved. Please, try again.'));
        }
        $programas = $this->Fivewthreehs->Programas->find('list', ['limit' => 200]);
        $projetos = $this->Fivewthreehs->Projetos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Fivewthreehs->Projetosprodutos->find('list', ['limit' => 200]);
        $participantes = $this->Fivewthreehs->Participantes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Fivewthreehs->Statusfuncionals->find('list', ['limit' => 200]);
        $consultores = $this->Fivewthreehs->Consultores->find('list', ['limit' => 200]);
        $atas = $this->Fivewthreehs->Atas->find('list', ['limit' => 200]);
        $empresas = $this->Fivewthreehs->Empresas->find('list', ['limit' => 200]);
        $fivewthreehstypes = $this->Fivewthreehs->Fivewthreehstypes->find('list', ['limit' => 200]);
        $this->set(compact('fivewthreeh', 'programas', 'projetos', 'projetosprodutos', 'participantes', 'statusfuncionals', 'consultores', 'atas', 'empresas', 'fivewthreehstypes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fivewthreeh id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fivewthreeh = $this->Fivewthreehs->get($id);
        if ($this->Fivewthreehs->delete($fivewthreeh)) {
            $this->Flash->success(__('The fivewthreeh has been deleted.'));
        } else {
            $this->Flash->error(__('The fivewthreeh could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
