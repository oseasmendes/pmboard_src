<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosriscosrecos Controller
 *
 * @property \App\Model\Table\ProjetosprodutosriscosrecosTable $Projetosprodutosriscosrecos
 *
 * @method \App\Model\Entity\Projetosprodutosriscosreco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosriscosrecosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosriscos']
        ];
        $projetosprodutosriscosrecos = $this->paginate($this->Projetosprodutosriscosrecos);

        $this->set(compact('projetosprodutosriscosrecos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosriscosreco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosriscosreco = $this->Projetosprodutosriscosrecos->get($id, [
            'contain' => ['Projetosprodutosriscos']
        ]);

        $this->set('projetosprodutosriscosreco', $projetosprodutosriscosreco);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutosriscosreco = $this->Projetosprodutosriscosrecos->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosriscosreco = $this->Projetosprodutosriscosrecos->patchEntity($projetosprodutosriscosreco, $this->request->getData());
            if ($this->Projetosprodutosriscosrecos->save($projetosprodutosriscosreco)) {
                $this->Flash->success(__('The projetosprodutosriscosreco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosriscosreco could not be saved. Please, try again.'));
        }
        $projetosprodutosriscos = $this->Projetosprodutosriscosrecos->Projetosprodutosriscos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosriscosreco', 'projetosprodutosriscos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosriscosreco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosriscosreco = $this->Projetosprodutosriscosrecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosriscosreco = $this->Projetosprodutosriscosrecos->patchEntity($projetosprodutosriscosreco, $this->request->getData());
            if ($this->Projetosprodutosriscosrecos->save($projetosprodutosriscosreco)) {
                $this->Flash->success(__('The projetosprodutosriscosreco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosriscosreco could not be saved. Please, try again.'));
        }
        $projetosprodutosriscos = $this->Projetosprodutosriscosrecos->Projetosprodutosriscos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosriscosreco', 'projetosprodutosriscos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosriscosreco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosriscosreco = $this->Projetosprodutosriscosrecos->get($id);
        if ($this->Projetosprodutosriscosrecos->delete($projetosprodutosriscosreco)) {
            $this->Flash->success(__('The projetosprodutosriscosreco has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosriscosreco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
