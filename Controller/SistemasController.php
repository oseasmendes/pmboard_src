<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemas Controller
 *
 * @property \App\Model\Table\SistemasTable $Sistemas
 *
 * @method \App\Model\Entity\Sistema[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $departamentos = $this->Sistemas->Departamentos->find('list', ['limit' => 200]);
        $keyword = $this->request->getQueryParams('descricao');

        if (!empty($keyword['descricao'])) {
            $this->paginate = [
             'contain' => ['Departamentos','Statusfuncionals','Sistemasqueues'],
             'conditions' => ['Sistemas.codenome LIKE '=> '%'.$keyword['descricao'].'%'],             
              'order' => [
             //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                'Sistemas.descricao' => 'asc'
                ]            
            ];
            $sistemas = $this->paginate($this->Sistemas);
        } elseif (!empty($keyword['departamento_id'])) {
                    $this->paginate = [
                    'contain' => ['Departamentos','Statusfuncionals','Sistemasqueues'],
                    'conditions' => ['departamento_id = '=> $keyword['departamento_id']],             
                    'order' => [
                    //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                     'Sistemas.descricao' => 'asc'
                        ]            
                    ];
                    $sistemas = $this->paginate($this->Sistemas);
                } else {
                    $this->paginate = [
                     'contain' => ['Departamentos','Statusfuncionals','Sistemasqueues'],
                     'conditions' => ['Sistemas.ativo = '=> true,'Sistemas.sistemasqueue_id = '=> 1],             
                     /*'limit' => 100, */             
                      'order' => [
                    'Sistemas.descricao' => 'asc']

                ];
                $sistemas = $this->paginate($this->Sistemas);
        }


     //   $this->paginate = [
     //       'contain' => ['Empresas', 'Departamentos']
      //  ];
       // $sistemas = $this->paginate($this->Sistemas);


        $this->set(compact('sistemas','departamentos','Statusfuncionals','Sistemasqueues'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistema id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistema = $this->Sistemas->get($id, [
            'contain' => ['Empresas',
                            'Empresasunidades',
                            'Sistemasqueues',
                            'Sistemasprocessos',
                            'Sistemasestrategias',
                            'Departamentos',
                            'Projetosprodutosentregas'=> ['sort' => ['Projetosprodutosentregas.canal' => 'desc','Projetosprodutosentregas.datacriacaooriginal' => 'ASC'],
                                                          'conditions' => ['Projetosprodutosentregas.pareto_id NOT IN '=> [10,13,11,47]]],
                            'Sistemasareas',
                            'Sistemasbriefings',
                            'Sistemascfgdbs',
                            'Sistemascfgfronts',
                            'Sistemascfgintegrations',
                            'Sistemascfgrelacionados',
                            'Sistemascfgscripts',
                            'Sistemascfgurls',
                            'Sistemascfgtables'=> ['sort' => ['Sistemascfgtables.tabelanome' => 'asc'],
                                                    'conditions' => ['Sistemascfgtables.ativo = '=> true]],                            
                            'Sistemasconsultores',
                            'Sistemasdocs',
                            'Sistemashistoricos',
                            'Sistemasrelatorios',
                            'Sistemasriscos',
                            'Sistemasusuarios',
                            'Sistemasnotas',
                            'Sistemasobjetos',
                            'Sistemasfaqs',
                            'Sistemasupdates' => ['conditions'=> ['Sistemasupdates.statusfuncional_id = ' => 11],
                                                  'sort' => ['Sistemasupdates.dataupdate' => 'DESC']],
                            'Sistemasmodulos'=> ['sort' => ['Sistemasmodulos.prio' => 'ASC']]]
        ]);

        $this->set('sistema', $sistema);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistema = $this->Sistemas->newEntity();
        if ($this->request->is('post')) {
            $sistema = $this->Sistemas->patchEntity($sistema, $this->request->getData());
            if ($this->Sistemas->save($sistema)) {
                $this->Flash->success(__('The sistema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistema could not be saved. Please, try again.'));
        }
        $empresas = $this->Sistemas->Empresas->find('list', ['limit' => 200]);
        $departamentos = $this->Sistemas->Departamentos->find('list', ['limit' => 200]);
        $empresasunidades = $this->Sistemas->Empresasunidades->find('list', ['limit' => 200]);
        $sistemasqueues = $this->Sistemas->Sistemasqueues->find('list', ['limit' => 200]);
        $sistemasestrategias = $this->Sistemas->Sistemasestrategias->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Sistemas->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('sistema', 'empresas', 'departamentos','statusfuncionals','sistemasestrategias','empresasunidades','sistemasqueues'));
    }

    
  
    /**
     * Edit method
     *
     * @param string|null $id Sistema id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistema = $this->Sistemas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistema = $this->Sistemas->patchEntity($sistema, $this->request->getData());
            if ($this->Sistemas->save($sistema)) {
                $this->Flash->success(__('The sistema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistema could not be saved. Please, try again.'));
        }
        $empresas = $this->Sistemas->Empresas->find('list', ['limit' => 200]);
        $departamentos = $this->Sistemas->Departamentos->find('list', ['limit' => 200]);
        $empresasunidades = $this->Sistemas->Empresasunidades->find('list', ['limit' => 200]);
        $sistemasestrategias = $this->Sistemas->Sistemasestrategias->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Sistemas->Statusfuncionals->find('list', ['limit' => 200]);
        $sistemasqueues = $this->Sistemas->Sistemasqueues->find('list', ['limit' => 200]);
        $this->set(compact('sistema', 'empresas', 'departamentos','statusfuncionals','sistemasestrategias','empresasunidades','sistemasqueues'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistema id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistema = $this->Sistemas->get($id);
        if ($this->Sistemas->delete($sistema)) {
            $this->Flash->success(__('The sistema has been deleted.'));
        } else {
            $this->Flash->error(__('The sistema could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
