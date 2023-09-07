<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosentregasflws Controller
 *
 * @property \App\Model\Table\ProjetosprodutosentregasflwsTable $Projetosprodutosentregasflws
 *
 * @method \App\Model\Entity\Projetosprodutosentregasflw[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosentregasflwsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
      /*  $this->paginate = [
            'contain' => ['Projetosprodutosentregas', 'Motivos', 'Statusfuncionals']
        ]; */

         $statusfuncionals = $this->Projetosprodutosentregasflws->Statusfuncionals->find('list',array('order' => array('descricao' => 'asc')), ['limit' => 200]);

         $keyword = $this->request->getQueryParams('descricao');
        
       if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                    'contain' => ['Projetosprodutosentregas', 'Motivos', 'Statusfuncionals'],
                    'conditions' => ['Projetosprodutosentregasflws.descricao LIKE '=> '%'.$keyword['descricao'].'%'],
                    ];
                    $projetosprodutosentregasflws = $this->paginate($this->Projetosprodutosentregasflws);

                    } elseif (!empty($keyword['statusfuncional_id'])) 
                            {
                                 $this->paginate = [
                                    'contain' => ['Projetosprodutosentregas', 'Motivos', 'Statusfuncionals'],
                                    'conditions' => ['Projetosprodutosentregasflws.statusfuncional_id = '=> $keyword['statusfuncional_id']],
                                ];
                                $projetosprodutosentregasflws = $this->paginate($this->Projetosprodutosentregasflws);
                            
                            //ROTINA PARA INCLUIR A REFERENCIA
                    } elseif (!empty($keyword['who'])) 
                            {
                                 $this->paginate = [
                                    'contain' => ['Projetosprodutosentregas', 'Motivos', 'Statusfuncionals'],
                                    'conditions' => ['Projetosprodutosentregasflws.who LIKE '=> '%'.$keyword['who'].'%', ['Projetosprodutosentregasflws.statusfuncional_id NOT IN '=> [5,13,14,15,18,19,20,29]]],
                                    'order' => array('created' => 'desc','who' => 'asc'),
                                ];
                                $projetosprodutosentregasflws = $this->paginate($this->Projetosprodutosentregasflws);
                            } 
                    else 
                            {
                                $this->paginate = [
                                    'contain' => ['Projetosprodutosentregas', 'Motivos', 'Statusfuncionals'],
                                'conditions' => ['Projetosprodutosentregasflws.statusfuncional_id NOT IN '=> [5,13,14,15,18,19,20,29]],
                                'order' => array('Projetosprodutosentregasflws.created' => 'desc','Projetosprodutosentregasflws.who' => 'asc','Projetosprodutosentregasflws.projetosprodutosentrega_id' => 'asc'),
                                ];
                            $projetosprodutosentregasflws = $this->paginate($this->Projetosprodutosentregasflws);
                            }


      //  $projetosprodutosentregasflws = $this->paginate($this->Projetosprodutosentregasflws);

        $this->set(compact('projetosprodutosentregasflws','projetosprodutosentregas', 'motivos', 'statusfuncionals'));
    }

    public function board()
    {
      /*  $this->paginate = [
            'contain' => ['Projetosprodutosentregas', 'Motivos', 'Statusfuncionals']
        ]; */

         $statusfuncionals = $this->Projetosprodutosentregasflws->Statusfuncionals->find('list',array('order' => array('descricao' => 'asc')), ['limit' => 200]);

         $keyword = $this->request->getQueryParams('descricao');
        
       if (!empty($keyword['descricao'])) {
                    $this->paginate = [
                    'contain' => ['Projetosprodutosentregas', 'Motivos', 'Statusfuncionals'],
                    'conditions' => ['Projetosprodutosentregasflws.descricao LIKE '=> '%'.$keyword['descricao'].'%'],
                    ];
                    $projetosprodutosentregasflws = $this->paginate($this->Projetosprodutosentregasflws);

                    } elseif (!empty($keyword['statusfuncional_id'])) 
                            {
                                 $this->paginate = [
                                    'contain' => ['Projetosprodutosentregas', 'Motivos', 'Statusfuncionals'],
                                    'conditions' => ['Projetosprodutosentregasflws.statusfuncional_id = '=> $keyword['statusfuncional_id']],
                                ];
                                $projetosprodutosentregasflws = $this->paginate($this->Projetosprodutosentregasflws);
                            
                            //ROTINA PARA INCLUIR A REFERENCIA
                    } elseif (!empty($keyword['who'])) 
                            {
                                 $this->paginate = [
                                    'contain' => ['Projetosprodutosentregas', 'Motivos', 'Statusfuncionals'],
                                    'conditions' => ['Projetosprodutosentregasflws.who LIKE '=> '%'.$keyword['who'].'%'],
                                'order' => array('who' => 'asc'),
                                ];
                                $projetosprodutosentregasflws = $this->paginate($this->Projetosprodutosentregasflws);
                            } 
                    else 
                            {
                                $this->paginate = [
                                    'contain' => ['Projetosprodutosentregas', 'Motivos', 'Statusfuncionals'],
                                'conditions' => ['Projetosprodutosentregasflws.statusfuncional_id NOT IN '=> [5,13,14,15,18,19,20,29]],
                                'order' => array('who' => 'asc','projetosprodutosentrega_id' => 'asc'),
                                ];
                            $projetosprodutosentregasflws = $this->paginate($this->Projetosprodutosentregasflws);
                            }


      //  $projetosprodutosentregasflws = $this->paginate($this->Projetosprodutosentregasflws);

        $this->set(compact('projetosprodutosentregasflws','projetosprodutosentregas', 'motivos', 'statusfuncionals'));
    }


    /**
     * View method
     *
     * @param string|null $id Projetosprodutosentregasflw id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosentregasflw = $this->Projetosprodutosentregasflws->get($id, [
            'contain' => ['Projetosprodutosentregas', 'Motivos', 'Statusfuncionals']
        ]);

        $this->set('projetosprodutosentregasflw', $projetosprodutosentregasflw);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutosentregasflw = $this->Projetosprodutosentregasflws->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosentregasflw = $this->Projetosprodutosentregasflws->patchEntity($projetosprodutosentregasflw, $this->request->getData());
            if ($this->Projetosprodutosentregasflws->save($projetosprodutosentregasflw)) {
                $this->Flash->success(__('The projetosprodutosentregasflw has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosentregasflw could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosprodutosentregasflws->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $motivos = $this->Projetosprodutosentregasflws->Motivos->find('list',array('order' => array('descricao' => 'asc')));
        $statusfuncionals = $this->Projetosprodutosentregasflws->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosentregasflw', 'projetosprodutosentregas', 'motivos', 'statusfuncionals'));
    }

     public function addid($id = null)
    {
        $projetosprodutosentregasflw = $this->Projetosprodutosentregasflws->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosentregasflw = $this->Projetosprodutosentregasflws->patchEntity($projetosprodutosentregasflw, $this->request->getData());
            $projetosprodutosentregasflw->projetosprodutosentrega_id = $id;
            if ($this->Projetosprodutosentregasflws->save($projetosprodutosentregasflw)) {
                $this->Flash->success(__('The projetosprodutosentregasflw has been saved.'));

                //return $this->redirect(['action' => 'index']);
                  return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosprodutosentregasflw could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosprodutosentregasflws->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('id' => 'asc')));
        $kronusitems = $this->Projetosprodutosentregasflws->Kronusitems->find('list',array('conditions'=>array('kronusitems.projetosprodutosentrega_id'=>$id),'order' => array('ordem' => 'asc')));
        $motivos = $this->Projetosprodutosentregasflws->Motivos->find('list',array('order' => array('descricao' => 'asc')));
        $statusfuncionals = $this->Projetosprodutosentregasflws->Statusfuncionals->find('list', ['limit' => 200]);
        
        $this->set(compact('projetosprodutosentregasflw', 'projetosprodutosentregas', 'motivos', 'statusfuncionals','kronusitems'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosentregasflw id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosentregasflw = $this->Projetosprodutosentregasflws->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosentregasflw = $this->Projetosprodutosentregasflws->patchEntity($projetosprodutosentregasflw, $this->request->getData());
            $entradaid = $projetosprodutosentregasflw->projetosprodutosentrega_id;
            if ($this->Projetosprodutosentregasflws->save($projetosprodutosentregasflw)) {
                $this->Flash->success(__('The projetosprodutosentregasflw has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$entradaid]);
            }
            $this->Flash->error(__('The projetosprodutosentregasflw could not be saved. Please, try again.'));
        }

        $entradaid = $projetosprodutosentregasflw->projetosprodutosentrega_id;       
        $kronusitems = $this->Projetosprodutosentregasflws->Kronusitems->find('list',array('conditions'=>array('kronusitems.projetosprodutosentrega_id'=>$entradaid),'order' => array('ordem' => 'asc')));
        $projetosprodutosentregas = $this->Projetosprodutosentregasflws->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$entradaid),'order' => array('referencia' => 'asc')));
        $motivos = $this->Projetosprodutosentregasflws->Motivos->find('list',array('order' => array('descricao' => 'asc')));
        $statusfuncionals = $this->Projetosprodutosentregasflws->Statusfuncionals->find('list',array('order' => array('descricao' => 'asc')));
        $this->set(compact('projetosprodutosentregasflw', 'projetosprodutosentregas', 'motivos', 'statusfuncionals','kronusitems'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosentregasflw id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosentregasflw = $this->Projetosprodutosentregasflws->get($id);
        $entradaid = $projetosprodutosentregasflw->projetosprodutosentrega_id;
        if ($this->Projetosprodutosentregasflws->delete($projetosprodutosentregasflw)) {
            $this->Flash->success(__('The projetosprodutosentregasflw has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosentregasflw could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$entradaid]);
    }
}
