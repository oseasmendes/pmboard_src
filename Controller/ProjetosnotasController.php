<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosnotas Controller
 *
 * @property \App\Model\Table\ProjetosnotasTable $Projetosnotas
 *
 * @method \App\Model\Entity\Projetosnota[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosnotasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $projetos = $this->Projetosnotas->Projetos->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 200]);        
        $keyword = $this->request->getQueryParams('descricao');

         if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                     'contain' => ['Notatipos', 'Projetos'],
                     'conditions' => ['Projetosnotas.descricao LIKE '=> '%'.$keyword['descricao'].'%'],             
                      'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Projetosnotas.descricao' => 'asc'
                        ]            
                    ];
                    $projetosnotas = $this->paginate($this->Projetosnotas);
                    } elseif (!empty($keyword['projeto_id'])) 
                            {
                                $this->paginate = [
                                ['Notatipos', 'Projetos'],
                                'conditions' => ['projeto_id = '=> $keyword['projeto_id']],             
                                'order' => [
                                //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                                 'Projetosnotas.descricao' => 'asc'
                                    ]            
                                ];
                                $projetosnotas = $this->paginate($this->Projetosnotas);
                            } else 
                            {
                                $this->paginate = [
                                 'contain' => ['Notatipos', 'Projetos'],
                                 /*'limit' => 100, */             
                                  'order' => [
                                    'Projetosnotas.created' => 'desc']
                                //'Projetosnotas.descricao' => 'asc']

                            ];
                            $projetosnotas = $this->paginate($this->Projetosnotas);
                            }



        /* $this->paginate = [
            'contain' => ['Notatipos', 'Projetos'],
             'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Projetosnotas.created' => 'desc'
                        ]    
        ];
        $projetosnotas = $this->paginate($this->Projetosnotas); */

        $this->set(compact('projetosnotas','notatipos','projetos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosnota id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosnota = $this->Projetosnotas->get($id, [
            'contain' => ['Notatipos', 'Projetos']
        ]);

        $this->set('projetosnota', $projetosnota);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */

    public function add()
        {
            $projetosnota = $this->Projetosnotas->newEntity();
            if ($this->request->is('post')) {
                $projetosnota = $this->Projetosnotas->patchEntity($projetosnota, $this->request->getData());
                
                if ($this->Projetosnotas->save($projetosnota)) {
                    $this->Flash->success(__('The projetosnota has been saved.'));

                    return $this->redirect(['controller' => 'Projetos','action' => 'index']);
                    //return $this->redirect(['controller' => 'Projetos','action' => 'view',$id]);

                }
                $this->Flash->error(__('The projetosnota could not be saved. Please, try again.'));
            }
            $notatipos = $this->Projetosnotas->Notatipos->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 200]);
            $projetos = $this->Projetosnotas->Projetos->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 200]);
            $this->set(compact('projetosnota', 'notatipos', 'projetos'));
        }



    public function addid($id = null)
    {
        $projetosnota = $this->Projetosnotas->newEntity();
        if ($this->request->is('post')) {
            $projetosnota = $this->Projetosnotas->patchEntity($projetosnota, $this->request->getData());
            $projetosnota->projeto_id = $id;
           
            if ($this->Projetosnotas->save($projetosnota)) {
                $this->Flash->success(__('The projetosnota has been saved.'));

                // return $this->redirect(['controller' => 'Projetos','action' => 'index']);
                return $this->redirect(['controller' => 'Projetos','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetosnota could not be saved. Please, try again.'));
        }
        $notatipos = $this->Projetosnotas->Notatipos->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 200]);
        $projetos = $this->Projetosnotas->Projetos->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 200]);
        $this->set(compact('projetosnota', 'notatipos', 'projetos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosnota id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosnota = $this->Projetosnotas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosnota = $this->Projetosnotas->patchEntity($projetosnota, $this->request->getData()); 
            $projetoid = $projetosnota->projeto_id;           
            if ($this->Projetosnotas->save($projetosnota)) {
                $this->Flash->success(__('The projetosnota has been saved.'));

                //return $this->redirect(['controller' => 'Projetos','action' => 'index']);
                return $this->redirect(['controller' => 'Projetosnotas','action' => 'board']);
                
                //return $this->redirect(['controller' => 'Projetos','action' => 'view',$projetoid]);
            }
            $this->Flash->error(__('The projetosnota could not be saved. Please, try again.'));
        }
        $notatipos = $this->Projetosnotas->Notatipos->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 200]);
        $projetos = $this->Projetosnotas->Projetos->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 200]);
        $this->set(compact('projetosnota', 'notatipos', 'projetos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosnota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosnota = $this->Projetosnotas->get($id);
        $projetoid = $projetosnota->projeto_id;
        if ($this->Projetosnotas->delete($projetosnota)) {
            $this->Flash->success(__('The projetosnota has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosnota could not be deleted. Please, try again.'));
        }

        
         return $this->redirect(['controller' => 'Projetos','action' => 'view',$projetoid]);
    }

    public function board()
    {
        $projetos = $this->Projetosnotas->Projetos->find('list',array('order' => array('descricao' => 'asc'))  ,['limit' => 200]);        
        $keyword = $this->request->getQueryParams('descricao');

         if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                     'contain' => ['Notatipos', 'Projetos'],
                     'conditions' => ['Projetosnotas.descricao LIKE '=> '%'.$keyword['descricao'].'%'],             
                      'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Projetosnotas.descricao' => 'asc'
                        ]            
                    ];
                    $projetosnotas = $this->paginate($this->Projetosnotas);
                    } elseif (!empty($keyword['projeto_id'])) 
                            {
                                $this->paginate = [
                                'contain' => ['Notatipos', 'Projetos'],
                                'conditions' => ['projeto_id = '=> $keyword['projeto_id']],             
                                'order' => [
                                //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                                 'Projetosnotas.descricao' => 'asc'
                                    ]            
                                ];
                                $projetosnotas = $this->paginate($this->Projetosnotas);
                            } else 
                            {
                                $this->paginate = [
                                 'contain' => ['Notatipos', 'Projetos'],
                                 /*'limit' => 100, */   
                                  'conditions' => ['Projetosnotas.ativo LIKE '=> 'A'],              
                                  'order' => [
                                    'Projetosnotas.created' => 'desc']
                                //'Projetosnotas.descricao' => 'asc']

                            ];
                            $projetosnotas = $this->paginate($this->Projetosnotas);
                            }



        /* $this->paginate = [
            'contain' => ['Notatipos', 'Projetos'],
             'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Projetosnotas.created' => 'desc'
                        ]    
        ];
        $projetosnotas = $this->paginate($this->Projetosnotas); */

        $this->set(compact('projetosnotas','notatipos','projetos'));
    }
}
