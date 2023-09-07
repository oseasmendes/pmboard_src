<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Propostasalocs Controller
 *
 * @property \App\Model\Table\PropostasalocsTable $Propostasalocs
 *
 * @method \App\Model\Entity\Propostasaloc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PropostasalocsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Propostas', 'Competencias', 'Periodotipos']
        ];
        $propostasalocs = $this->paginate($this->Propostasalocs);

        $this->set(compact('propostasalocs'));
    }

    /**
     * View method
     *
     * @param string|null $id Propostasaloc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $propostasaloc = $this->Propostasalocs->get($id, [
            'contain' => ['Propostas', 'Competencias', 'Periodotipos', 'Propostasalocsagendas']
        ]);

        $this->set('propostasaloc', $propostasaloc);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $propostasaloc = $this->Propostasalocs->newEntity();
        if ($this->request->is('post')) {
            $propostasaloc = $this->Propostasalocs->patchEntity($propostasaloc, $this->request->getData());
            if ($this->Propostasalocs->save($propostasaloc)) {
                $this->Flash->success(__('The propostasaloc has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The propostasaloc could not be saved. Please, try again.'));
        }
        $propostas = $this->Propostasalocs->Propostas->find('list', ['limit' => 200]);
        $competencias = $this->Propostasalocs->Competencias->find('list', ['limit' => 200]);
        $periodotipos = $this->Propostasalocs->Periodotipos->find('list', ['limit' => 200]);
        $this->set(compact('propostasaloc', 'propostas', 'competencias', 'periodotipos'));
    }

    public function addid($id = null)
    {
        $propostasaloc = $this->Propostasalocs->newEntity();

        if ($this->request->is('post')) {
            $propostasaloc = $this->Propostasalocs->patchEntity($propostasaloc, $this->request->getData());
            $propostasaloc->proposta_id = $id;
            if ($this->Propostasalocs->save($propostasaloc)) {
                $this->Flash->success(__('The propostasaloc has been saved.'));

                return $this->redirect(['controller' => 'Propostas','action' => 'view',$id]);

            }
            $this->Flash->error(__('The propostasaloc could not be saved. Please, try again.'));
        }
        $propostas = $this->Propostasalocs->Propostas->find('list',array('conditions'=>array('Propostas.id'=>$id),'order' => array('descricao' => 'asc')));
        $competencias = $this->Propostasalocs->Competencias->find('list', ['limit' => 200]);
        $periodotipos = $this->Propostasalocs->Periodotipos->find('list', ['limit' => 200]);
        $this->set(compact('propostasaloc', 'propostas', 'competencias', 'periodotipos'));
    }



    /**
     * Edit method
     *
     * @param string|null $id Propostasaloc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $propostasaloc = $this->Propostasalocs->get($id, [
            'contain' => []
        ]);
        $idprop = $propostasaloc->proposta_id;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $propostasaloc = $this->Propostasalocs->patchEntity($propostasaloc, $this->request->getData());
            if ($this->Propostasalocs->save($propostasaloc)) {
                $this->Flash->success(__('The propostasaloc has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Propostas','action' => 'view',$idprop]);
            }
            $this->Flash->error(__('The propostasaloc could not be saved. Please, try again.'));
        }
        $propostas = $this->Propostasalocs->Propostas->find('list',array('conditions'=>array('Propostas.id'=>$idprop),'order' => array('descricao' => 'asc')));
        $competencias = $this->Propostasalocs->Competencias->find('list', ['limit' => 200]);
        $periodotipos = $this->Propostasalocs->Periodotipos->find('list', ['limit' => 200]);
        $this->set(compact('propostasaloc', 'propostas', 'competencias', 'periodotipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Propostasaloc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $propostasaloc = $this->Propostasalocs->get($id);
        $idprop = $propostasaloc->proposta_id;
        if ($this->Propostasalocs->delete($propostasaloc)) {
            $this->Flash->success(__('The propostasaloc has been deleted.'));
        } else {
            $this->Flash->error(__('The propostasaloc could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Propostas','action' => 'view',$idprop]);
        
    }
}
