<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosentregasurls Controller
 *
 * @property \App\Model\Table\ProjetosprodutosentregasurlsTable $Projetosprodutosentregasurls
 *
 * @method \App\Model\Entity\Projetosprodutosentregasurl[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosentregasurlsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosentregas']
        ];
        $projetosprodutosentregasurls = $this->paginate($this->Projetosprodutosentregasurls);

        $this->set(compact('projetosprodutosentregasurls'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosentregasurl id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosentregasurl = $this->Projetosprodutosentregasurls->get($id, [
            'contain' => ['Projetosprodutosentregas']
        ]);

        $this->set('projetosprodutosentregasurl', $projetosprodutosentregasurl);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutosentregasurl = $this->Projetosprodutosentregasurls->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosentregasurl = $this->Projetosprodutosentregasurls->patchEntity($projetosprodutosentregasurl, $this->request->getData());
            if ($this->Projetosprodutosentregasurls->save($projetosprodutosentregasurl)) {
                $this->Flash->success(__('The projetosprodutosentregasurl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosentregasurl could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosprodutosentregasurls->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosentregasurl', 'projetosprodutosentregas'));
    }

    public function addid($id = null)
    {
        $projetosprodutosentregasurl = $this->Projetosprodutosentregasurls->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosentregasurl = $this->Projetosprodutosentregasurls->patchEntity($projetosprodutosentregasurl, $this->request->getData());
            $projetosprodutosentregasurl->projetosprodutosentrega_id = $id;
            if ($this->Projetosprodutosentregasurls->save($projetosprodutosentregasurl)) {
                $this->Flash->success(__('The projetosprodutosentregasurl has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'projetosprodutosentregas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosprodutosentregasurl could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosprodutosentregasurls->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')));
        $this->set(compact('projetosprodutosentregasurl', 'projetosprodutosentregas'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosentregasurl id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosentregasurl = $this->Projetosprodutosentregasurls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosentregasurl = $this->Projetosprodutosentregasurls->patchEntity($projetosprodutosentregasurl, $this->request->getData());
            if ($this->Projetosprodutosentregasurls->save($projetosprodutosentregasurl)) {
                $this->Flash->success(__('The projetosprodutosentregasurl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosentregasurl could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosprodutosentregasurls->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosentregasurl', 'projetosprodutosentregas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosentregasurl id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosentregasurl = $this->Projetosprodutosentregasurls->get($id);
        if ($this->Projetosprodutosentregasurls->delete($projetosprodutosentregasurl)) {
            $this->Flash->success(__('The projetosprodutosentregasurl has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosentregasurl could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
