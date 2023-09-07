<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Todos Controller
 *
 * @property \App\Model\Table\TodosTable $Todos
 *
 * @method \App\Model\Entity\Todo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TodosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => [
                        'Programas', 
                        'Projetos', 
                        'Projetosprodutos', 
                        'Naturezas', 
                        'Paretos'=> [
                            'sort' => ['Paretos.todoprio' => 'ASC']], //47 - Closed, 
                        'Participantes'],
                                        /*'limit' => 100, */             
                                        'conditions' => ['pareto_id NOT IN '=> [30,3,8,35]],       
                                        'order' => [
                                                'Todos.pareto_id' => 'desc',
                                                'Todos.dataprevistaentrega' => 'asc'
                                                ]
                        ];
        $todos = $this->paginate($this->Todos);

        $this->set(compact('todos'));
    }

    /**
     * View method
     *
     * @param string|null $id Todo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $todo = $this->Todos->get($id, [
            'contain' => ['Programas', 'Projetos', 'Projetosprodutos', 'Naturezas', 'Paretos', 'Participantes', 'Todoseventos', 'Todosobservadores']
        ]);

        $this->set('todo', $todo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $todo = $this->Todos->newEntity();
        if ($this->request->is('post')) {
            $todo = $this->Todos->patchEntity($todo, $this->request->getData());
            if ($this->Todos->save($todo)) {
                $this->Flash->success(__('The todo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The todo could not be saved. Please, try again.'));
        }
        $programas = $this->Todos->Programas->find('list',array('conditions'=>array('Programas.ativo'=>true),'order' => array('Programas.descricao' => 'asc')));
        $projetos = $this->Todos->Projetos->find('list',array('conditions'=>array('Projetos.ativo'=>true),'order' => array('Projetos.codenome' => 'asc')));
        $projetosprodutos = $this->Todos->Projetosprodutos->find('list',array('conditions'=>array('Projetosprodutos.ativo = '=>true,'Projetosprodutos.statusfuncional_id NOT IN '=> [1,2,3,4,6,8,9,10,11,13,14,15,18,19]),'order' => array('Projetosprodutos.projeto_id' => 'desc','Projetosprodutos.descricao' => 'asc','Projetosprodutos.prioridade' => 'asc')) , ['limit' => 2000]);
        $naturezas = $this->Todos->Naturezas->find('list', ['limit' => 200]);
        $paretos = $this->Todos->Paretos->find('list',array('conditions'=>array('Paretos.todo'=>1),'order' => array('Paretos.kanban' => 'asc')));
        $participantes = $this->Todos->Participantes->find('list', ['limit' => 200]);        
        $this->set(compact('todo', 'programas', 'projetos', 'projetosprodutos', 'naturezas', 'paretos', 'participantes'));
    }

    
    public function addident($id = null)
    {
        $todo = $this->Todos->newEntity();
        if ($this->request->is('post')) {
            $todo = $this->Todos->patchEntity($todo, $this->request->getData());
            $todo->projetosprodutosentrega_id = $id;
            if ($this->Todos->save($todo)) {
                $this->Flash->success(__('The todo has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The todo could not be saved. Please, try again.'));
        }
        //$programas = $this->Todos->Programas->find('list',array('conditions'=>array('Programas.ativo'=>true),'order' => array('Programas.descricao' => 'asc')));
        //$projetos = $this->Todos->Projetos->find('list',array('conditions'=>array('Projetos.ativo'=>true),'order' => array('Projetos.codenome' => 'asc')));
        //$projetosprodutos = $this->Todos->Projetosprodutos->find('list',array('conditions'=>array('Projetosprodutos.ativo = '=>true,'Projetosprodutos.statusfuncional_id NOT IN '=> [1,2,3,4,6,8,9,10,11,13,14,15,18,19]),'order' => array('Projetosprodutos.projeto_id' => 'desc','Projetosprodutos.descricao' => 'asc','Projetosprodutos.prioridade' => 'asc')) , ['limit' => 2000]);
        $projetosprodutosentregas = $this->Todos->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')));
        $naturezas = $this->Todos->Naturezas->find('list', ['limit' => 200]);
        $paretos = $this->Todos->Paretos->find('list',array('conditions'=>array('Paretos.todo'=>1),'order' => array('Paretos.kanban' => 'asc')));
        $participantes = $this->Todos->Participantes->find('list', ['limit' => 200]);        
        $this->set(compact('todo', 'programas', 'projetos', 'projetosprodutos','projetosprodutosentregas', 'naturezas', 'paretos', 'participantes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Todo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $todo = $this->Todos->get($id, [
            'contain' => []
        ]);
        $entregaid = $todo->projetosprodutosentrega_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $todo = $this->Todos->patchEntity($todo, $this->request->getData());
            
            if ($this->Todos->save($todo)) {
                $this->Flash->success(__('The todo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The todo could not be saved. Please, try again.'));
        }
        $programas = $this->Todos->Programas->find('list', ['limit' => 200]);
        $projetos = $this->Todos->Projetos->find('list', ['limit' => 200]);
        //$projetosprodutos = $this->Todos->Projetosprodutos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Todos->Projetosprodutos->find('list',array('conditions'=>array('Projetosprodutos.ativo = '=>true,'Projetosprodutos.statusfuncional_id NOT IN '=> [1,2,3,4,6,8,9,10,11,13,14,15,18,19]),'order' => array('Projetosprodutos.projeto_id' => 'desc','Projetosprodutos.descricao' => 'asc','Projetosprodutos.prioridade' => 'asc')) , ['limit' => 2000]);
        $projetosprodutosentregas = $this->Todos->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$entregaid),'order' => array('Descricao' => 'asc')));
        $naturezas = $this->Todos->Naturezas->find('list', ['limit' => 200]);
        $paretos = $this->Todos->Paretos->find('list',array('conditions'=>array('Paretos.todo'=>1),'order' => array('Paretos.kanban' => 'asc')));
        $participantes = $this->Todos->Participantes->find('list', ['limit' => 200]);        
        $this->set(compact('todo', 'programas', 'projetos', 'projetosprodutos','projetosprodutosentregas', 'naturezas', 'paretos', 'participantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Todo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $todo = $this->Todos->get($id);
        if ($this->Todos->delete($todo)) {
            $this->Flash->success(__('The todo has been deleted.'));
        } else {
            $this->Flash->error(__('The todo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
