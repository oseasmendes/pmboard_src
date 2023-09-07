<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Consultoresnotas Controller
 *
 * @property \App\Model\Table\ConsultoresnotasTable $Consultoresnotas
 *
 * @method \App\Model\Entity\Consultoresnota[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsultoresnotasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores', 'Ocorrencias']
        ];
        $consultoresnotas = $this->paginate($this->Consultoresnotas);

        $this->set(compact('consultoresnotas'));
    }

    /**
     * View method
     *
     * @param string|null $id Consultoresnota id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consultoresnota = $this->Consultoresnotas->get($id, [
            'contain' => ['Consultores', 'Ocorrencias']
        ]);

        $this->set('consultoresnota', $consultoresnota);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $consultoresnota = $this->Consultoresnotas->newEntity();
        if ($this->request->is('post')) {
            $consultoresnota = $this->Consultoresnotas->patchEntity($consultoresnota, $this->request->getData());
            $consultoresnota->consultore_id = $id;
            if ($this->Consultoresnotas->save($consultoresnota)) {
                $this->Flash->success(__('The consultoresnota has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Consultores','action' => 'view',$id]);
            }
            $this->Flash->error(__('The consultoresnota could not be saved. Please, try again.'));
        }
        $consultores = $this->Consultoresnotas->Consultores->find('list', ['limit' => 2000]);
        $ocorrencias = $this->Consultoresnotas->Ocorrencias->find('list', ['limit' => 200]);
        $this->set(compact('consultoresnota', 'consultores', 'ocorrencias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Consultoresnota id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consultoresnota = $this->Consultoresnotas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consultoresnota = $this->Consultoresnotas->patchEntity($consultoresnota, $this->request->getData());

             $consultorid = $consultoresnota->consultore_id;
            

            if ($this->Consultoresnotas->save($consultoresnota)) {
                $this->Flash->success(__('The consultoresnota has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Consultores','action' => 'view', $consultorid]);
            }
            $this->Flash->error(__('The consultoresnota could not be saved. Please, try again.'));
        }
        $consultores = $this->Consultoresnotas->Consultores->find('list', ['limit' => 200]);
        $ocorrencias = $this->Consultoresnotas->Ocorrencias->find('list', ['limit' => 200]);
        $this->set(compact('consultoresnota', 'consultores', 'ocorrencias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Consultoresnota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consultoresnota = $this->Consultoresnotas->get($id);
        if ($this->Consultoresnotas->delete($consultoresnota)) {
            $this->Flash->success(__('The consultoresnota has been deleted.'));
        } else {
            $this->Flash->error(__('The consultoresnota could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
