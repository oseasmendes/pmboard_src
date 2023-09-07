<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultores Controller
 *
 * @property \App\Model\Table\ConsultoresTable $Consultores
 *
 * @method \App\Model\Entity\Consultore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsultoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departamentos', 'Superiorimediatos', 'Consultorias'],  
            'order' => ['Consultores.nome' => 'asc']
        ];
        $consultores = $this->paginate($this->Consultores);

        $this->set(compact('consultores'));
    }

    /**
     * View method
     *
     * @param string|null $id Consultore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultore = $this->Consultores->get($id, [
            'contain' => ['Departamentos', 'Superiorimediatos', 'Consultorias', 'Fivewthreehs', 'Projetosalocs', 'Projetosapontamentos', 'Sistemasconsultores']
        ]);

        $this->set('consultore', $consultore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultore = $this->Consultores->newEntity();
        if ($this->request->is('post')) {
            $consultore = $this->Consultores->patchEntity($consultore, $this->request->getData());
            if ($this->Consultores->save($consultore)) {
                $this->Flash->success(__('The consultore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultore could not be saved. Please, try again.'));
        }
        $departamentos = $this->Consultores->Departamentos->find('list', ['limit' => 200]);
        $superiorimediatos = $this->Consultores->Superiorimediatos->find('list', ['limit' => 200]);
        $consultorias = $this->Consultores->Consultorias->find('list', ['limit' => 200]);
        $this->set(compact('consultore', 'departamentos', 'superiorimediatos', 'consultorias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultore = $this->Consultores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultore = $this->Consultores->patchEntity($consultore, $this->request->getData());
            if ($this->Consultores->save($consultore)) {
                $this->Flash->success(__('The consultore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultore could not be saved. Please, try again.'));
        }
        $departamentos = $this->Consultores->Departamentos->find('list', ['limit' => 200]);
        $superiorimediatos = $this->Consultores->Superiorimediatos->find('list', ['limit' => 200]);
        $consultorias = $this->Consultores->Consultorias->find('list', ['limit' => 200]);
        $this->set(compact('consultore', 'departamentos', 'superiorimediatos', 'consultorias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultore = $this->Consultores->get($id);
        if ($this->Consultores->delete($consultore)) {
            $this->Flash->success(__('The consultore has been deleted.'));
        } else {
            $this->Flash->error(__('The consultore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
