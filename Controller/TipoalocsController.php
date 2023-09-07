<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipoalocs Controller
 *
 * @property \App\Model\Table\TipoalocsTable $Tipoalocs
 *
 * @method \App\Model\Entity\Tipoaloc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoalocsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tipoalocs = $this->paginate($this->Tipoalocs);

        $this->set(compact('tipoalocs'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipoaloc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoaloc = $this->Tipoalocs->get($id, [
            'contain' => ['Projetosalocs']
        ]);

        $this->set('tipoaloc', $tipoaloc);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoaloc = $this->Tipoalocs->newEntity();
        if ($this->request->is('post')) {
            $tipoaloc = $this->Tipoalocs->patchEntity($tipoaloc, $this->request->getData());
            if ($this->Tipoalocs->save($tipoaloc)) {
                $this->Flash->success(__('The tipoaloc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoaloc could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoaloc'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipoaloc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoaloc = $this->Tipoalocs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoaloc = $this->Tipoalocs->patchEntity($tipoaloc, $this->request->getData());
            if ($this->Tipoalocs->save($tipoaloc)) {
                $this->Flash->success(__('The tipoaloc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipoaloc could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoaloc'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipoaloc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoaloc = $this->Tipoalocs->get($id);
        if ($this->Tipoalocs->delete($tipoaloc)) {
            $this->Flash->success(__('The tipoaloc has been deleted.'));
        } else {
            $this->Flash->error(__('The tipoaloc could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
