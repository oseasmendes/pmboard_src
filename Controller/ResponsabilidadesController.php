<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Responsabilidades Controller
 *
 * @property \App\Model\Table\ResponsabilidadesTable $Responsabilidades
 *
 * @method \App\Model\Entity\Responsabilidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResponsabilidadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Responsabilidadestipos']
        ];
        $responsabilidades = $this->paginate($this->Responsabilidades);

        $this->set(compact('responsabilidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Responsabilidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $responsabilidade = $this->Responsabilidades->get($id, [
            'contain' => ['Responsabilidadestipos', 'Motivos', 'Sistemasusuarios']
        ]);

        $this->set('responsabilidade', $responsabilidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $responsabilidade = $this->Responsabilidades->newEntity();
        if ($this->request->is('post')) {
            $responsabilidade = $this->Responsabilidades->patchEntity($responsabilidade, $this->request->getData());
            if ($this->Responsabilidades->save($responsabilidade)) {
                $this->Flash->success(__('The responsabilidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsabilidade could not be saved. Please, try again.'));
        }
        $responsabilidadestipos = $this->Responsabilidades->Responsabilidadestipos->find('list', ['limit' => 200]);
        $this->set(compact('responsabilidade', 'responsabilidadestipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Responsabilidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $responsabilidade = $this->Responsabilidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $responsabilidade = $this->Responsabilidades->patchEntity($responsabilidade, $this->request->getData());
            if ($this->Responsabilidades->save($responsabilidade)) {
                $this->Flash->success(__('The responsabilidade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsabilidade could not be saved. Please, try again.'));
        }
        $responsabilidadestipos = $this->Responsabilidades->Responsabilidadestipos->find('list', ['limit' => 200]);
        $this->set(compact('responsabilidade', 'responsabilidadestipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Responsabilidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $responsabilidade = $this->Responsabilidades->get($id);
        if ($this->Responsabilidades->delete($responsabilidade)) {
            $this->Flash->success(__('The responsabilidade has been deleted.'));
        } else {
            $this->Flash->error(__('The responsabilidade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
