<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasriscosimpactos Controller
 *
 * @property \App\Model\Table\SistemasriscosimpactosTable $Sistemasriscosimpactos
 *
 * @method \App\Model\Entity\Sistemasriscosimpacto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasriscosimpactosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemariscos']
        ];
        $sistemasriscosimpactos = $this->paginate($this->Sistemasriscosimpactos);

        $this->set(compact('sistemasriscosimpactos'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasriscosimpacto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasriscosimpacto = $this->Sistemasriscosimpactos->get($id, [
            'contain' => ['Sistemariscos']
        ]);

        $this->set('sistemasriscosimpacto', $sistemasriscosimpacto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasriscosimpacto = $this->Sistemasriscosimpactos->newEntity();
        if ($this->request->is('post')) {
            $sistemasriscosimpacto = $this->Sistemasriscosimpactos->patchEntity($sistemasriscosimpacto, $this->request->getData());
            if ($this->Sistemasriscosimpactos->save($sistemasriscosimpacto)) {
                $this->Flash->success(__('The sistemasriscosimpacto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasriscosimpacto could not be saved. Please, try again.'));
        }
        $sistemariscos = $this->Sistemasriscosimpactos->Sistemariscos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasriscosimpacto', 'sistemariscos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasriscosimpacto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasriscosimpacto = $this->Sistemasriscosimpactos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasriscosimpacto = $this->Sistemasriscosimpactos->patchEntity($sistemasriscosimpacto, $this->request->getData());
            if ($this->Sistemasriscosimpactos->save($sistemasriscosimpacto)) {
                $this->Flash->success(__('The sistemasriscosimpacto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasriscosimpacto could not be saved. Please, try again.'));
        }
        $sistemariscos = $this->Sistemasriscosimpactos->Sistemariscos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasriscosimpacto', 'sistemariscos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasriscosimpacto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasriscosimpacto = $this->Sistemasriscosimpactos->get($id);
        if ($this->Sistemasriscosimpactos->delete($sistemasriscosimpacto)) {
            $this->Flash->success(__('The sistemasriscosimpacto has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasriscosimpacto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
