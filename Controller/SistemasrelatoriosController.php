<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasrelatorios Controller
 *
 * @property \App\Model\Table\SistemasrelatoriosTable $Sistemasrelatorios
 *
 * @method \App\Model\Entity\Sistemasrelatorio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasrelatoriosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Departamentos']
        ];
        $sistemasrelatorios = $this->paginate($this->Sistemasrelatorios);

        $this->set(compact('sistemasrelatorios'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasrelatorio id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasrelatorio = $this->Sistemasrelatorios->get($id, [
            'contain' => ['Sistemas', 'Departamentos']
        ]);

        $this->set('sistemasrelatorio', $sistemasrelatorio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasrelatorio = $this->Sistemasrelatorios->newEntity();
        if ($this->request->is('post')) {
            $sistemasrelatorio = $this->Sistemasrelatorios->patchEntity($sistemasrelatorio, $this->request->getData());
            if ($this->Sistemasrelatorios->save($sistemasrelatorio)) {
                $this->Flash->success(__('The sistemasrelatorio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasrelatorio could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasrelatorios->Sistemas->find('list', ['limit' => 200]);
        $departamentos = $this->Sistemasrelatorios->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasrelatorio', 'sistemas', 'departamentos'));
    }

    public function addid($id = null)
    {
        $sistemasrelatorio = $this->Sistemasrelatorios->newEntity();
        if ($this->request->is('post')) {
            $sistemasrelatorio = $this->Sistemasrelatorios->patchEntity($sistemasrelatorio, $this->request->getData());
            $sistemasrelatorio->sistema_id = $id;
            if ($this->Sistemasrelatorios->save($sistemasrelatorio)) {
                $this->Flash->success(__('The sistemasrelatorio has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemasrelatorio could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasrelatorios->Sistemas->find('list', ['limit' => 200]);
        $departamentos = $this->Sistemasrelatorios->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasrelatorio', 'sistemas', 'departamentos'));
    }



    /**
     * Edit method
     *
     * @param string|null $id Sistemasrelatorio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasrelatorio = $this->Sistemasrelatorios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasrelatorio = $this->Sistemasrelatorios->patchEntity($sistemasrelatorio, $this->request->getData());
            if ($this->Sistemasrelatorios->save($sistemasrelatorio)) {
                $this->Flash->success(__('The sistemasrelatorio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasrelatorio could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasrelatorios->Sistemas->find('list', ['limit' => 200]);
        $departamentos = $this->Sistemasrelatorios->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasrelatorio', 'sistemas', 'departamentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasrelatorio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasrelatorio = $this->Sistemasrelatorios->get($id);
        if ($this->Sistemasrelatorios->delete($sistemasrelatorio)) {
            $this->Flash->success(__('The sistemasrelatorio has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasrelatorio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
