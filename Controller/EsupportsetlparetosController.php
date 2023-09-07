<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Esupportsetlparetos Controller
 *
 * @property \App\Model\Table\EsupportsetlparetosTable $Esupportsetlparetos
 *
 * @method \App\Model\Entity\Esupportsetlpareto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EsupportsetlparetosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Paretos']
        ];
        $esupportsetlparetos = $this->paginate($this->Esupportsetlparetos);

        $this->set(compact('esupportsetlparetos'));
    }

    /**
     * View method
     *
     * @param string|null $id Esupportsetlpareto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $esupportsetlpareto = $this->Esupportsetlparetos->get($id, [
            'contain' => ['Paretos']
        ]);

        $this->set('esupportsetlpareto', $esupportsetlpareto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $esupportsetlpareto = $this->Esupportsetlparetos->newEntity();
        if ($this->request->is('post')) {
            $esupportsetlpareto = $this->Esupportsetlparetos->patchEntity($esupportsetlpareto, $this->request->getData());
            if ($this->Esupportsetlparetos->save($esupportsetlpareto)) {
                $this->Flash->success(__('The esupportsetlpareto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlpareto could not be saved. Please, try again.'));
        }
        $paretos = $this->Esupportsetlparetos->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlpareto', 'paretos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Esupportsetlpareto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {

      
        $esupportsetlpareto = $this->Esupportsetlparetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $esupportsetlpareto = $this->Esupportsetlparetos->patchEntity($esupportsetlpareto, $this->request->getData());
            if ($this->Esupportsetlparetos->save($esupportsetlpareto)) {
                $this->Flash->success(__('The esupportsetlpareto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlpareto could not be saved. Please, try again.'));
        }

        $paretos = $this->Esupportsetlparetos->Paretos->find('list',array('conditions' => ['Paretos.ativo = '=> 1],'order' => array('prioridade' => 'asc')),['limit' => 1200]);
        $this->set(compact('esupportsetlpareto', 'paretos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Esupportsetlpareto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $esupportsetlpareto = $this->Esupportsetlparetos->get($id);
        if ($this->Esupportsetlparetos->delete($esupportsetlpareto)) {
            $this->Flash->success(__('The esupportsetlpareto has been deleted.'));
        } else {
            $this->Flash->error(__('The esupportsetlpareto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
