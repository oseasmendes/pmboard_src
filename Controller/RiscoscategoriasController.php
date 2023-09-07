<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Riscoscategorias Controller
 *
 * @property \App\Model\Table\RiscoscategoriasTable $Riscoscategorias
 *
 * @method \App\Model\Entity\Riscoscategoria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RiscoscategoriasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $riscoscategorias = $this->paginate($this->Riscoscategorias);

        $this->set(compact('riscoscategorias'));
    }

    /**
     * View method
     *
     * @param string|null $id Riscoscategoria id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $riscoscategoria = $this->Riscoscategorias->get($id, [
            'contain' => ['Riscos']
        ]);

        $this->set('riscoscategoria', $riscoscategoria);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $riscoscategoria = $this->Riscoscategorias->newEntity();
        if ($this->request->is('post')) {
            $riscoscategoria = $this->Riscoscategorias->patchEntity($riscoscategoria, $this->request->getData());
            if ($this->Riscoscategorias->save($riscoscategoria)) {
                $this->Flash->success(__('The riscoscategoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The riscoscategoria could not be saved. Please, try again.'));
        }
        $this->set(compact('riscoscategoria'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Riscoscategoria id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $riscoscategoria = $this->Riscoscategorias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $riscoscategoria = $this->Riscoscategorias->patchEntity($riscoscategoria, $this->request->getData());
            if ($this->Riscoscategorias->save($riscoscategoria)) {
                $this->Flash->success(__('The riscoscategoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The riscoscategoria could not be saved. Please, try again.'));
        }
        $this->set(compact('riscoscategoria'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Riscoscategoria id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $riscoscategoria = $this->Riscoscategorias->get($id);
        if ($this->Riscoscategorias->delete($riscoscategoria)) {
            $this->Flash->success(__('The riscoscategoria has been deleted.'));
        } else {
            $this->Flash->error(__('The riscoscategoria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
