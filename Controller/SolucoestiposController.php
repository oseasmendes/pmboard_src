<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Solucoestipos Controller
 *
 * @property \App\Model\Table\SolucoestiposTable $Solucoestipos
 *
 * @method \App\Model\Entity\Solucoestipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolucoestiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $solucoestipos = $this->paginate($this->Solucoestipos);

        $this->set(compact('solucoestipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Solucoestipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solucoestipo = $this->Solucoestipos->get($id, [
            'contain' => ['Solucoesaplicadas']
        ]);

        $this->set('solucoestipo', $solucoestipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solucoestipo = $this->Solucoestipos->newEntity();
        if ($this->request->is('post')) {
            $solucoestipo = $this->Solucoestipos->patchEntity($solucoestipo, $this->request->getData());
            if ($this->Solucoestipos->save($solucoestipo)) {
                $this->Flash->success(__('The solucoestipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solucoestipo could not be saved. Please, try again.'));
        }
        $this->set(compact('solucoestipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solucoestipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solucoestipo = $this->Solucoestipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solucoestipo = $this->Solucoestipos->patchEntity($solucoestipo, $this->request->getData());
            if ($this->Solucoestipos->save($solucoestipo)) {
                $this->Flash->success(__('The solucoestipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solucoestipo could not be saved. Please, try again.'));
        }
        $this->set(compact('solucoestipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solucoestipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solucoestipo = $this->Solucoestipos->get($id);
        if ($this->Solucoestipos->delete($solucoestipo)) {
            $this->Flash->success(__('The solucoestipo has been deleted.'));
        } else {
            $this->Flash->error(__('The solucoestipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
