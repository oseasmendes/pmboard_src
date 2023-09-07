<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasareas Controller
 *
 * @property \App\Model\Table\SistemasareasTable $Sistemasareas
 *
 * @method \App\Model\Entity\Sistemasarea[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasareasController extends AppController
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
        $sistemasareas = $this->paginate($this->Sistemasareas);

        $this->set(compact('sistemasareas'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasarea id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasarea = $this->Sistemasareas->get($id, [
            'contain' => ['Sistemas', 'Departamentos']
        ]);

        $this->set('sistemasarea', $sistemasarea);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemasarea = $this->Sistemasareas->newEntity();

        if ($this->request->is('post')) {
            $sistemasarea = $this->Sistemasareas->patchEntity($sistemasarea, $this->request->getData());
            $sistemasarea->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemasareas->save($sistemasarea)) {
                $this->Flash->success(__('The sistemasarea has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasarea could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasareas->Sistemas->find('list', ['limit' => 200]);
        $departamentos = $this->Sistemasareas->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasarea', 'sistemas', 'departamentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasarea id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasarea = $this->Sistemasareas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasarea = $this->Sistemasareas->patchEntity($sistemasarea, $this->request->getData());
            if ($this->Sistemasareas->save($sistemasarea)) {
                $this->Flash->success(__('The sistemasarea has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasarea could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasareas->Sistemas->find('list', ['limit' => 200]);
        $departamentos = $this->Sistemasareas->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasarea', 'sistemas', 'departamentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasarea id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasarea = $this->Sistemasareas->get($id);
        if ($this->Sistemasareas->delete($sistemasarea)) {
            $this->Flash->success(__('The sistemasarea has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasarea could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
