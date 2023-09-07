<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;

use Cake\View\CellTrait;

/* use MailerAwareTrait; */

/**
 * Fivewthreehs Controller
 *
 * @property \App\Model\Table\FivewthreehsTable $Fivewthreehs
 *
 * @method \App\Model\Entity\Fivewthreeh[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FivewthreehsController extends AppController
{

     use CellTrait;

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
       public function index()
    {
        $statusfuncionals = $this->Fivewthreehs->Statusfuncionals->find('list', ['limit' => 200]);        
        $keyword = $this->request->getQueryParams('descricao');
        
       if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                     'contain' => ['Programas', 'Projetos', 'Projetosprodutos', 'Participantes', 'Statusfuncionals', 'Consultores'],
                     'conditions' => ['Fivewthreehs.description LIKE '=> '%'.$keyword['descricao'].'%'],             
                      'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Fivewthreehs.descricao' => 'asc'
                        ]            
                    ];
                    $fivewthreehs = $this->paginate($this->Fivewthreehs);
                    } elseif (!empty($keyword['statusfuncional_id'])) 
                            {
                                $this->paginate = [
                                'contain' => ['Programas', 'Projetos', 'Projetosprodutos', 'Participantes', 'Statusfuncionals', 'Consultores'],
                                'conditions' => ['statusfuncional_id = '=> $keyword['statusfuncional_id']],             
                                'order' => [
                                //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                                 'Fivewthreehs.id' => 'asc'
                                    ]            
                                ];
                                $fivewthreehs = $this->paginate($this->Fivewthreehs);
                            }
                         
                     elseif (!empty($keyword['id'])) 
                        {
                            $this->paginate = [
                            'contain' => ['Programas', 'Projetos', 'Projetosprodutos', 'Participantes', 'Statusfuncionals', 'Consultores'],
                            'conditions' => ['Fivewthreehs.id = '=> $keyword['id']],             
                            'order' => [
                            //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                             'Fivewthreehs.id' => 'asc'
                                ]            
                            ];
                            $fivewthreehs = $this->paginate($this->Fivewthreehs);
                        }  
                                              
                            else 
                            {

                                 /*                           => [
                                    'sort' => ['Projetosprodutosentregas.prioridade' => 'ASC'],
                                    'conditions' => ['Projetosprodutosentregas.pareto_id NOT IN ' => [3,30,27]],
                                ]*/

                                $this->paginate = [
                                 'contain' => ['Programas', 'Projetos' =>[
                                    'conditions' => ['Projetos.ativo = ' => true]], 'Projetosprodutos', 'Participantes', 'Statusfuncionals', 'Consultores'],

                                'conditions' => ['Fivewthreehs.statusfuncional_id = '=> 11],
                                 /*'limit' => 100, */             
                                  'order' => [
                                    'Fivewthreehs.projeto_id' => 'asc', 'Fivewthreehs.created' => 'asc']

                            ];
                            $fivewthreehs = $this->paginate($this->Fivewthreehs);
                            }

        $this->set(compact('fivewthreehs','statusfuncionals'));
    }


    /**
     * View method
     *
     * @param string|null $id Fivewthreeh id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fivewthreeh = $this->Fivewthreehs->get($id, [
            'contain' => ['Programas', 'Projetos', 'Projetosprodutos', 'Participantes', 'Statusfuncionals', 'Consultores', 'Atas', 'Empresas', 'Atasdetalhes', 'Fivewthreehsparetos', 'Projetosprodutosentregasdiarios','Eventos']
        ]);

        $this->set('fivewthreeh', $fivewthreeh);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fivewthreeh = $this->Fivewthreehs->newEntity();
        if ($this->request->is('post')) {
            $fivewthreeh = $this->Fivewthreehs->patchEntity($fivewthreeh, $this->request->getData());
            if ($this->Fivewthreehs->save($fivewthreeh)) {
                $this->Flash->success(__('The fivewthreeh has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fivewthreeh could not be saved. Please, try again.'));
        }
        $programas = $this->Fivewthreehs->Programas->find('list', ['limit' => 200]);
        $projetos = $this->Fivewthreehs->Projetos->find('list',array('conditions'=>array('arquivo = '=>false,'propostatecnica = '=>true,'statusfuncional_id NOT IN '=> [1,2,3,4,6,8,9,10,11,13,14,15,18,19]),'order' => array('Projetos.previstodatafim' => 'asc')) , ['limit' => 2000]); 
        $projetosprodutos = $this->Fivewthreehs->Projetosprodutos->find('list',array('conditions'=>array('ativo = '=>true,'statusfuncional_id NOT IN '=> [1,2,3,4,6,8,9,10,11,13,14,15,18,19]),'order' => array('Projetosprodutos.projeto_id' => 'asc','Projetosprodutos.prioridade' => 'asc')) , ['limit' => 2000]);
        $participantes = $this->Fivewthreehs->Participantes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Fivewthreehs->Statusfuncionals->find('list', ['limit' => 200]);
        //$consultores = $this->Fivewthreehs->Consultores->find('list', ['limit' => 200]);
        $consultores = $this->Fivewthreehs->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=> true),'order' => array('nome' => 'asc')) , ['limit' => 2000]); 
        $atas = $this->Fivewthreehs->Atas->find('list', ['limit' => 200]);
        $empresas = $this->Fivewthreehs->Empresas->find('list', ['limit' => 200]);
        $fivewthreehstypes = $this->Fivewthreehs->Fivewthreehstypes->find('list', ['limit' => 200]);
        $eventos = $this->Fivewthreehs->Eventos->find('list', ['limit' => 200]);
        $sistemas = $this->Fivewthreehs->Sistemas->find('list',array('conditions'=>array('Sistemas.statusfuncional_id'=> '5'),'order' => array('Codenome' => 'asc')),['limit' => 200]);

        $this->set(compact('fivewthreeh', 'programas','sistemas', 'projetos', 'projetosprodutos', 'participantes', 'statusfuncionals', 'consultores','empresas','fivewthreehstypes','eventos'));
    }

     public function addid($id = null)
    {
        $fivewthreeh = $this->Fivewthreehs->newEntity();
        if ($this->request->is('post')) {
            $fivewthreeh = $this->Fivewthreehs->patchEntity($fivewthreeh, $this->request->getData());
            $fivewthreeh->projeto_id = $id;
            if ($this->Fivewthreehs->save($fivewthreeh)) {
                $this->Flash->success(__('The fivewthreeh has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The fivewthreeh could not be saved. Please, try again.'));
        }
        $programas = $this->Fivewthreehs->Programas->find('list', ['limit' => 200]);
        //$projetos = $this->Fivewthreehs->Projetos->find('list',array('order' => array('descricao' => 'asc')) ,['limit' => 200]);

        $projetos = $this->Fivewthreehs->Projetos->find('list',array('conditions'=>array('Projetos.id'=>$id),'order' => array('Codenome' => 'asc')),['limit' => 2000]);

        //$projetosprodutos = $this->Fivewthreehs->Projetosprodutos->find('list',array('order' => array('descricao' => 'asc')) ,['limit' => 200]);

        $projetosprodutos = $this->Fivewthreehs->Projetosprodutos->find('list',array('conditions'=>array('Projetosprodutos.projeto_id'=>$id),'order' => array('Codenome' => 'asc')),['limit' => 2000]);
  


        $participantes = $this->Fivewthreehs->Participantes->find('list',array('order' => array('nome' => 'asc')),['limit' => 200]);
        $empresas = $this->Fivewthreehs->Empresas->find('list',['limit' => 200]);
        $statusfuncionals = $this->Fivewthreehs->Statusfuncionals->find('list', ['limit' => 200]);
       // $consultores = $this->Fivewthreehs->Consultores->find('list',array('order' => array('nome' => 'asc')) ,['limit' => 200]);
       $consultores = $this->Fivewthreehs->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=> true),'order' => array('nome' => 'asc')) , ['limit' => 2000]); 
       //$fivewthreehstypes = $this->Fivewthreehs->Fivewthreehstypes->find('list', ['limit' => 200]);
       $fivewthreehstypes = $this->Fivewthreehs->Fivewthreehstypes->find('list',array('order' => array('Fivewthreehstypes.descricao' => 'asc')), ['limit' => 200]);
       $eventos = $this->Fivewthreehs->Eventos->find('list', ['limit' => 200]);
        $sistemas = $this->Fivewthreehs->Sistemas->find('list',array('conditions'=>array('Sistemas.statusfuncional_id'=> '5'),'order' => array('Codenome' => 'asc')),['limit' => 200]);
        $this->set(compact('fivewthreeh', 'programas','sistemas', 'projetos', 'projetosprodutos', 'participantes', 'statusfuncionals', 'consultores','empresas','fivewthreehstypes','eventos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fivewthreeh id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fivewthreeh = $this->Fivewthreehs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fivewthreeh = $this->Fivewthreehs->patchEntity($fivewthreeh, $this->request->getData());
            $projetoid = $fivewthreeh->projeto_id; 
            if ($this->Fivewthreehs->save($fivewthreeh)) {
                $this->Flash->success(__('The fivewthreeh has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetos','action' => 'view',$projetoid]);
            }
            $this->Flash->error(__('The fivewthreeh could not be saved. Please, try again.'));
        }
        $programas = $this->Fivewthreehs->Programas->find('list', ['limit' => 200]);
        $projetos = $this->Fivewthreehs->Projetos->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Fivewthreehs->Projetosprodutos->find('list', ['limit' => 200]);
        $participantes = $this->Fivewthreehs->Participantes->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Fivewthreehs->Statusfuncionals->find('list', ['limit' => 200]);
      //  $consultores = $this->Fivewthreehs->Consultores->find('list', ['limit' => 200]);
        $consultores = $this->Fivewthreehs->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=> true),'order' => array('nome' => 'asc')) , ['limit' => 2000]); 
        $atas = $this->Fivewthreehs->Atas->find('list', ['limit' => 200]);
        $empresas = $this->Fivewthreehs->Empresas->find('list', ['limit' => 200]);
        $fivewthreehstypes = $this->Fivewthreehs->Fivewthreehstypes->find('list',array('order' => array('Fivewthreehstypes.descricao' => 'asc')), ['limit' => 200]);
        $eventos = $this->Fivewthreehs->Eventos->find('list', ['limit' => 200]);
        //$sistemas = $this->Fivewthreehs->Sistemas->find('list', ['limit' => 200]);
        $sistemas = $this->Fivewthreehs->Sistemas->find('list',array('conditions'=>array('Sistemas.statusfuncional_id'=> '5'),'order' => array('Codenome' => 'asc')),['limit' => 200]);
        $this->set(compact('fivewthreeh', 'programas','sistemas', 'projetos', 'projetosprodutos', 'participantes', 'statusfuncionals', 'consultores', 'atas', 'empresas','fivewthreehstypes','eventos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fivewthreeh id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fivewthreeh = $this->Fivewthreehs->get($id);
        if ($this->Fivewthreehs->delete($fivewthreeh)) {
            $this->Flash->success(__('The fivewthreeh has been deleted.'));
        } else {
            $this->Flash->error(__('The fivewthreeh could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
