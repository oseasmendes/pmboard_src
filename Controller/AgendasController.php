<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agendas Controller
 *
 * @property \App\Model\Table\AgendasTable $Agendas
 *
 * @method \App\Model\Entity\Agenda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgendasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function indexOld()
    {
        $this->paginate = [
            'contain' => ['Atividadetipos', 'Departamentos', 'Projetos', 'Projetosprodutos', 'Projetosprodutosentregas','Atas']
        ];
        $agendas = $this->paginate($this->Agendas);

        $this->set(compact('agendas'));
    }


public function index()
    {
        
        /*$dia = date('d') - 1;
        $mes = date('m');
        $ano = date('Y');
        $dataatual = mktime(0,0,0,$mes,$dia,$ano); */

        //$dataatual = gmdate("Y-m-d", time()-(3600*27));

        $dataatual = date('Y-m-d',strtotime("-30 days"));

        $atividadetipos = $this->Agendas->Atividadetipos->find('list', ['limit' => 200]);
        
        $keyword = $this->request->getQueryParams();
        
        
       if (!empty($keyword['descricao'])) {
                    
                    $this->paginate = [
                     'contain' => ['Atividadetipos', 'Departamentos', 'Projetos', 'Projetosprodutos', 'Projetosprodutosentregas','Atas'],
                     'conditions' => ['Agendas.etiquetaadicional LIKE '=> '%'.$keyword['descricao'].'%','Agendas.dataagenda > '=> $dataatual],             
                      'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Agendas.dataagenda' => 'asc'
                        ]            
                    ];
                    
                    $agendas = $this->paginate($this->Agendas);
                    } elseif (!empty($keyword['atividadetipo_id'])) 
                            {

                                
                                $this->paginate = [
                                'contain' => ['Atividadetipos', 'Departamentos', 'Projetos', 'Projetosprodutos', 'Projetosprodutosentregas','Atas'],

                                'conditions' => ['atividadetipo_id = '=> $keyword['atividadetipo_id'],'Agendas.dataagenda > '=> $dataatual], 

                                'order' => [
                                //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                                 'Agendas.dataagenda' => 'asc'
                                    ]            
                                ];
                    
                                $agendas = $this->paginate($this->Agendas);
                            } else 
                            {                                                                

                                $this->paginate = [
                                 'contain' => ['Atividadetipos', 'Departamentos', 'Projetos', 'Projetosprodutos', 'Projetosprodutosentregas','Atas'],

                                'conditions' => ['Agendas.dataagenda > '=> $dataatual],
                                 /*'limit' => 100, */             
                                  'order' => [
                                'Agendas.dataagenda' => 'asc'
                                ]
                            ];

                                $agendas = $this->paginate($this->Agendas);
                            }

                        $this->set(compact('agendas','atividadetipos'));
    }



    /**
     * View method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agenda = $this->Agendas->get($id, [
            'contain' => ['Atividadetipos', 
                            'Agendasnotes' ,
                            'Departamentos', 
                            'Projetos', 
                            'Projetosprodutos', 
                            'Projetosprodutosentregas',
                            'Atas',
                            'Projetossprintsdailysreferences'=> [
                                'sort' => ['Projetossprintsdailysreferences.reference' => 'ASC']]],
        ]);

        $this->set('agenda', $agenda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $agenda = $this->Agendas->newEntity();
        if ($this->request->is('post')) {
            $agenda = $this->Agendas->patchEntity($agenda, $this->request->getData());
            $agenda->projeto_id = $id;
            if ($this->Agendas->save($agenda)) {
                $this->Flash->success(__('The agenda has been saved.'));

                // return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The agenda could not be saved. Please, try again.'));
        }
        $atividadetipos = $this->Agendas->Atividadetipos->find('list', ['limit' => 200]);
        $departamentos = $this->Agendas->Departamentos->find('list', ['limit' => 200]);
        $projetos = $this->Agendas->Projetos->find('list', array('conditions'=>array('Projetos.id'=>$id),'order' => array('descricao' => 'asc')) , ['limit' => 200]);
        $projetosprodutos = $this->Agendas->Projetosprodutos->find('list', array('conditions'=>array('Projetosprodutos.projeto_id'=>$id),'order' => array('prioridade' => 'asc')) , ['limit' => 200]);
        $projetosprodutosentregas = $this->Agendas->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $this->set(compact('agenda', 'atividadetipos', 'departamentos', 'projetos', 'projetosprodutos', 'projetosprodutosentregas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agenda = $this->Agendas->get($id, [
            'contain' => []
        ]);
        $projetoid = $agenda->projeto_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agenda = $this->Agendas->patchEntity($agenda, $this->request->getData());
            $projetoid = $agenda->projeto_id;
            if ($this->Agendas->save($agenda)) {
                $this->Flash->success(__('The agenda has been saved.'));

            //    return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetos','action' => 'view',$projetoid]);
            
            }
            $this->Flash->error(__('The agenda could not be saved. Please, try again.'));
        }
        $atividadetipos = $this->Agendas->Atividadetipos->find('list', ['limit' => 200]);
        $departamentos = $this->Agendas->Departamentos->find('list', ['limit' => 200]);
       // $projetos = $this->Agendas->Projetos->find('list', ['limit' => 200]);
      //  $projetosprodutos = $this->Agendas->Projetosprodutos->find('list', ['limit' => 200]);

         $projetos = $this->Agendas->Projetos->find('list', array('conditions'=>array('Projetos.id'=>$projetoid),'order' => array('descricao' => 'asc')) , ['limit' => 200]);
        $projetosprodutos = $this->Agendas->Projetosprodutos->find('list', array('conditions'=>array('Projetosprodutos.projeto_id'=>$projetoid),'order' => array('prioridade' => 'asc')) , ['limit' => 200]);
        $projetosprodutosentregas = $this->Agendas->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $this->set(compact('agenda', 'atividadetipos', 'departamentos', 'projetos', 'projetosprodutos', 'projetosprodutosentregas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agenda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agenda = $this->Agendas->get($id);
        $projetoid = $agenda->projeto_id;

        if ($this->Agendas->delete($agenda)) {
            $this->Flash->success(__('The agenda has been deleted.'));
        } else {
            $this->Flash->error(__('The agenda could not be deleted. Please, try again.'));
        }

      //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Projetos','action' => 'view',$projetoid]);
    }
}
