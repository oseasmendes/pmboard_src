<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Atividadestipos Controller
 *
 * @property \App\Model\Table\AtividadestiposTable $Atividadestipos
 *
 * @method \App\Model\Entity\Atividadestipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtividadestiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $atividadestipos = $this->paginate($this->Atividadestipos);

        $this->set(compact('atividadestipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Atividadestipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atividadestipo = $this->Atividadestipos->get($id, [
            'contain' => ['Folhaatividadesdetalhes']
        ]);

        $this->set('atividadestipo', $atividadestipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atividadestipo = $this->Atividadestipos->newEntity();
        if ($this->request->is('post')) {
            $atividadestipo = $this->Atividadestipos->patchEntity($atividadestipo, $this->request->getData());
            if ($this->Atividadestipos->save($atividadestipo)) {
                $this->Flash->success(__('The atividadestipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atividadestipo could not be saved. Please, try again.'));
        }
        $this->set(compact('atividadestipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Atividadestipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atividadestipo = $this->Atividadestipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atividadestipo = $this->Atividadestipos->patchEntity($atividadestipo, $this->request->getData());
            if ($this->Atividadestipos->save($atividadestipo)) {
                $this->Flash->success(__('The atividadestipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atividadestipo could not be saved. Please, try again.'));
        }
        $this->set(compact('atividadestipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Atividadestipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atividadestipo = $this->Atividadestipos->get($id);
        if ($this->Atividadestipos->delete($atividadestipo)) {
            $this->Flash->success(__('The atividadestipo has been deleted.'));
        } else {
            $this->Flash->error(__('The atividadestipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
