<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Centrocustos Controller
 *
 * @property \App\Model\Table\CentrocustosTable $Centrocustos
 *
 * @method \App\Model\Entity\Centrocusto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CentrocustosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $centrocustos = $this->paginate($this->Centrocustos);

        $this->set(compact('centrocustos'));
    }

    /**
     * View method
     *
     * @param string|null $id Centrocusto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $centrocusto = $this->Centrocustos->get($id, [
            'contain' => ['Propostas']
        ]);

        $this->set('centrocusto', $centrocusto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $centrocusto = $this->Centrocustos->newEntity();
        if ($this->request->is('post')) {
            $centrocusto = $this->Centrocustos->patchEntity($centrocusto, $this->request->getData());
            if ($this->Centrocustos->save($centrocusto)) {
                $this->Flash->success(__('The centrocusto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centrocusto could not be saved. Please, try again.'));
        }
        $this->set(compact('centrocusto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Centrocusto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $centrocusto = $this->Centrocustos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $centrocusto = $this->Centrocustos->patchEntity($centrocusto, $this->request->getData());
            if ($this->Centrocustos->save($centrocusto)) {
                $this->Flash->success(__('The centrocusto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The centrocusto could not be saved. Please, try again.'));
        }
        $this->set(compact('centrocusto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Centrocusto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $centrocusto = $this->Centrocustos->get($id);
        if ($this->Centrocustos->delete($centrocusto)) {
            $this->Flash->success(__('The centrocusto has been deleted.'));
        } else {
            $this->Flash->error(__('The centrocusto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
