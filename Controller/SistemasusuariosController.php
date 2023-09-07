<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasusuarios Controller
 *
 * @property \App\Model\Table\SistemasusuariosTable $Sistemasusuarios
 *
 * @method \App\Model\Entity\Sistemasusuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasusuariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Usuarios', 'Responsabilidades', 'Knowhows']
        ];
        $sistemasusuarios = $this->paginate($this->Sistemasusuarios);

        $this->set(compact('sistemasusuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasusuario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasusuario = $this->Sistemasusuarios->get($id, [
            'contain' => ['Sistemas', 'Usuarios','Usuariostipos', 'Responsabilidades', 'Knowhows']
        ]);

        $this->set('sistemasusuario', $sistemasusuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemasusuario = $this->Sistemasusuarios->newEntity();
        var_dump($id);
        if ($this->request->is('post')) {
            $sistemasusuario = $this->Sistemasusuarios->patchEntity($sistemasusuario, $this->request->getData());
            $sistemasusuario->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemasusuarios->save($sistemasusuario)) {
                $this->Flash->success(__('The sistemasusuario has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemasusuario could not be saved. Please, try again.'));
        }

        
        $sistemas = $this->Sistemasusuarios->Sistemas->find('list',array('conditions'=>array('Sistemas.id'=>$id),'order' => array('Sistemas.codenome' => 'asc')));

        //$sistemas = $this->Sistemasusuarios->Sistemas->find('list', ['limit' => 2000]);
        $usuarios = $this->Sistemasusuarios->Usuarios->find('list', ['limit' => 200]);
        $usuariostipos = $this->Sistemasusuarios->Usuariostipos->find('list', ['limit' => 200]);
        $responsabilidades = $this->Sistemasusuarios->Responsabilidades->find('list', ['limit' => 200]);
        $knowhows = $this->Sistemasusuarios->Knowhows->find('list', ['limit' => 200]);
        $this->set(compact('sistemasusuario', 'sistemas', 'usuarios', 'usuariostipos','responsabilidades', 'knowhows'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasusuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasusuario = $this->Sistemasusuarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasusuario = $this->Sistemasusuarios->patchEntity($sistemasusuario, $this->request->getData());
            if ($this->Sistemasusuarios->save($sistemasusuario)) {
                $this->Flash->success(__('The sistemasusuario has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sistemasusuario->sistema_id]);
            }
            $this->Flash->error(__('The sistemasusuario could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasusuarios->Sistemas->find('list', ['limit' => 200]);
        $usuarios = $this->Sistemasusuarios->Usuarios->find('list', ['limit' => 200]);
        $usuariostipos = $this->Sistemasusuarios->Usuariostipos->find('list', ['limit' => 200]);
        $responsabilidades = $this->Sistemasusuarios->Responsabilidades->find('list', ['limit' => 200]);
        $knowhows = $this->Sistemasusuarios->Knowhows->find('list', ['limit' => 200]);
        $this->set(compact('sistemasusuario', 'sistemas', 'usuarios','usuariostipos', 'responsabilidades', 'knowhows'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasusuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasusuario = $this->Sistemasusuarios->get($id);
        if ($this->Sistemasusuarios->delete($sistemasusuario)) {
            $this->Flash->success(__('The sistemasusuario has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasusuario could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sistemasusuario->sistema_id]);
    }
}
