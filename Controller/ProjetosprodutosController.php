<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;

use Cake\View\CellTrait;
/**
 * Projetosprodutos Controller
 *
 * @property \App\Model\Table\ProjetosprodutosTable $Projetosprodutos
 *
 * @method \App\Model\Entity\Projetosproduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosController extends AppController
{

    use CellTrait;
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
       /* $this->paginate = [
            'contain' => ['Projetos', 'Statusfuncionals']
        ];
        $projetosprodutos = $this->paginate($this->Projetosprodutos);

        $this->set(compact('projetosprodutos')); */

        $statusfuncionals = $this->Projetosprodutos->Statusfuncionals->find('list', ['limit' => 200]);        
        $keyword = $this->request->getQueryParams('descricao');
        
       if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                     'contain' => ['Frentes','Statusfuncionals','Projetos'],
                     'conditions' => ['Projetosprodutos.descricao LIKE '=> '%'.$keyword['descricao'].'%'],             
                      'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Projetosprodutos.descricao' => 'asc'
                        ]            
                    ];
                    $projetosprodutos = $this->paginate($this->Projetosprodutos);
                    } elseif (!empty($keyword['statusfuncional_id'])) 
                            {
                                $this->paginate = [
                                'contain' => ['Frentes','Statusfuncionals','Projetos'],
                                'conditions' => ['statusfuncional_id = '=> $keyword['statusfuncional_id']],             
                                'order' => [
                                //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                                 'Projetosprodutos.descricao' => 'asc'
                                    ]            
                                ];
                                $projetosprodutos = $this->paginate($this->Projetosprodutos);
                            } else 
                            {
                                $this->paginate = [
                                 'contain' => ['Frentes','Statusfuncionals','Projetos'],
                                 /*'limit' => 100, */    
                                 'conditions' => ['Projetosprodutos.Statusfuncional_id <> '=> 14],         
                                  'order' => [
                                    'Projetosprodutos.projeto_id' => 'asc','Projetosprodutos.descricao' => 'asc']

                            ];
                            $projetosprodutos = $this->paginate($this->Projetosprodutos);
                            }

        $this->set(compact('projetosprodutos','statusfuncionals','projetos','Frentes','Participantes'));




    }
    
    public function view($id = null)
    {
        $projetosproduto = $this->Projetosprodutos->get($id, [
            'contain' => ['Projetos', 
                        'Projetosprodutosreqs',
                        'Statusfuncionals',
                        'Agendas'=> [
                                        'sort' => ['Agendas.dataagenda' => 'ASC','Agendas.horainicio' => 'ASC'], 
                                        'conditions' => ['Agendas.dataagenda >=' => date("Y-m-d", mktime(0, 0, 0, date("m") , date("d")-7,date("Y"))),
                                                        'Agendas.tipoagenda !=' => 'SCRUM'],], 
                        'Projetosprodutosentregas'=> [
                                        'sort' => ['Projetosprodutosentregas.frente_id' => 'ASC','Projetosprodutosentregas.comentario' => 'desc','Projetosprodutosentregas.prioridade' => 'ASC'],
                                        'conditions' => ['Projetosprodutosentregas.comentario NOT IN ' => ['Implementado em Produção','Cancelado','Hold IT','Hold Area','Resolved','Closed','Não Iniciado']], ], //47 - Closed
                        'Projetosprodutosfeedbacks',
                        'Projetosprodutosimgs', 
                        'Projetosprodutosnotas',
                        'Projetosprodutosparetos',
                        'Projetosprodutosriscos',
                        'Participantes',
                        'Frentes',
                        'Agendas',
                        'Projetosprodutosreqs',
                        'Projetosoutofscopes',
                        'Projetosprodutosalocs']]);

        $this->set('projetosproduto', $projetosproduto);
    }
    
    public function add($id = null)
    {
        $projetosprodutos = $this->Projetosprodutos->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutos = $this->Projetosprodutos->patchEntity($projetosprodutos, $this->request->getData());
            $projetosprodutos->projeto_id = $id;
            if ($this->Projetosprodutos->save($projetosprodutos)) {
                $this->Flash->success(__('The projetosproduto has been saved.'));

                //return $this->redirect(['controller'=>'Projetos','action' => 'index']);
                return $this->redirect(['controller'=>'Projetos','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetosproduto could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosprodutos->Projetos->find('list', ['limit' => 1000]);
        $frentes = $this->Projetosprodutos->Frentes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutos->Statusfuncionals->find('list', ['limit' => 200]);
        $participantes = $this->Projetosprodutos->Participantes->find('list',array('order' => array('nome' => 'asc')),['limit' => 1200]);
        $fupqueues = $this->Projetosprodutos->Fupqueues->find('list',array('order' => array('descricao' => 'asc')),['limit' => 1200]);
        $this->set(compact('projetosprodutos', 'projetos', 'statusfuncionals','frentes','fupqueues','participantes'));
    }

    public function edit($id = null)
    {
        $projetosproduto = $this->Projetosprodutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosproduto = $this->Projetosprodutos->patchEntity($projetosproduto, $this->request->getData());
            $projetoid = $projetosproduto->projeto_id;
            if ($this->Projetosprodutos->save($projetosproduto)) {
                $this->Flash->success(__('The projetosproduto has been saved.'));

                  $reg = $id;

                $caminho = WWW_ROOT.DS.'img'.DS.'projetosprodutos'.DS.$reg;

                $dir = new folder();
                if ($dir->create($caminho,true,0755)) {
                    $this->Flash->success('Pasta de Imagem Criada  com sucesso');
                }


                //return $this->redirect(['controller'=>'Projetos','action' => 'index']);
                return $this->redirect(['controller'=>'Projetos','action' => 'view',$projetoid]);
            }
            $this->Flash->error(__('The projetosproduto could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosprodutos->Projetos->find('list', ['limit' => 1200]);
        $frentes = $this->Projetosprodutos->Frentes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutos->Statusfuncionals->find('list', ['limit' => 200]);
        $participantes = $this->Projetosprodutos->Participantes->find('list',array('order' => array('nome' => 'asc')),['limit' => 1200]);
        $fupqueues = $this->Projetosprodutos->Fupqueues->find('list',array('order' => array('descricao' => 'asc')),['limit' => 1200]);
        $this->set(compact('projetosproduto', 'projetos', 'statusfuncionals','frentes','participantes','fupqueues'));
    }
   
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosproduto = $this->Projetosprodutos->get($id);
        $projetoid = $projetosproduto->projeto_id;
        if ($this->Projetosprodutos->delete($projetosproduto)) {
            $this->Flash->success(__('The projetosproduto has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosproduto could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Projetos','action' => 'view',$projetoid]);
    }
}
