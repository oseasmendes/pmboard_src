<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetossprintsdailys Controller
 *
 * @property \App\Model\Table\ProjetossprintsdailysTable $Projetossprintsdailys
 *
 * @method \App\Model\Entity\Projetossprintsdaily[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetossprintsdailysController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

           $projetossprints = $this->Projetossprintsdailys->Projetossprints->find('list', ['limit' => 200]);
           $projetossprintsdailys = $this->paginate($this->Projetossprintsdailys);
           $consultores = $this->Projetossprintsdailys->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=> true),'order' => array('nome' => 'asc')) , ['limit' => 2000]); 


           $dataatual = date('Y-m-d',strtotime("-10 days"));

           $keyword = $this->request->getQueryParams();

            if (!empty($keyword['projetossprint_id'])) { 

                 $this->paginate = [
                'contain' => ['Projetossprints', 'Consultores', 'Projetosprodutosentregas', 'Agendas'],

                                'conditions' => ['Projetossprintsdailys.projetossprint_id = '=> $keyword['projetossprint_id']],
                                 /*'limit' => 100, */             
                                  'order' => [
                                'Projetossprintsdailys.created' => 'desc','Projetossprintsdailys.id' => 'asc'
                                ]
                ];

                $projetossprintsdailys = $this->paginate($this->Projetossprintsdailys);


            } elseif (!empty($keyword['consultore_id'])) {

                 $this->paginate = [
                'contain' => ['Projetossprints', 'Consultores', 'Projetosprodutosentregas', 'Agendas'],

                                'conditions' => ['Projetossprintsdailys.consultore_id = '=> $keyword['consultore_id'],'Projetossprintsdailys.created > '=> $dataatual],
                                 /*'limit' => 100, */             
                                  'order' => [
                                'Projetossprintsdailys.created' => 'desc','Projetossprintsdailys.id' => 'asc'
                                ]
                ];

                $projetossprintsdailys = $this->paginate($this->Projetossprintsdailys);

            } elseif (!empty($keyword['comentario'])) {

            $this->paginate = [
                'contain' => ['Projetossprints', 'Consultores', 'Projetosprodutosentregas', 'Agendas'],

                                'conditions' => ['Projetossprintsdailys.comentario LIKE '=> '%'.$keyword['comentario'].'%'],                                 
                                'order' => [
                                            'Projetossprintsdailys.created' => 'desc','Projetossprintsdailys.id' => 'asc'
                            ]
            ];

                $projetossprintsdailys = $this->paginate($this->Projetossprintsdailys);

            } else {   

                 $this->paginate = [
                'contain' => ['Projetossprints', 'Consultores', 'Projetosprodutosentregas', 'Agendas'],

                                'conditions' => ['Projetossprintsdailys.created > '=> $dataatual],
                                 /*'limit' => 100, */             
                                  'order' => [
                                'Projetossprintsdailys.created' => 'desc','Projetossprintsdailys.id' => 'asc'
                                ]
                ];

                $projetossprintsdailys = $this->paginate($this->Projetossprintsdailys);
            }

        $this->set(compact('projetossprintsdailys','consultores','projetossprints'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetossprintsdaily id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetossprintsdaily = $this->Projetossprintsdailys->get($id, [
            'contain' => ['Projetossprints', 'Consultores', 'Projetosprodutosentregas', 'Agendas','Projetossprintsdailysreferences']
        ]);

        $this->set('projetossprintsdaily', $projetossprintsdaily);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetossprintsdaily = $this->Projetossprintsdailys->newEntity();
        if ($this->request->is('post')) {
            $projetossprintsdaily = $this->Projetossprintsdailys->patchEntity($projetossprintsdaily, $this->request->getData());
            $projetossprintsdaily->projeto_id = $id;
            if ($this->Projetossprintsdailys->save($projetossprintsdaily)) {
                $this->Flash->success(__('The projetossprintsdaily has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetossprints','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetossprintsdaily could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Projetossprintsdailys->Projetossprints->find('list', ['limit' => 200]);
       // $consultores = $this->Projetossprintsdailys->Consultores->find('list', ['limit' => 200]);
       $consultores = $this->Projetossprintsdailys->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=> true),'order' => array('nome' => 'asc')) , ['limit' => 2000]); 
       $projetosprodutosentregas = $this->Projetossprintsdailys->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $agendas = $this->Projetossprintsdailys->Agendas->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsdaily', 'projetossprints', 'consultores', 'projetosprodutosentregas', 'agendas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetossprintsdaily id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetossprintsdaily = $this->Projetossprintsdailys->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetossprintsdaily = $this->Projetossprintsdailys->patchEntity($projetossprintsdaily, $this->request->getData());
            if ($this->Projetossprintsdailys->save($projetossprintsdaily)) {
                $this->Flash->success(__('The projetossprintsdaily has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetossprintsdaily could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Projetossprintsdailys->Projetossprints->find('list', ['limit' => 200]);
        $consultores = $this->Projetossprintsdailys->Consultores->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetossprintsdailys->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $agendas = $this->Projetossprintsdailys->Agendas->find('list', ['limit' => 200]);
        $this->set(compact('projetossprintsdaily', 'projetossprints', 'consultores', 'projetosprodutosentregas', 'agendas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetossprintsdaily id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetossprintsdaily = $this->Projetossprintsdailys->get($id);
        if ($this->Projetossprintsdailys->delete($projetossprintsdaily)) {
            $this->Flash->success(__('The projetossprintsdaily has been deleted.'));
        } else {
            $this->Flash->error(__('The projetossprintsdaily could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
