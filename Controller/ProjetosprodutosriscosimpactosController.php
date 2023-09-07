<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosriscosimpactos Controller
 *
 * @property \App\Model\Table\ProjetosprodutosriscosimpactosTable $Projetosprodutosriscosimpactos
 *
 * @method \App\Model\Entity\Projetosprodutosriscosimpacto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosriscosimpactosController extends AppController
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
        $projetosprodutosriscosimpactos = $this->paginate($this->Projetosprodutosriscosimpactos);

        $this->set(compact('projetosprodutosriscosimpactos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosriscosimpacto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosriscosimpacto = $this->Projetosprodutosriscosimpactos->get($id, [
            'contain' => ['Projetosprodutosriscos']
        ]);

        $this->set('projetosprodutosriscosimpacto', $projetosprodutosriscosimpacto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutosriscosimpacto = $this->Projetosprodutosriscosimpactos->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosriscosimpacto = $this->Projetosprodutosriscosimpactos->patchEntity($projetosprodutosriscosimpacto, $this->request->getData());
            if ($this->Projetosprodutosriscosimpactos->save($projetosprodutosriscosimpacto)) {
                $this->Flash->success(__('The projetosprodutosriscosimpacto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosriscosimpacto could not be saved. Please, try again.'));
        }
        $projetosprodutosriscos = $this->Projetosprodutosriscosimpactos->Projetosprodutosriscos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosriscosimpacto', 'projetosprodutosriscos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosriscosimpacto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosriscosimpacto = $this->Projetosprodutosriscosimpactos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosriscosimpacto = $this->Projetosprodutosriscosimpactos->patchEntity($projetosprodutosriscosimpacto, $this->request->getData());
            if ($this->Projetosprodutosriscosimpactos->save($projetosprodutosriscosimpacto)) {
                $this->Flash->success(__('The projetosprodutosriscosimpacto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosriscosimpacto could not be saved. Please, try again.'));
        }
        $projetosprodutosriscos = $this->Projetosprodutosriscosimpactos->Projetosprodutosriscos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosriscosimpacto', 'projetosprodutosriscos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosriscosimpacto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosriscosimpacto = $this->Projetosprodutosriscosimpactos->get($id);
        if ($this->Projetosprodutosriscosimpactos->delete($projetosprodutosriscosimpacto)) {
            $this->Flash->success(__('The projetosprodutosriscosimpacto has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosriscosimpacto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
