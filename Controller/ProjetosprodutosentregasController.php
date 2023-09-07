<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;

/**
 * Projetosprodutosentregas Controller
 *
 * @property \App\Model\Table\ProjetosprodutosentregasTable $Projetosprodutosentregas
 *
 * @method \App\Model\Entity\Projetosprodutosentrega[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosentregasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $projetosprodutos = $this->Projetosprodutosentregas->Projetosprodutos->find('list',array('conditions' => ['Projetosprodutos.projeto_id IN '=> [111,110]],'order' => array('descricao' => 'asc')), ['limit' => 200]);
  /*      $this->paginate = [
            'contain' => ['Projetosprodutos', 'Sistemas', 'Statusfuncionals', 'Paretos', 'Unidademedidas','Fases','Empresas','Ambientes'],
            'order' => array('projetosproduto_id' => 'asc','prioridade' => 'asc'),
        ]; */


        $keyword = $this->request->getQueryParams('descricao');
        
       if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                    'contain' => ['Projetosprodutos', 'Sistemas', 'Statusfuncionals', 'Paretos','Fases','Empresas','Ambientes'],
                    'conditions' => ['Projetosprodutosentregas.descricao LIKE '=> '%'.$keyword['descricao'].'%'], //,['Projetosprodutosentregas.statusfuncional_id = '=> 16]             
                    'order' => array('canal' => 'asc','datacriacaooriginal' => 'desc'),
                    ];
                    $projetosprodutosentregas = $this->paginate($this->Projetosprodutosentregas);
                    } elseif (!empty($keyword['projetosproduto_id'])) 
                            {
                                 $this->paginate = [
                                    'contain' => ['Projetosprodutos', 'Sistemas', 'Statusfuncionals', 'Paretos', 'Unidademedidas','Fases','Empresas','Ambientes'],
                                    'conditions' => ['Projetosprodutosentregas.projetosproduto_id = '=> $keyword['projetosproduto_id'],['Projetosprodutosentregas.frente_id not in '=> [25,26]],['Projetosprodutosentregas.pareto_id NOT IN '=> [13,11]]],
                                'order' => array('frente_id' => 'asc','pareto_id' => 'desc','prioridade' => 'asc'),
                                ];
                                $projetosprodutosentregas = $this->paginate($this->Projetosprodutosentregas);
                            
                            //ROTINA PARA INCLUIR A REFERENCIA
                    } elseif (!empty($keyword['referencia'])) 
                            {
                                 $this->paginate = [
                                    'contain' => ['Projetosprodutos', 'Sistemas', 'Statusfuncionals', 'Paretos', 'Unidademedidas','Fases','Empresas','Ambientes'],
                                    'conditions' => ['Projetosprodutosentregas.referencia LIKE '=> '%'.$keyword['referencia'].'%'/*, ['Projetosprodutosentregas.statusfuncional_id = '=> 16] */],
                                'order' => array('referencia' => 'asc'),
                                ];
                                $projetosprodutosentregas = $this->paginate($this->Projetosprodutosentregas);
                            } 
                    else 
                            {
                                $this->paginate = [
                                    'contain' => ['Projetosprodutos', 'Sistemas', 'Statusfuncionals', 'Paretos', 'Unidademedidas','Fases','Empresas','Ambientes'],
                                'conditions' => ['Projetosprodutosentregas.statusfuncional_id != '=> 14,
                                                'Projetosprodutosentregas.pareto_id NOT IN ' => [30,27,47,11,40,13],
                                                'Projetosprodutosentregas.comentario NOT IN '=> ['Implementado em Produção','Cancelado','Hold TI','Hold Area','Closed','Resolved'],
                                                'Projetosprodutosentregas.consultore_id = '=> 4
                                            ],
                                'order' => array('canal' => 'desc','projetosproduto_id' => 'asc','referencia' => 'asc'),
                                ];
                            $projetosprodutosentregas = $this->paginate($this->Projetosprodutosentregas);
                            }


        //$projetosprodutosentregas = $this->paginate($this->Projetosprodutosentregas);
        //$projetosprodutos = $this->Projetosprodutosentregas->Projetosprodutos->find('list', ['limit' => 200]);






        $this->set(compact('projetosprodutosentregas','projetosprodutos','sistemas','statusfuncionals','paretos','fases','empresas','ambientes'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosentrega id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosentrega = $this->Projetosprodutosentregas->get($id, [
            'contain' => [
                'Projetosprodutos', 
                'Sistemas', 
                'Statusfuncionals', 
                'Paretos', 
                'Consultores', 
                'Unidademedidas', 
                'Agendas', 
                'Todos', 
                'Projetosapontamentos', 
                'Projetosentregasparetos'=> [
        'sort' => ['Projetosentregasparetos.id' => 'DESC'],
        'conditions' => ['Projetosentregasparetos.created >=' => date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-7,date("Y")))]           
    ]
    ,'Fases',
    'Empresas',
    'Entregasblockpoints',
    'Ambientes', 
    'Projetosentregasreqs', 
    'Projetosentregasencerramentos'=> [
        'sort' => ['Projetosentregasencerramentos.prio' => 'DESC'],       
        ], 
    'Projetosprodutosentregasalocs',
    'Projetosprodutosentregasflws'=> [
            'sort' => ['Projetosprodutosentregasflws.data' => 'DESC'],       
            ],
    'Projetosprodutosentregasdiarios',
    'Projetosprodutosentregasimgs',
    'Projetosprodutosentregasurls',
    'Projetosentregasnotas',
    'Kronusitems' => [
        'sort' => ['Kronusitems.ordem' => 'ASC'],       
        ],
    'Entregastipos' ],
              'order' => [
                                'Projetosprodutosentregas.projetosproduto_id' => 'asc','Projetosprodutosentregas.prioridade' => 'asc']
        ]);

        $this->set('projetosprodutosentrega', $projetosprodutosentrega);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosprodutosentrega = $this->Projetosprodutosentregas->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosentrega = $this->Projetosprodutosentregas->patchEntity($projetosprodutosentrega, $this->request->getData());
            $projetosprodutosentrega->projetosproduto_id = $id;
            if ($this->Projetosprodutosentregas->save($projetosprodutosentrega)) {
                $this->Flash->success(__('The projetosprodutosentrega has been saved.'));

                //return $this->redirect(['controller' => 'Projetosprodutos','action' => 'index']);

                 return $this->redirect(['controller'=>'Projetosprodutos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosprodutosentrega could not be saved. Please, try again.'));
        }

      //  $entrega = $projetosprodutosentrega->projetosproduto_id;
        //$projetosprodutos = $this->Projetosprodutosentregas->Projetosprodutos->find('list',array('conditions'=>array('Projetosprodutos.id'=>$id),'order' => array('produto' => 'asc')) ,['limit' => 2000]);
        
        $projetosprodutos = $this->Projetosprodutosentregas->Projetosprodutos->find('list',array('conditions'=>array('Projetosprodutos.id'=>$id),'order' => array('produto' => 'asc')));
        
        $sistemas = $this->Projetosprodutosentregas->Sistemas->find('list',array('conditions'=>array('Sistemas.ativo'=>true),'order' => array('codenome' => 'asc')));
        $fases = $this->Projetosprodutosentregas->Fases->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosentregas->Statusfuncionals->find('list', ['limit' => 200]);
        $paretos = $this->Projetosprodutosentregas->Paretos->find('list', ['limit' => 200]);
        $empresas = $this->Projetosprodutosentregas->Empresas->find('list', ['limit' => 200]);
        $ambientes = $this->Projetosprodutosentregas->Ambientes->find('list', ['limit' => 200]);
        $unidademedidas = $this->Projetosprodutosentregas->Unidademedidas->find('list', ['limit' => 200]);
        $entregastipos = $this->Projetosprodutosentregas->Entregastipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosentrega', 'projetosprodutos', 'sistemas', 'statusfuncionals', 'paretos', 'unidademedidas','fases','empresas','ambientes','entregastipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosentrega id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosentrega = $this->Projetosprodutosentregas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosentrega = $this->Projetosprodutosentregas->patchEntity($projetosprodutosentrega, $this->request->getData());
            $projetosprodutoid = $projetosprodutosentrega->projetosproduto_id; 
            if ($this->Projetosprodutosentregas->save($projetosprodutosentrega)) {
                $this->Flash->success(__('The projetosprodutosentrega has been saved.'));

               // return $this->redirect(['action' => 'index']);

                $reg = $id;

                //$caminho = WWW_ROOT.DS.'img'.DS.'galeria'.DS.$reg;
                $caminho = WWW_ROOT.DS.'img'.DS.'entregas'.DS.$reg;


                $dir = new folder();
                if ($dir->create($caminho,true,0755)) {
                    $this->Flash->success('Pasta de Imagem Criada  com sucesso');
                }
                
                return $this->redirect(['controller'=>'Projetosprodutos','action' => 'view',$projetosprodutoid]);
            }
            $this->Flash->error(__('The projetosprodutosentrega could not be saved. Please, try again.'));
        }
      //  $entrega = $projetosprodutosentrega->projetosproduto_id;
        $projetosprodutoid = $projetosprodutosentrega->projetosproduto_id; 
        //$projetosprodutos = $this->Projetosprodutosentregas->Projetosprodutos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Projetosprodutosentregas->Projetosprodutos->find('list',array('conditions'=>array('Projetosprodutos.id'=>$projetosprodutoid),'order' => array('codenome' => 'asc')));
        $sistemas = $this->Projetosprodutosentregas->Sistemas->find('list',array('conditions'=>array('Sistemas.ativo'=>true),'order' => array('codenome' => 'asc')));
        $fases = $this->Projetosprodutosentregas->Fases->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosentregas->Statusfuncionals->find('list', ['limit' => 200]);
        $paretos = $this->Projetosprodutosentregas->Paretos->find('list', ['limit' => 200]);
        $empresas = $this->Projetosprodutosentregas->Empresas->find('list', ['limit' => 200]);
        $ambientes = $this->Projetosprodutosentregas->Ambientes->find('list', ['limit' => 200]);
        $unidademedidas = $this->Projetosprodutosentregas->Unidademedidas->find('list', ['limit' => 200]);
        

        $entregastipos = $this->Projetosprodutosentregas->Entregastipos->find('list', ['limit' => 200]);

        $consultores = $this->Projetosprodutosentregas->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=>1),'order' => array('Consultores.nome' => 'asc')));
        

        $this->set(compact('projetosprodutosentrega', 'projetosprodutos', 'sistemas', 'statusfuncionals', 'paretos', 'unidademedidas','fases','empresas','ambientes','entregastipos','consultores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosentrega id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosentrega = $this->Projetosprodutosentregas->get($id);
        $projetosprodutoid = $projetosprodutosentrega->projetosproduto_id; 

           $reg = $id;

                //$caminho = WWW_ROOT.DS.'img'.DS.'galeria'.DS.$reg;

                $caminho = WWW_ROOT.DS.'img'.DS.'entregas'.DS.$reg;


        if ($this->Projetosprodutosentregas->delete($projetosprodutosentrega)) {
            $this->Flash->success(__('The projetosprodutosentrega has been deleted.'));

                if(is_dir($caminho))
                {

                    $dir = new folder($caminho);
                    if($dir->delete()) {
                        $this->Flash->success('Pasta '.$id.' excluida com sucesso');
                    } else {
                            $this->Flash->error('Não possível excluir a Pasta '.$id);
                    
                    }

                } else {
                        $this->Flash->error('Pasta '.$id.' Não Existe');                        
                }

       
        } else {
            $this->Flash->error(__('The projetosprodutosentrega could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Projetosprodutos','action' => 'view',$projetosprodutoid]);
    }
}
