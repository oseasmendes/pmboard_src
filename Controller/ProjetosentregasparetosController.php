<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregasparetos Controller
 *
 * @property \App\Model\Table\ProjetosentregasparetosTable $Projetosentregasparetos
 *
 * @method \App\Model\Entity\Projetosentregaspareto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasparetosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosentregas', 'Paretos', 'Motivos', 'Responsabilidades']
        ];
        $projetosentregasparetos = $this->paginate($this->Projetosentregasparetos);

        $this->set(compact('projetosentregasparetos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregaspareto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregaspareto = $this->Projetosentregasparetos->get($id, [
            'contain' => ['Projetosprodutosentregas', 'Paretos', 'Motivos', 'Responsabilidades','Entregastipos']
        ]);

        $this->set('projetosentregaspareto', $projetosentregaspareto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosentregaspareto = $this->Projetosentregasparetos->newEntity();
        
        if ($this->request->is('post')) {
            $projetosentregaspareto = $this->Projetosentregasparetos->patchEntity($projetosentregaspareto, $this->request->getData());
            $projetosentregaspareto->projetosprodutosentrega_id = $id;    
            if ($this->Projetosentregasparetos->save($projetosentregaspareto)) {
                $this->Flash->success(__('The projetosentregaspareto has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosentregaspareto could not be saved. Please, try again.'));
        }
        //$projetosprodutosentregas = $this->Projetosentregasparetos->Projetosprodutosentregas->find('list');

        $projetosprodutosentregas = $this->Projetosentregasparetos->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')));


 

        $paretos = $this->Projetosentregasparetos->Paretos->find('list', ['limit' => 200]);

        /*$paretos = $this->Projetosentregasparetos->Paretos->find('list',
        array('conditions'=>array('Paretos.ativo'=>1),
                        //'fields'=>'Paretos.Kanban',
                        'order'=>'Paretos.Kanban ASC',
                        'limit'=>20,
                        'recursive'=>0)); */


        $motivos = $this->Projetosentregasparetos->Motivos->find('list', ['limit' => 200]);
        $entregastipos = $this->Projetosentregasparetos->Entregastipos->find('list', ['limit' => 200]);
        $responsabilidades = $this->Projetosentregasparetos->Responsabilidades->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregaspareto', 'projetosprodutosentregas', 'paretos', 'motivos', 'responsabilidades','Entregastipos','statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregaspareto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregaspareto = $this->Projetosentregasparetos->get($id, [
            'contain' => []
        ]);

        $entregasid = $projetosentregaspareto->projetosprodutosentrega_id;
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregaspareto = $this->Projetosentregasparetos->patchEntity($projetosentregaspareto, $this->request->getData());
            
            if ($this->Projetosentregasparetos->save($projetosentregaspareto)) {
                $this->Flash->success(__('The projetosentregaspareto has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$entregasid]);
            }
            $this->Flash->error(__('The projetosentregaspareto could not be saved. Please, try again.'));
        }
        //$projetosprodutosentregas = $this->Projetosentregasparetos->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosentregasparetos->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$entregasid),'order' => array('Descricao' => 'asc')));
       // $paretos = $this->Projetosentregasparetos->Paretos->find('list', ['limit' => 200]);

         $paretos = $this->Projetosentregasparetos->Paretos->find('list',
        array('conditions'=>array('Paretos.ativo'=>1),
                        //'fields'=>'Paretos.Kanban',
                        'order'=>'Paretos.Kanban ASC',
                        'limit'=>20,
                        'recursive'=>0));

        
        $motivos = $this->Projetosentregasparetos->Motivos->find('list', ['limit' => 200]);
        $responsabilidades = $this->Projetosentregasparetos->Responsabilidades->find('list', ['limit' => 200]);
         $entregastipos = $this->Projetosentregasparetos->Entregastipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregaspareto', 'projetosprodutosentregas', 'paretos', 'motivos', 'responsabilidades','entregastipos','statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregaspareto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregaspareto = $this->Projetosentregasparetos->get($id);
        $projetosprodutosentregasid = $projetosentregaspareto->projetosprodutosentrega_id;
        if ($this->Projetosentregasparetos->delete($projetosentregaspareto)) {
            $this->Flash->success(__('The projetosentregaspareto has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosentregaspareto could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
          return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$projetosprodutosentregasid]);
    }
}
