<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fupnotstarted Controller
 *
 * @property \App\Model\Table\FupnotstartedTable $Fupnotstarted
 *
 * @method \App\Model\Entity\Fupnotstarted[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FupnotstartedController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fupagendas']
        ];
        $fupnotstarted = $this->paginate($this->Fupnotstarted);

        $this->set(compact('fupnotstarted'));
    }

    /**
     * View method
     *
     * @param string|null $id Fupnotstarted id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fupnotstarted = $this->Fupnotstarted->get($id, [
            'contain' => ['Fupagendas']
        ]);

        $this->set('fupnotstarted', $fupnotstarted);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fupnotstarted = $this->Fupnotstarted->newEntity();
        if ($this->request->is('post')) {
            $fupnotstarted = $this->Fupnotstarted->patchEntity($fupnotstarted, $this->request->getData());
            if ($this->Fupnotstarted->save($fupnotstarted)) {
                $this->Flash->success(__('The fupnotstarted has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupnotstarted could not be saved. Please, try again.'));
        }
        $fupagendas = $this->Fupnotstarted->Fupagendas->find('list', ['limit' => 200]);
        $this->set(compact('fupnotstarted', 'fupagendas'));
    }

    public function addid($id = null)
    {
        $fupnotstarted = $this->Fupnotstarted->newEntity();
        if ($this->request->is('post')) {
            $fupnotstarted = $this->Fupnotstarted->patchEntity($fupnotstarted, $this->request->getData());
            $fupnotstarted->fupagenda_id = $id;
            if ($this->Fupnotstarted->save($fupnotstarted)) {
                $this->Flash->success(__('The fupnotstarted has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Fupagendas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The fupnotstarted could not be saved. Please, try again.'));
        }
        $fupagendas = $this->Fupnotstarted->Fupagendas->find('list',array('conditions'=>array('Fupagendas.id'=>$id),'order' => array('descricao' => 'asc')));
        $this->set(compact('fupnotstarted', 'fupagendas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fupnotstarted id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fupnotstarted = $this->Fupnotstarted->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fupnotstarted = $this->Fupnotstarted->patchEntity($fupnotstarted, $this->request->getData());
            if ($this->Fupnotstarted->save($fupnotstarted)) {
                $this->Flash->success(__('The fupnotstarted has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupnotstarted could not be saved. Please, try again.'));
        }
        $fupagendas = $this->Fupnotstarted->Fupagendas->find('list', ['limit' => 200]);
        $this->set(compact('fupnotstarted', 'fupagendas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fupnotstarted id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fupnotstarted = $this->Fupnotstarted->get($id);
        if ($this->Fupnotstarted->delete($fupnotstarted)) {
            $this->Flash->success(__('The fupnotstarted has been deleted.'));
        } else {
            $this->Flash->error(__('The fupnotstarted could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
