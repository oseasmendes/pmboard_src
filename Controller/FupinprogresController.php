<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fupinprogres Controller
 *
 * @property \App\Model\Table\FupinprogresTable $Fupinprogres
 *
 * @method \App\Model\Entity\Fupinprogre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FupinprogresController extends AppController
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
        $fupinprogres = $this->paginate($this->Fupinprogres);

        $this->set(compact('fupinprogres'));
    }

    /**
     * View method
     *
     * @param string|null $id Fupinprogre id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fupinprogre = $this->Fupinprogres->get($id, [
            'contain' => ['Fupagendas']
        ]);

        $this->set('fupinprogre', $fupinprogre);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fupinprogre = $this->Fupinprogres->newEntity();
        if ($this->request->is('post')) {
            $fupinprogre = $this->Fupinprogres->patchEntity($fupinprogre, $this->request->getData());
            if ($this->Fupinprogres->save($fupinprogre)) {
                $this->Flash->success(__('The fupinprogre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupinprogre could not be saved. Please, try again.'));
        }
        $fupagendas = $this->Fupinprogres->Fupagendas->find('list', ['limit' => 200]);
        $this->set(compact('fupinprogre', 'fupagendas'));
    }

    public function addid($id = null)
    {
        $fupinprogre = $this->Fupinprogres->newEntity();
        if ($this->request->is('post')) {
            $fupinprogre = $this->Fupinprogres->patchEntity($fupinprogre, $this->request->getData());
            $fupinprogre->fupagenda_id = $id;
            if ($this->Fupinprogres->save($fupinprogre)) {
                $this->Flash->success(__('The fupinprogre has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Fupagendas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The fupinprogre could not be saved. Please, try again.'));
        }
        $fupagendas = $this->Fupinprogres->Fupagendas->find('list',array('conditions'=>array('Fupagendas.id'=>$id),'order' => array('descricao' => 'asc')));        
        $this->set(compact('fupinprogre', 'fupagendas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fupinprogre id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fupinprogre = $this->Fupinprogres->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fupinprogre = $this->Fupinprogres->patchEntity($fupinprogre, $this->request->getData());
            if ($this->Fupinprogres->save($fupinprogre)) {
                $this->Flash->success(__('The fupinprogre has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupinprogre could not be saved. Please, try again.'));
        }
        $fupagendas = $this->Fupinprogres->Fupagendas->find('list', ['limit' => 200]);
        $this->set(compact('fupinprogre', 'fupagendas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fupinprogre id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fupinprogre = $this->Fupinprogres->get($id);
        if ($this->Fupinprogres->delete($fupinprogre)) {
            $this->Flash->success(__('The fupinprogre has been deleted.'));
        } else {
            $this->Flash->error(__('The fupinprogre could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
