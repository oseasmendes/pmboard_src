<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ataconsultores Controller
 *
 * @property \App\Model\Table\AtaconsultoresTable $Ataconsultores
 *
 * @method \App\Model\Entity\Ataconsultore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtaconsultoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Atas', 'Consultores']
        ];
        $ataconsultores = $this->paginate($this->Ataconsultores);

        $this->set(compact('ataconsultores'));
    }

    /**
     * View method
     *
     * @param string|null $id Ataconsultore id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ataconsultore = $this->Ataconsultores->get($id, [
            'contain' => ['Atas', 'Consultores']
        ]);

        $this->set('ataconsultore', $ataconsultore);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $ataconsultore = $this->Ataconsultores->newEntity();
        if ($this->request->is('post')) {
            $ataconsultore = $this->Ataconsultores->patchEntity($ataconsultore, $this->request->getData());
            $ataconsultore->ata_id = $id;
            if ($this->Ataconsultores->save($ataconsultore)) {
                $this->Flash->success(__('The ataconsultore has been saved.'));

                //return $this->redirect(['action' => 'index']);
                  return $this->redirect(['controller' => 'Atas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The ataconsultore could not be saved. Please, try again.'));
        }
        $atas = $this->Ataconsultores->Atas->find('list', ['limit' => 200]);
        $consultores = $this->Ataconsultores->Consultores->find('list',array('order' => array('nome' => 'asc')) , ['limit' => 200]);
        $this->set(compact('ataconsultore', 'atas', 'consultores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ataconsultore id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ataconsultore = $this->Ataconsultores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ataconsultore = $this->Ataconsultores->patchEntity($ataconsultore, $this->request->getData());
            if ($this->Ataconsultores->save($ataconsultore)) {
                $this->Flash->success(__('The ataconsultore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ataconsultore could not be saved. Please, try again.'));
        }
        $atas = $this->Ataconsultores->Atas->find('list', ['limit' => 200]);
        $consultores = $this->Ataconsultores->Consultores->find('list',array('order' => array('nome' => 'asc')) , ['limit' => 200]);
        $this->set(compact('ataconsultore', 'atas', 'consultores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ataconsultore id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ataconsultore = $this->Ataconsultores->get($id);
        if ($this->Ataconsultores->delete($ataconsultore)) {
            $this->Flash->success(__('The ataconsultore has been deleted.'));
        } else {
            $this->Flash->error(__('The ataconsultore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
