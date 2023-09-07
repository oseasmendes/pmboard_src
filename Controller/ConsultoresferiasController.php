<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultoresferias Controller
 *
 * @property \App\Model\Table\ConsultoresferiasTable $Consultoresferias
 *
 * @method \App\Model\Entity\Consultoresferia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsultoresferiasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores', 'Statusfuncionals']
        ];
        $consultoresferias = $this->paginate($this->Consultoresferias);

        $this->set(compact('consultoresferias'));
    }

    /**
     * View method
     *
     * @param string|null $id Consultoresferia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultoresferia = $this->Consultoresferias->get($id, [
            'contain' => ['Consultores', 'Statusfuncionals']
        ]);

        $this->set('consultoresferia', $consultoresferia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consultoresferia = $this->Consultoresferias->newEntity();
        if ($this->request->is('post')) {
            $consultoresferia = $this->Consultoresferias->patchEntity($consultoresferia, $this->request->getData());
            if ($this->Consultoresferias->save($consultoresferia)) {
                $this->Flash->success(__('The consultoresferia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoresferia could not be saved. Please, try again.'));
        }
        $consultores = $this->Consultoresferias->Consultores->find('list',array('order' => array('nome' => 'asc')), ['limit' => 200]);
        $statusfuncionals = $this->Consultoresferias->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('consultoresferia', 'consultores', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultoresferia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultoresferia = $this->Consultoresferias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultoresferia = $this->Consultoresferias->patchEntity($consultoresferia, $this->request->getData());
            if ($this->Consultoresferias->save($consultoresferia)) {
                $this->Flash->success(__('The consultoresferia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consultoresferia could not be saved. Please, try again.'));
        }
        $consultores = $this->Consultoresferias->Consultores->find('list',array('order' => array('nome' => 'asc')), ['limit' => 200]);
        $statusfuncionals = $this->Consultoresferias->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('consultoresferia', 'consultores', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultoresferia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultoresferia = $this->Consultoresferias->get($id);
        $consultorid = $consultoresferia->consultore_id;
        if ($this->Consultoresferias->delete($consultoresferia)) {
            $this->Flash->success(__('The consultoresferia has been deleted.'));
        } else {
            $this->Flash->error(__('The consultoresferia could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Consultores','action' => 'view',$consultorid]);

    }
}
