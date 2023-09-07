<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosapontamentos Controller
 *
 * @property \App\Model\Table\ProjetosapontamentosTable $Projetosapontamentos
 *
 * @method \App\Model\Entity\Projetosapontamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosapontamentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores', 
                        'Projetosprodutosentregas', 
                        'Statusfuncionals'],
            'conditions' => ['Projetosapontamentos.statusfuncional_id != '=> 14],
                        'order' => array('Projetosapontamentos.data' => 'desc'),
        ];
        $projetosapontamentos = $this->paginate($this->Projetosapontamentos);

        $this->set(compact('projetosapontamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosapontamento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosapontamento = $this->Projetosapontamentos->get($id, [
            'contain' => ['Consultores', 'Projetosprodutosentregas', 'Statusfuncionals']
        ]);

        $this->set('projetosapontamento', $projetosapontamento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosapontamento = $this->Projetosapontamentos->newEntity();
        if ($this->request->is('post')) {
            $projetosapontamento = $this->Projetosapontamentos->patchEntity($projetosapontamento, $this->request->getData());
            
            $projetosapontamento->projetosprodutosentrega_id = $id;

            if ($this->Projetosapontamentos->save($projetosapontamento)) {
                $this->Flash->success(__('The projetosapontamento has been saved.'));

                //return $this->redirect(['action' => 'index']);

                  return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosapontamento could not be saved. Please, try again.'));
        }
        $consultores = $this->Projetosapontamentos->Consultores->find('list',array('conditions'=>array('Consultores.engajado'=>true),'order' => array('nome' => 'asc')), ['limit' => 200]);

        $statusfuncionals = $this->Projetosapontamentos->Statusfuncionals->find('list', ['limit' => 200]);

      $projetosprodutosentregas = $this->Projetosapontamentos->Projetosprodutosentregas->find('list', array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')), ['limit' => 2000]);


        $this->set(compact('projetosapontamento', 'consultores', 'projetosprodutosentregas', 'statusfuncionals'));

  
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosapontamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosapontamento = $this->Projetosapontamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosapontamento = $this->Projetosapontamentos->patchEntity($projetosapontamento, $this->request->getData());
            
            

            if ($this->Projetosapontamentos->save($projetosapontamento)) {

                $rt =  $projetosapontamento->projetosprodutosentrega_id;
                $this->Flash->success(__('The projetosapontamento has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$rt]);
            }
            $this->Flash->error(__('The projetosapontamento could not be saved. Please, try again.'));
        }
        $consultores = $this->Projetosapontamentos->Consultores->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosapontamentos->Projetosprodutosentregas->find('list', ['limit' => 20000]);

    //     $projetosprodutosentregas = $this->Projetosapontamentos->Projetosprodutosentregas->find('list', array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')), ['limit' => 2000]);


        $statusfuncionals = $this->Projetosapontamentos->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosapontamento', 'consultores', 'projetosprodutosentregas', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosapontamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosapontamento = $this->Projetosapontamentos->get($id);

        $ret =  $projetosapontamento->projetosprodutosentrega_id;

        if ($this->Projetosapontamentos->delete($projetosapontamento)) {            
            $this->Flash->success(__('The projetosapontamento has been deleted.'));

        } else {
            $this->Flash->error(__('The projetosapontamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$ret]);
        //return $this->redirect(['action' => 'index']);
    }
}
