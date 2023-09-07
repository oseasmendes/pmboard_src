<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetoscontatos Controller
 *
 * @property \App\Model\Table\ProjetoscontatosTable $Projetoscontatos
 *
 * @method \App\Model\Entity\Projetoscontato[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetoscontatosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Participantes']
        ];
        $projetoscontatos = $this->paginate($this->Projetoscontatos);

        $this->set(compact('projetoscontatos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetoscontato id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetoscontato = $this->Projetoscontatos->get($id, [
            'contain' => ['Projetos', 'Participantes']
        ]);

        $this->set('projetoscontato', $projetoscontato);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetoscontato = $this->Projetoscontatos->newEntity();
        if ($this->request->is('post')) {
            $projetoscontato = $this->Projetoscontatos->patchEntity($projetoscontato, $this->request->getData());
            if ($this->Projetoscontatos->save($projetoscontato)) {
                $this->Flash->success(__('The projetoscontato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetoscontato could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetoscontatos->Projetos->find('list', ['limit' => 200]);
        $participantes = $this->Projetoscontatos->Participantes->find('list', ['limit' => 200]);
        $this->set(compact('projetoscontato', 'projetos', 'participantes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetoscontato id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetoscontato = $this->Projetoscontatos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetoscontato = $this->Projetoscontatos->patchEntity($projetoscontato, $this->request->getData());
            if ($this->Projetoscontatos->save($projetoscontato)) {
                $this->Flash->success(__('The projetoscontato has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetoscontato could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetoscontatos->Projetos->find('list', ['limit' => 200]);
        $participantes = $this->Projetoscontatos->Participantes->find('list', ['limit' => 200]);
        $this->set(compact('projetoscontato', 'projetos', 'participantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetoscontato id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetoscontato = $this->Projetoscontatos->get($id);
        if ($this->Projetoscontatos->delete($projetoscontato)) {
            $this->Flash->success(__('The projetoscontato has been deleted.'));
        } else {
            $this->Flash->error(__('The projetoscontato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
