<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usuariostipos Controller
 *
 * @property \App\Model\Table\UsuariostiposTable $Usuariostipos
 *
 * @method \App\Model\Entity\Usuariostipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsuariostiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $usuariostipos = $this->paginate($this->Usuariostipos);

        $this->set(compact('usuariostipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Usuariostipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuariostipo = $this->Usuariostipos->get($id, [
            'contain' => ['Sistemasusuarios']
        ]);

        $this->set('usuariostipo', $usuariostipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usuariostipo = $this->Usuariostipos->newEntity();
        if ($this->request->is('post')) {
            $usuariostipo = $this->Usuariostipos->patchEntity($usuariostipo, $this->request->getData());
            if ($this->Usuariostipos->save($usuariostipo)) {
                $this->Flash->success(__('The usuariostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuariostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('usuariostipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Usuariostipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuariostipo = $this->Usuariostipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuariostipo = $this->Usuariostipos->patchEntity($usuariostipo, $this->request->getData());
            if ($this->Usuariostipos->save($usuariostipo)) {
                $this->Flash->success(__('The usuariostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuariostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('usuariostipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuariostipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuariostipo = $this->Usuariostipos->get($id);
        if ($this->Usuariostipos->delete($usuariostipo)) {
            $this->Flash->success(__('The usuariostipo has been deleted.'));
        } else {
            $this->Flash->error(__('The usuariostipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
