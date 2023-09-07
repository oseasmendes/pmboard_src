<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Atividadetipos Controller
 *
 * @property \App\Model\Table\AtividadetiposTable $Atividadetipos
 *
 * @method \App\Model\Entity\Atividadetipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtividadetiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $atividadetipos = $this->paginate($this->Atividadetipos);

        $this->set(compact('atividadetipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Atividadetipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atividadetipo = $this->Atividadetipos->get($id, [
            'contain' => ['Agendas']
        ]);

        $this->set('atividadetipo', $atividadetipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atividadetipo = $this->Atividadetipos->newEntity();
        if ($this->request->is('post')) {
            $atividadetipo = $this->Atividadetipos->patchEntity($atividadetipo, $this->request->getData());
            if ($this->Atividadetipos->save($atividadetipo)) {
                $this->Flash->success(__('The atividadetipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atividadetipo could not be saved. Please, try again.'));
        }
        $this->set(compact('atividadetipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Atividadetipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atividadetipo = $this->Atividadetipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atividadetipo = $this->Atividadetipos->patchEntity($atividadetipo, $this->request->getData());
            if ($this->Atividadetipos->save($atividadetipo)) {
                $this->Flash->success(__('The atividadetipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atividadetipo could not be saved. Please, try again.'));
        }
        $this->set(compact('atividadetipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Atividadetipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atividadetipo = $this->Atividadetipos->get($id);
        if ($this->Atividadetipos->delete($atividadetipo)) {
            $this->Flash->success(__('The atividadetipo has been deleted.'));
        } else {
            $this->Flash->error(__('The atividadetipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
