<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemascfgtables Controller
 *
 * @property \App\Model\Table\SistemascfgtablesTable $Sistemascfgtables
 *
 * @method \App\Model\Entity\Sistemascfgtable[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemascfgtablesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $sistemas = $this->Sistemascfgtables->Sistemas->find('list',array('conditions'=>array('Sistemas.ativo = '=> true),'order' => array('Sistemas.codenome' => 'asc')));
        $keyword = $this->request->getQueryParams('descricao');


        if (!empty($keyword['descricao'])) {
            $this->paginate = [
             'contain' => ['Sistemas', 'Sistemasmodulos'],
             'conditions' => ['Sistemascfgtables.descricao LIKE '=> '%'.$keyword['descricao'].'%'],             
              'order' => [
             //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                'Sistemascfgtables.descricao' => 'asc'
                ]            
            ];
            $sistemascfgtables = $this->paginate($this->Sistemascfgtables);
        } elseif (!empty($keyword['sistema_id'])) {
                    $this->paginate = [
                    'contain' => ['Sistemas', 'Sistemasmodulos'],
                    'conditions' => ['Sistemascfgtables.sistema_id = '=> $keyword['sistema_id']],             
                    'order' => [
                    //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                     'Sistemascfgtables.descricao' => 'asc'
                        ]            
                    ];
                    $sistemascfgtables = $this->paginate($this->Sistemascfgtables);
        } elseif (!empty($keyword['nometabela'])) {
                    $this->paginate = [
                    'contain' => ['Sistemas', 'Sistemasmodulos'],
                    'conditions' => ['Sistemascfgtables.tabelanome LIKE '=> '%'.$keyword['nometabela'].'%'],             
                    'order' => [
                    //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                     'Sistemascfgtables.descricao' => 'asc'
                        ]            
                    ];
                    $sistemascfgtables = $this->paginate($this->Sistemascfgtables);
        } else {
                    $this->paginate = [
                        'contain' => ['Sistemas', 'Sistemasmodulos'],
                     'conditions' => ['Sistemascfgtables.ativo = '=> true],             
                     /*'limit' => 100, */             
                      'order' => [
                    'Sistemascfgtables.descricao' => 'asc']

                ];

                $sistemascfgtables = $this->paginate($this->Sistemascfgtables);
        }


    
        $this->set(compact('sistemascfgtables','sistemas'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemascfgtable id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemascfgtable = $this->Sistemascfgtables->get($id, [
            'contain' => ['Sistemas', 'Sistemasmodulos']
        ]);

        $this->set('sistemascfgtable', $sistemascfgtable);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemascfgtable = $this->Sistemascfgtables->newEntity();
        if ($this->request->is('post')) {
            $sistemascfgtable = $this->Sistemascfgtables->patchEntity($sistemascfgtable, $this->request->getData());
            if ($this->Sistemascfgtables->save($sistemascfgtable)) {
                $this->Flash->success(__('The sistemascfgtable has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemascfgtable could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgtables->Sistemas->find('list', ['limit' => 200]);
        $sistemasmodulos = $this->Sistemascfgtables->Sistemasmodulos->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgtable', 'sistemas', 'sistemasmodulos'));
    }

    public function addid($id = null)
    {
        $sistemascfgtable = $this->Sistemascfgtables->newEntity();
        $sistemascfgtable->sistema_id = $id;
        if ($this->request->is('post')) {
            $sistemascfgtable = $this->Sistemascfgtables->patchEntity($sistemascfgtable, $this->request->getData());
            if ($this->Sistemascfgtables->save($sistemascfgtable)) {
                $this->Flash->success(__('The sistemascfgtable has been saved.'));
                
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemascfgtable could not be saved. Please, try again.'));
        }

        $sistemas = $this->Sistemascfgtables->Sistemas->find('list',array('conditions'=>array('Sistemas.id'=>$id),'order' => array('Sistemas.referencia' => 'asc')));
        $sistemasmodulos = $this->Sistemascfgtables->Sistemasmodulos->find('list',array('conditions'=>array('Sistemasmodulos.sistema_id'=>$id),'order' => array('Sistemasmodulos.nome' => 'asc')));
        $this->set(compact('sistemascfgtable', 'sistemas', 'sistemasmodulos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemascfgtable id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemascfgtable = $this->Sistemascfgtables->get($id, [
            'contain' => []
        ]);
        $sistemaid = $sistemascfgtable->sistema_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemascfgtable = $this->Sistemascfgtables->patchEntity($sistemascfgtable, $this->request->getData());
            
            if ($this->Sistemascfgtables->save($sistemascfgtable)) {
                $this->Flash->success(__('The sistemascfgtable has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$sistemaid]);
            }
            $this->Flash->error(__('The sistemascfgtable could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgtables->Sistemas->find('list', ['limit' => 200]);
        $sistemasmodulos = $this->Sistemascfgtables->Sistemasmodulos->find('list',array('conditions'=>array('Sistemasmodulos.sistema_id'=>$sistemaid),'order' => array('Sistemasmodulos.nome' => 'asc')));
        
        $this->set(compact('sistemascfgtable', 'sistemas', 'sistemasmodulos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemascfgtable id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemascfgtable = $this->Sistemascfgtables->get($id);
        $sistemaid = $sistemascfgtable->sistema_id;
        if ($this->Sistemascfgtables->delete($sistemascfgtable)) {
            $this->Flash->success(__('The sistemascfgtable has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemascfgtable could not be deleted. Please, try again.'));
        }
        return $this->redirect(['controller' => 'Sistemas','action' => 'view',$sistemaid]);
        
    }
}
