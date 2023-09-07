<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultores Controller
 *
 * @property \App\Model\Table\ConsultoresTable $Consultores
 *
 * @method \App\Model\Entity\Consultore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsultoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function indexOld()
    {
        $this->paginate = [
            'contain' => ['Departamentos', 'Superiorimediatos', 'Consultorias'],  
            'order' => ['Consultores.nome' => 'asc']
        ];
        $consultores = $this->paginate($this->Consultores);

        $this->set(compact('consultores'));
    }

    public function index() 
    {
        $departamentos = $this->Consultores->Departamentos->find('list', ['limit' => 200]);        
        $keyword = $this->request->getQueryParams('nome');
        
       if (!empty($keyword['nome'])) {
                    $this->paginate = [
                     'contain' => ['Departamentos', 'Superiorimediatos', 'Consultorias'],  
                     'conditions' => ['Consultores.nome LIKE '=> '%'.$keyword['nome'].'%'],             
                      'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Consultores.nome' => 'asc'
                        ]            
                    ];
                    $consultores = $this->paginate($this->Consultores);
                    } elseif (!empty($keyword['departamento_id'])) 
                            {
                                $this->paginate = [
                                'contain' => ['Departamentos', 'Superiorimediatos', 'Consultorias'],  
                                'conditions' => ['departamento_id = '=> $keyword['departamento_id']],             
                                'order' => [
                                //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                                 'Consultores.nome' => 'asc'
                                    ]            
                                ];
                                $consultores = $this->paginate($this->Consultores);
                            } else 
                            {
                                $this->paginate = [
                                 'contain' => ['Departamentos', 'Superiorimediatos', 'Consultorias'],  
                                 /*'limit' => 100, */             
                                  'conditions' => ['Consultores.engajado = '=>true],       
                                  'order' => [
                                'Consultores.cargo' => 'asc',      
                                'Consultores.nome' => 'asc']

                            ];
                            $consultores = $this->paginate($this->Consultores);
                            }

        $this->set(compact('consultores','departamentos','superiorimediatos','consultorias'));
    }

    /**
     * View method
     *
     * @param string|null $id Consultore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dataatual = date('Y-m-d',strtotime("-15 days"));
        $dataate = date('Y-m-d',strtotime("+17 days"));

        $consultore = $this->Consultores->get($id, [
            'contain' => ['Departamentos',
                          'Projetosprodutosentregas' => [
                            'sort' => ['Projetosprodutosentregas.canal' => 'ASC'],
                            'conditions' => ['Projetosprodutosentregas.pareto_id NOT IN ' => [11,13,30,27,47,40]], ], //47 - Closed,
                          'Superiorimediatos', 
                          'Consultorias', 
                          'Fivewthreehs', 
                          'Agendas' => [
                            'sort' => [ 'Agendas.dataagenda' => 'asc'],
                            'conditions' => ['Agendas.dataagenda > '=> $dataatual,'Agendas.dataagenda < '=> $dataate]], 
                          'Projetosalocs',
                          'Projetosapontamentos', 
                          'Sistemasconsultores',
                          'Sistemasqueuesconsultores',
                          'Consultoresnotas',
                          'Consultoresferias',
                          'Projetosprodutosentregasalocs' => 
                                ['conditions' => ['Projetosprodutosentregasalocs.pareto_id !=' => 3],
                                    'sort' => ['Projetosprodutosentregasalocs.descricao' => 'ASC'],
                                ],
                        ]
        ]);

     

        $this->set('consultore', $consultore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultore = $this->Consultores->newEntity();
        if ($this->request->is('post')) {
            $consultore = $this->Consultores->patchEntity($consultore, $this->request->getData());
            if ($this->Consultores->save($consultore)) {
                $this->Flash->success(__('The consultore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultore could not be saved. Please, try again.'));
        }
        $departamentos = $this->Consultores->Departamentos->find('list', ['limit' => 200]);
        $superiorimediatos = $this->Consultores->Superiorimediatos->find('list', ['limit' => 200]);
        $consultorias = $this->Consultores->Consultorias->find('list', ['limit' => 200]);
        $this->set(compact('consultore', 'departamentos', 'superiorimediatos', 'consultorias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultore = $this->Consultores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultore = $this->Consultores->patchEntity($consultore, $this->request->getData());
            if ($this->Consultores->save($consultore)) {
                $this->Flash->success(__('The consultore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultore could not be saved. Please, try again.'));
        }
        $departamentos = $this->Consultores->Departamentos->find('list', ['limit' => 200]);
        $superiorimediatos = $this->Consultores->Superiorimediatos->find('list', ['limit' => 200]);
        $consultorias = $this->Consultores->Consultorias->find('list', ['limit' => 200]);
        $this->set(compact('consultore', 'departamentos', 'superiorimediatos', 'consultorias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultore = $this->Consultores->get($id);
        if ($this->Consultores->delete($consultore)) {
            $this->Flash->success(__('The consultore has been deleted.'));
        } else {
            $this->Flash->error(__('The consultore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
