<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosriscoseventos Controller
 *
 * @property \App\Model\Table\ProjetosprodutosriscoseventosTable $Projetosprodutosriscoseventos
 *
 * @method \App\Model\Entity\Projetosprodutosriscosevento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosriscoseventosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosriscos', 'Statusfuncionals']
        ];
        $projetosprodutosriscoseventos = $this->paginate($this->Projetosprodutosriscoseventos);

        $this->set(compact('projetosprodutosriscoseventos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosriscosevento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosriscosevento = $this->Projetosprodutosriscoseventos->get($id, [
            'contain' => ['Projetosprodutosriscos', 'Statusfuncionals']
        ]);

        $this->set('projetosprodutosriscosevento', $projetosprodutosriscosevento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add_old()
    {
        $projetosprodutosriscosevento = $this->Projetosprodutosriscoseventos->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosriscosevento = $this->Projetosprodutosriscoseventos->patchEntity($projetosprodutosriscosevento, $this->request->getData());
            if ($this->Projetosprodutosriscoseventos->save($projetosprodutosriscosevento)) {
                $this->Flash->success(__('The projetosprodutosriscosevento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosriscosevento could not be saved. Please, try again.'));
        }
        $projetosprodutosriscos = $this->Projetosprodutosriscoseventos->Projetosprodutosriscos->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosriscoseventos->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosriscosevento', 'projetosprodutosriscos', 'statusfuncionals'));
    }

    public function add($id = null)
    {
        $projetosprodutosriscosevento = $this->Projetosprodutosriscoseventos->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosriscosevento = $this->Projetosprodutosriscoseventos->patchEntity($projetosprodutosriscosevento, $this->request->getData());
            $projetosprodutosriscosevento->projetosprodutosrisco_id = $id;

            if ($this->Projetosprodutosriscoseventos->save($projetosprodutosriscosevento)) {
                $this->Flash->success(__('The projetosprodutosriscosevento has been saved.'));

                //return $this->redirect(['action' => 'index']);

                 return $this->redirect(['controller'=>'Projetosprodutosriscos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosprodutosriscosevento could not be saved. Please, try again.'));
        }
        $projetosprodutosriscos = $this->Projetosprodutosriscoseventos->Projetosprodutosriscos->find('list', array('conditions'=>array('Projetosprodutosriscos.id'=>$id)), ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosriscoseventos->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosriscosevento', 'projetosprodutosriscos', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosriscosevento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosriscosevento = $this->Projetosprodutosriscoseventos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosriscosevento = $this->Projetosprodutosriscoseventos->patchEntity($projetosprodutosriscosevento, $this->request->getData());
            if ($this->Projetosprodutosriscoseventos->save($projetosprodutosriscosevento)) {
                $this->Flash->success(__('The projetosprodutosriscosevento has been saved.'));

             //   return $this->redirect(['action' => 'index']);

                return $this->redirect(['controller'=>'Projetosprodutosriscos','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetosprodutosriscosevento could not be saved. Please, try again.'));
        }
        $projetosprodutosriscos = $this->Projetosprodutosriscoseventos->Projetosprodutosriscos->find('list', array('conditions'=>array('Projetosprodutosriscos.id'=>$id)), ['limit' => 200]);
        $statusfuncionals = $this->Projetosprodutosriscoseventos->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosriscosevento', 'projetosprodutosriscos', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosriscosevento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosriscosevento = $this->Projetosprodutosriscoseventos->get($id);
        if ($this->Projetosprodutosriscoseventos->delete($projetosprodutosriscosevento)) {
            $this->Flash->success(__('The projetosprodutosriscosevento has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosriscosevento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
