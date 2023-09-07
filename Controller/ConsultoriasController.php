<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultorias Controller
 *
 * @property \App\Model\Table\ConsultoriasTable $Consultorias
 *
 * @method \App\Model\Entity\Consultoria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsultoriasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $consultorias = $this->paginate($this->Consultorias);

        $this->set(compact('consultorias'));
    }

    /**
     * View method
     *
     * @param string|null $id Consultoria id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultoria = $this->Consultorias->get($id, [
            'contain' => ['Consultores']
        ]);

        $this->set('consultoria', $consultoria);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultoria = $this->Consultorias->newEntity();
        if ($this->request->is('post')) {
            $consultoria = $this->Consultorias->patchEntity($consultoria, $this->request->getData());
            if ($this->Consultorias->save($consultoria)) {
                $this->Flash->success(__('The consultoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoria could not be saved. Please, try again.'));
        }
        $this->set(compact('consultoria'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultoria id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultoria = $this->Consultorias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultoria = $this->Consultorias->patchEntity($consultoria, $this->request->getData());
            if ($this->Consultorias->save($consultoria)) {
                $this->Flash->success(__('The consultoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoria could not be saved. Please, try again.'));
        }
        $this->set(compact('consultoria'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultoria id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultoria = $this->Consultorias->get($id);
        if ($this->Consultorias->delete($consultoria)) {
            $this->Flash->success(__('The consultoria has been deleted.'));
        } else {
            $this->Flash->error(__('The consultoria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
