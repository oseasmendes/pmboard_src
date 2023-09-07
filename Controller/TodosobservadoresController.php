<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Todosobservadores Controller
 *
 * @property \App\Model\Table\TodosobservadoresTable $Todosobservadores
 *
 * @method \App\Model\Entity\Todosobservadore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TodosobservadoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Todos', 'Participantes']
        ];
        $todosobservadores = $this->paginate($this->Todosobservadores);

        $this->set(compact('todosobservadores'));
    }

    /**
     * View method
     *
     * @param string|null $id Todosobservadore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $todosobservadore = $this->Todosobservadores->get($id, [
            'contain' => ['Todos', 'Participantes']
        ]);

        $this->set('todosobservadore', $todosobservadore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $todosobservadore = $this->Todosobservadores->newEntity();
        if ($this->request->is('post')) {
            $todosobservadore = $this->Todosobservadores->patchEntity($todosobservadore, $this->request->getData());
            if ($this->Todosobservadores->save($todosobservadore)) {
                $this->Flash->success(__('The todosobservadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The todosobservadore could not be saved. Please, try again.'));
        }
        $todos = $this->Todosobservadores->Todos->find('list', ['limit' => 200]);
        $participantes = $this->Todosobservadores->Participantes->find('list', ['limit' => 200]);
        $this->set(compact('todosobservadore', 'todos', 'participantes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Todosobservadore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $todosobservadore = $this->Todosobservadores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $todosobservadore = $this->Todosobservadores->patchEntity($todosobservadore, $this->request->getData());
            if ($this->Todosobservadores->save($todosobservadore)) {
                $this->Flash->success(__('The todosobservadore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The todosobservadore could not be saved. Please, try again.'));
        }
        $todos = $this->Todosobservadores->Todos->find('list', ['limit' => 200]);
        $participantes = $this->Todosobservadores->Participantes->find('list', ['limit' => 200]);
        $this->set(compact('todosobservadore', 'todos', 'participantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Todosobservadore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $todosobservadore = $this->Todosobservadores->get($id);
        if ($this->Todosobservadores->delete($todosobservadore)) {
            $this->Flash->success(__('The todosobservadore has been deleted.'));
        } else {
            $this->Flash->error(__('The todosobservadore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
