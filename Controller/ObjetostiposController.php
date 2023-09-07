<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Objetostipos Controller
 *
 * @property \App\Model\Table\ObjetostiposTable $Objetostipos
 *
 * @method \App\Model\Entity\Objetostipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ObjetostiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $objetostipos = $this->paginate($this->Objetostipos);

        $this->set(compact('objetostipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Objetostipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $objetostipo = $this->Objetostipos->get($id, [
            'contain' => []
        ]);

        $this->set('objetostipo', $objetostipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $objetostipo = $this->Objetostipos->newEntity();
        if ($this->request->is('post')) {
            $objetostipo = $this->Objetostipos->patchEntity($objetostipo, $this->request->getData());
            if ($this->Objetostipos->save($objetostipo)) {
                $this->Flash->success(__('The objetostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objetostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('objetostipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Objetostipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $objetostipo = $this->Objetostipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $objetostipo = $this->Objetostipos->patchEntity($objetostipo, $this->request->getData());
            if ($this->Objetostipos->save($objetostipo)) {
                $this->Flash->success(__('The objetostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The objetostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('objetostipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Objetostipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $objetostipo = $this->Objetostipos->get($id);
        if ($this->Objetostipos->delete($objetostipo)) {
            $this->Flash->success(__('The objetostipo has been deleted.'));
        } else {
            $this->Flash->error(__('The objetostipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
