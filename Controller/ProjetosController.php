<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;

use Cake\View\CellTrait;

/**
 * Projetos Controller
 *
 * @property \App\Model\Table\ProjetosTable $Projetos
 *
 * @method \App\Model\Entity\Projeto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosController extends AppController
{

       use CellTrait;
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $statusfuncionals = $this->Projetos->Statusfuncionals->find('list', ['limit' => 200]);        
        $keyword = $this->request->getQueryParams('descricao');
        
       if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                     'contain' => ['Fases','Statusfuncionals','Programas'],
                     'conditions' => ['Projetos.descricao LIKE '=> '%'.$keyword['descricao'].'%'],             
                      'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Projetos.prioridade' => 'asc'
                        ]            
                    ];
                    $projetos = $this->paginate($this->Projetos);
                    } elseif (!empty($keyword['statusfuncional_id'])) 
                            {
                                $this->paginate = [
                                'contain' => ['Fases','Statusfuncionals','Programas'],
                                'conditions' => ['statusfuncional_id = '=> $keyword['statusfuncional_id']],             
                                'order' => [
                                //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                                 'Projetos.prioridade' => 'asc'
                                    ]            
                                ];
                                $projetos = $this->paginate($this->Projetos);
                            } else 
                            {
                                $this->paginate = [
                                 'contain' => ['Fases','Statusfuncionals','Programas'],
                                 /*'limit' => 100, */             
                                  'conditions' => ['arquivo = '=>false,'propostatecnica = '=>true,'statusfuncional_id NOT IN '=> [1,2,3,4,6,8,9,10,11,13,14,15,18,19]],       
                                  'order' => [
                                'Projetos.previstodatafim' => 'asc']

                            ];
                            $projetos = $this->paginate($this->Projetos);
                            }

        $this->set(compact('projetos','statusfuncionals','Programas'));
    }

    public function panel()
    {
        $statusfuncionals = $this->Projetos->Statusfuncionals->find('list', ['limit' => 200]);        
        $keyword = $this->request->getQueryParams('descricao');
        
       if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                     'contain' => ['Fases','Statusfuncionals','Programas'],
                     'conditions' => ['Projetos.descricao LIKE '=> '%'.$keyword['descricao'].'%'],             
                      'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Projetos.prioridade' => 'asc'
                        ]            
                    ];
                    $projetos = $this->paginate($this->Projetos);
                    } elseif (!empty($keyword['statusfuncional_id'])) 
                            {
                                $this->paginate = [
                                'contain' => ['Fases','Statusfuncionals','Programas'],
                                'conditions' => ['statusfuncional_id = '=> $keyword['statusfuncional_id']],             
                                'order' => [
                                //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                                 'Projetos.prioridade' => 'asc'
                                    ]            
                                ];
                                $projetos = $this->paginate($this->Projetos);
                            } else 
                            {
                                $this->paginate = [
                                 'contain' => ['Fases','Statusfuncionals','Programas'],
                                 /*'limit' => 100, */             
                                  'conditions' => ['arquivo = '=>false,'propostatecnica = '=>true,'statusfuncional_id NOT IN '=> [1,2,3,4,6,8,9,10,11,13,14,15,18,19]],       
                                  'order' => [
                                'Projetos.previstodatafim' => 'asc']

                            ];
                            $projetos = $this->paginate($this->Projetos);
                            }

        $this->set(compact('projetos','statusfuncionals','Programas'));
    }

     public function board()
    {
        //copia do index();
        $statusfuncionals = $this->Projetos->Statusfuncionals->find('list', ['limit' => 200]);        
        $keyword = $this->request->getQueryParams('descricao');
        
       if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                     'contain' => ['Fases','Statusfuncionals','Programas'],
                     'conditions' => ['Projetos.descricao LIKE '=> '%'.$keyword['descricao'].'%'],             
                      'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Projetos.descricao' => 'asc'
                        ]            
                    ];
                    $projetos = $this->paginate($this->Projetos);
                    } elseif (!empty($keyword['statusfuncional_id'])) 
                            {
                                $this->paginate = [
                                'contain' => ['Fases','Statusfuncionals','Programas'],
                                'conditions' => ['statusfuncional_id = '=> $keyword['statusfuncional_id']],             
                                'order' => [
                                //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                                 'Projetos.descricao' => 'asc'
                                    ]            
                                ];
                                $projetos = $this->paginate($this->Projetos);
                            } else 
                            {
                                $this->paginate = [
                                 'contain' => ['Fases','Statusfuncionals','Programas'],
                                 //'conditions' => ['Projetos.datasuspensao !=' => 'NULL'],
                                  'conditions' => ['arquivo = '=>false,'propostatecnica = '=>true,'statusfuncional_id <> '=> 14],       
                                  'order' => [
                                'Projetos.descricao' => 'asc']

                            ];
                            $projetos = $this->paginate($this->Projetos);
                            }

        $this->set(compact('projetos','statusfuncionals','Programas'));
    }


     public function kanban()
    {
        //copia do index();
        $statusfuncionals = $this->Projetos->Statusfuncionals->find('list', ['limit' => 200]);        
        $keyword = $this->request->getQueryParams('descricao');
        
       if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                     'contain' => ['Fases','Statusfuncionals','Programas'],
                     'conditions' => ['Projetos.descricao LIKE '=> '%'.$keyword['descricao'].'%'],             
                      'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Projetos.descricao' => 'asc'
                        ]            
                    ];
                    $projetos = $this->paginate($this->Projetos);
                    } elseif (!empty($keyword['statusfuncional_id'])) 
                            {
                                $this->paginate = [
                                'contain' => ['Fases','Statusfuncionals','Programas'],
                                'conditions' => ['statusfuncional_id = '=> $keyword['statusfuncional_id']],             
                                'order' => [
                                //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                                 'Projetos.descricao' => 'asc'
                                    ]            
                                ];
                                $projetos = $this->paginate($this->Projetos);
                            } else 
                            {
                                $this->paginate = [
                                 'contain' => ['Fases','Statusfuncionals','Programas'],
                                 //'conditions' => ['Projetos.datasuspensao !=' => 'NULL'],
                                /* 'conditions' => [/*'isnull(Projetos.datasuspensao)'],'Projetos.realizadodatainicio !=' => 'NULL'],
                                 'limit' => 100,  */            
                                 'conditions' => ['arquivo = '=>false,'propostatecnica = '=>true,'statusfuncional_id NOT IN '=> [1,2,3,4,6,8,9,10,11,13,14,15,18,19]],      
                                  'order' => [
                                'Projetos.descricao' => 'asc']

                            ];
                            $projetos = $this->paginate($this->Projetos);
                            }

        $this->set(compact('projetos','statusfuncionals','Programas'));
    }


    /**
     * View method
     *
     * @param string|null $id Projeto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projeto = $this->Projetos->get($id, [
            'contain' => ['Programas', 'Statusfuncionals','Projetosurls', 'Fases','Kronusplans', 'Agendas'=> [
                                                    'sort' => ['Agendas.dataagenda' => 'ASC','Agendas.horainicio' => 'ASC'], 
                                                    'conditions' => ['Agendas.dataagenda >=' => date("Y-m-d"),'Agendas.tipoagenda IN ' => ['SCRUM','REQUISITOS']],

//("Y-m-d"),'Agendas.tipoagenda !=' => 'SCRUM'],

                                                ], 'Projetosalocs','Projetosblockpoints'=>[
                                                    'sort' => ['Projetosblockpoints.created' => 'DESC'],
                                                    'conditions' => ['Projetosblockpoints.ativo =' => true],

                                                ], 'Projetosnotas'=> [
                                                    'sort' => ['Projetosnotas.created' => 'DESC']], 'Projetosparetos', 'Projetosprodutos'=> [
                                                    'sort' => ['Projetosprodutos.prioridade' => 'ASC'], //INCLUIDO PRA ORDENAR RELATED
                                                    'conditions' => ['Projetosprodutos.statusfuncional_id !=' => 14], // LIBERANDO APENAS PRODUTOS ATIVOS
                                                    ]
                    , 'Projetosstatus', 'Projetoscutovers','Projetosrestrictions','Fivewthreehs'=> [
                                                    'sort' => ['Fivewthreehs.id' => 'ASC'], 
                                                    'conditions' => ['Fivewthreehs.statusfuncional_id !=' => 14],
                                                ]]
        ]);

        $this->set('projeto', $projeto);
    }



    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projeto = $this->Projetos->newEntity();
        if ($this->request->is('post')) {
            $projeto = $this->Projetos->patchEntity($projeto, $this->request->getData());
            if ($this->Projetos->save($projeto)) {
                $this->Flash->success(__('The projeto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projeto could not be saved. Please, try again.'));
        }
        $programas = $this->Projetos->Programas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetos->Statusfuncionals->find('list', ['limit' => 200]);
        $fases = $this->Projetos->Fases->find('list', ['limit' => 200]);
        $propostas = $this->Projetos->Propostas->find('list', ['limit' => 200]);
        $this->set(compact('projeto', 'programas', 'statusfuncionals','propostas', 'fases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projeto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projeto = $this->Projetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projeto = $this->Projetos->patchEntity($projeto, $this->request->getData());
            if ($this->Projetos->save($projeto)) {
                $this->Flash->success(__('The projeto has been saved.'));

                $reg = $id;

                $caminho = WWW_ROOT.DS.'img'.DS.'projetos'.DS.$reg;

                $dir = new folder();
                if ($dir->create($caminho,true,0755)) {
                    $this->Flash->success('Pasta de Imagem Criada  com sucesso');
                }
                

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projeto could not be saved. Please, try again.'));
        }
        $programas = $this->Projetos->Programas->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetos->Statusfuncionals->find('list', ['limit' => 200]);
        $fases = $this->Projetos->Fases->find('list', ['limit' => 200]);
        $propostas = $this->Projetos->Propostas->find('list', ['limit' => 200]);
        $this->set(compact('projeto', 'programas', 'statusfuncionals','propostas' , 'fases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projeto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projeto = $this->Projetos->get($id);
        if ($this->Projetos->delete($projeto)) {
            $this->Flash->success(__('The projeto has been deleted.'));
        } else {
            $this->Flash->error(__('The projeto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function kanbanboard() {
       
    }
}
