<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetos Controller
 *
 * @property \App\Model\Table\ProjetosTable $Projetos
 *
 * @method \App\Model\Entity\Projeto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Programas', 'Statusfuncionals', 'Fases']
        ];
        $projetos = $this->paginate($this->Projetos);

        $this->set(compact('projetos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projeto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projeto = $this->Projetos->get($id, [
            'contain' => ['Programas', 'Statusfuncionals', 'Fases', 'Agendaanual', 'Projetosalocs', 'Projetosparetos', 'Projetosprodutos', 'Projetosstatus']
        ]);

        $this->set('projeto', $projeto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projeto = $this->Projetos->newEntity();
        if ($this->request->is('post')) {
            $projeto = $this->Projetos->patchEntity($projeto, $this->request->getData());
            if ($this->Projetos->save($projeto)) {
                $this->Flash->success(__('The projeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projeto could not be saved. Please, try again.'));
        }
        $programas = $this->Projetos->Programas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetos->Statusfuncionals->find('list', ['limit' => 200]);
        $fases = $this->Projetos->Fases->find('list', ['limit' => 200]);
        $this->set(compact('projeto', 'programas', 'statusfuncionals', 'fases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projeto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projeto = $this->Projetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projeto = $this->Projetos->patchEntity($projeto, $this->request->getData());
            if ($this->Projetos->save($projeto)) {
                $this->Flash->success(__('The projeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projeto could not be saved. Please, try again.'));
        }
        $programas = $this->Projetos->Programas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetos->Statusfuncionals->find('list', ['limit' => 200]);
        $fases = $this->Projetos->Fases->find('list', ['limit' => 200]);
        $this->set(compact('projeto', 'programas', 'statusfuncionals', 'fases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projeto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projeto = $this->Projetos->get($id);
        if ($this->Projetos->delete($projeto)) {
            $this->Flash->success(__('The projeto has been deleted.'));
        } else {
            $this->Flash->error(__('The projeto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
