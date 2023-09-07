<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Todoseventos Controller
 *
 * @property \App\Model\Table\TodoseventosTable $Todoseventos
 *
 * @method \App\Model\Entity\Todosevento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TodoseventosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Todos', 'Tecnicos']
        ];
        $todoseventos = $this->paginate($this->Todoseventos);

        $this->set(compact('todoseventos'));
    }

    /**
     * View method
     *
     * @param string|null $id Todosevento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $todosevento = $this->Todoseventos->get($id, [
            'contain' => ['Todos', 'Tecnicos']
        ]);

        $this->set('todosevento', $todosevento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $todosevento = $this->Todoseventos->newEntity();
        if ($this->request->is('post')) {
            $todosevento = $this->Todoseventos->patchEntity($todosevento, $this->request->getData());
            if ($this->Todoseventos->save($todosevento)) {
                $this->Flash->success(__('The todosevento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The todosevento could not be saved. Please, try again.'));
        }
        $todos = $this->Todoseventos->Todos->find('list', ['limit' => 200]);
        $tecnicos = $this->Todoseventos->Tecnicos->find('list', ['limit' => 200]);
        $this->set(compact('todosevento', 'todos', 'tecnicos'));
    }

    public function addid($id = null)
    {
        $todosevento = $this->Todoseventos->newEntity();
        if ($this->request->is('post')) {
            $todosevento = $this->Todoseventos->patchEntity($todosevento, $this->request->getData());
            
            if ($this->Todoseventos->save($todosevento)) {
                $this->Flash->success(__('The todosevento has been saved.'));
                
                return $this->redirect(['controller' => 'Todos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The todosevento could not be saved. Please, try again.'));
        }
        $todos = $this->Todoseventos->Todos->find('list', ['limit' => 200]);
        $tecnicos = $this->Todoseventos->Tecnicos->find('list', ['limit' => 200]);
        $this->set(compact('todosevento', 'todos', 'tecnicos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Todosevento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $todosevento = $this->Todoseventos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $todosevento = $this->Todoseventos->patchEntity($todosevento, $this->request->getData());
            if ($this->Todoseventos->save($todosevento)) {
                $this->Flash->success(__('The todosevento has been saved.'));
                
                return $this->redirect(['controller' => 'Todos','action' => 'view',$todosevento->todo_id]);
                
            }
            $this->Flash->error(__('The todosevento could not be saved. Please, try again.'));
        }
        $todos = $this->Todoseventos->Todos->find('list', ['limit' => 200]);
        $tecnicos = $this->Todoseventos->Tecnicos->find('list', ['limit' => 200]);
        $this->set(compact('todosevento', 'todos', 'tecnicos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Todosevento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $todosevento = $this->Todoseventos->get($id);
        if ($this->Todoseventos->delete($todosevento)) {
            $this->Flash->success(__('The todosevento has been deleted.'));
        } else {
            $this->Flash->error(__('The todosevento could not be deleted. Please, try again.'));
        }        
        return $this->redirect(['controller' => 'Todos','action' => 'view',$todosevento->todo_id]);
    }
}
