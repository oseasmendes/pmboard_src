<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Esupportsetlagentes Controller
 *
 * @property \App\Model\Table\EsupportsetlagentesTable $Esupportsetlagentes
 *
 * @method \App\Model\Entity\Esupportsetlagente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EsupportsetlagentesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores']
        ];
        $esupportsetlagentes = $this->paginate($this->Esupportsetlagentes);

        $this->set(compact('esupportsetlagentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Esupportsetlagente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $esupportsetlagente = $this->Esupportsetlagentes->get($id, [
            'contain' => ['Consultores']
        ]);

        $this->set('esupportsetlagente', $esupportsetlagente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $esupportsetlagente = $this->Esupportsetlagentes->newEntity();
        if ($this->request->is('post')) {
            $esupportsetlagente = $this->Esupportsetlagentes->patchEntity($esupportsetlagente, $this->request->getData());
            if ($this->Esupportsetlagentes->save($esupportsetlagente)) {
                $this->Flash->success(__('The esupportsetlagente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlagente could not be saved. Please, try again.'));
        }
        $consultores = $this->Esupportsetlagentes->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlagente', 'consultores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Esupportsetlagente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $esupportsetlagente = $this->Esupportsetlagentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $esupportsetlagente = $this->Esupportsetlagentes->patchEntity($esupportsetlagente, $this->request->getData());
            if ($this->Esupportsetlagentes->save($esupportsetlagente)) {
                $this->Flash->success(__('The esupportsetlagente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlagente could not be saved. Please, try again.'));
        }        
        $consultores = $this->Esupportsetlagentes->Consultores->find('list',array('conditions'=>array('Consultores.engajado ='=> true),'order' => array('Consultores.nome' => 'asc')) , ['limit' => 200]);
        $this->set(compact('esupportsetlagente', 'consultores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Esupportsetlagente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $esupportsetlagente = $this->Esupportsetlagentes->get($id);
        if ($this->Esupportsetlagentes->delete($esupportsetlagente)) {
            $this->Flash->success(__('The esupportsetlagente has been deleted.'));
        } else {
            $this->Flash->error(__('The esupportsetlagente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
