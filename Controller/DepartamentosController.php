<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Departamentos Controller
 *
 * @property \App\Model\Table\DepartamentosTable $Departamentos
 *
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartamentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $departamentos = $this->paginate($this->Departamentos,array('order'=>array('descricao' => 'asc')));

        //$unidades = $this->paginate($this->Unidades,array('order'=>array('descricao' => 'asc')));

        $this->set(compact('departamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $departamento = $this->Departamentos->get($id, [
            'contain' => ['Agendas',
                            'Gerentes',
                            'Empresasunidades',
                            'Consultores',
                            'Sistemas',
                            'Sistemasareas',
                            'Sistemasbriefings',
                            'Projetosprodutosentregas'=> [
                                'sort' => [
                                        'Projetosprodutosentregas.canal' => 'DESC',
                                        'Projetosprodutosentregas.comentario' => 'ASC',
                                        'Projetosprodutosentregas.created' => 'DESC'], 
                                'conditions' => [
                                                'Projetosprodutosentregas.datarealizada is null',
                                                'Projetosprodutosentregas.frente_id = ' => 24,
                                                'Projetosprodutosentregas.comentario not in '=> ['Cancelado','Implementado em produção','Não iniciado']]],
                            'Participantes']
        ]);

        $this->set('departamento', $departamento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departamento = $this->Departamentos->newEntity();
        if ($this->request->is('post')) {
            $departamento = $this->Departamentos->patchEntity($departamento, $this->request->getData());
            if ($this->Departamentos->save($departamento)) {
                $this->Flash->success(__('The departamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departamento could not be saved. Please, try again.'));
        }

        $gerentes = $this->Departamentos->Gerentes->find('list', ['limit' => 200]);
        $fupqueues = $this->Departamentos->Fupqueues->find('list',array('order' => array('descricao' => 'asc')),['limit' => 1200]);
        $empresasunidades = $this->Departamentos->Empresasunidades->find('list', ['limit' => 200]);
        $fupqueues = $this->Departamentos->Fupqueues->find('list',array('order' => array('descricao' => 'asc')),['limit' => 1200]);
        $this->set(compact('departamento','gerentes','empresasunidades','fupqueues'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departamento = $this->Departamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departamento = $this->Departamentos->patchEntity($departamento, $this->request->getData());
            if ($this->Departamentos->save($departamento)) {
                $this->Flash->success(__('The departamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The departamento could not be saved. Please, try again.'));
        }
        $gerentes = $this->Departamentos->Gerentes->find('list', ['limit' => 200]);
        $empresasunidades = $this->Departamentos->Empresasunidades->find('list', ['limit' => 200]);
        $fupqueues = $this->Departamentos->Fupqueues->find('list',array('order' => array('descricao' => 'asc')),['limit' => 1200]);
        $this->set(compact('departamento','gerentes','empresasunidades','fupqueues'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Departamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $departamento = $this->Departamentos->get($id);
        if ($this->Departamentos->delete($departamento)) {
            $this->Flash->success(__('The departamento has been deleted.'));
        } else {
            $this->Flash->error(__('The departamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
