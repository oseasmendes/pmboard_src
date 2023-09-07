<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Responsabilidadestipos Controller
 *
 * @property \App\Model\Table\ResponsabilidadestiposTable $Responsabilidadestipos
 *
 * @method \App\Model\Entity\Responsabilidadestipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ResponsabilidadestiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $responsabilidadestipos = $this->paginate($this->Responsabilidadestipos);

        $this->set(compact('responsabilidadestipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Responsabilidadestipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $responsabilidadestipo = $this->Responsabilidadestipos->get($id, [
            'contain' => ['Responsabilidades']
        ]);

        $this->set('responsabilidadestipo', $responsabilidadestipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $responsabilidadestipo = $this->Responsabilidadestipos->newEntity();
        if ($this->request->is('post')) {
            $responsabilidadestipo = $this->Responsabilidadestipos->patchEntity($responsabilidadestipo, $this->request->getData());
            if ($this->Responsabilidadestipos->save($responsabilidadestipo)) {
                $this->Flash->success(__('The responsabilidadestipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsabilidadestipo could not be saved. Please, try again.'));
        }
        $this->set(compact('responsabilidadestipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Responsabilidadestipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $responsabilidadestipo = $this->Responsabilidadestipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $responsabilidadestipo = $this->Responsabilidadestipos->patchEntity($responsabilidadestipo, $this->request->getData());
            if ($this->Responsabilidadestipos->save($responsabilidadestipo)) {
                $this->Flash->success(__('The responsabilidadestipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The responsabilidadestipo could not be saved. Please, try again.'));
        }
        $this->set(compact('responsabilidadestipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Responsabilidadestipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $responsabilidadestipo = $this->Responsabilidadestipos->get($id);
        if ($this->Responsabilidadestipos->delete($responsabilidadestipo)) {
            $this->Flash->success(__('The responsabilidadestipo has been deleted.'));
        } else {
            $this->Flash->error(__('The responsabilidadestipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
