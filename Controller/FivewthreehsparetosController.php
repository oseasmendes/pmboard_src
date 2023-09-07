<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fivewthreehsparetos Controller
 *
 * @property \App\Model\Table\FivewthreehsparetosTable $Fivewthreehsparetos
 *
 * @method \App\Model\Entity\Fivewthreehspareto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FivewthreehsparetosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fivewthreehs', 'Paretos']
        ];
        $fivewthreehsparetos = $this->paginate($this->Fivewthreehsparetos);

        $this->set(compact('fivewthreehsparetos'));
    }

    /**
     * View method
     *
     * @param string|null $id Fivewthreehspareto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fivewthreehspareto = $this->Fivewthreehsparetos->get($id, [
            'contain' => ['Fivewthreehs', 'Paretos']
        ]);

        $this->set('fivewthreehspareto', $fivewthreehspareto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add_old()
    {
        $fivewthreehspareto = $this->Fivewthreehsparetos->newEntity();
        if ($this->request->is('post')) {
            $fivewthreehspareto = $this->Fivewthreehsparetos->patchEntity($fivewthreehspareto, $this->request->getData());
            if ($this->Fivewthreehsparetos->save($fivewthreehspareto)) {
                $this->Flash->success(__('The fivewthreehspareto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fivewthreehspareto could not be saved. Please, try again.'));
        }
        $fivewthreehs = $this->Fivewthreehsparetos->Fivewthreehs->find('list', ['limit' => 200]);
        $paretos = $this->Fivewthreehsparetos->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('fivewthreehspareto', 'fivewthreehs', 'paretos'));
    }

        public function add($id = null)
    {
        $fivewthreehspareto = $this->Fivewthreehsparetos->newEntity();
        if ($this->request->is('post')) {
            $fivewthreehspareto = $this->Fivewthreehsparetos->patchEntity($fivewthreehspareto, $this->request->getData());
            $fivewthreehspareto->fivewthreeh_id = $id; 
            if ($this->Fivewthreehsparetos->save($fivewthreehspareto)) {
                $this->Flash->success(__('The fivewthreehspareto has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Fivewthreehs','action' => 'view',$id]);
            }
            $this->Flash->error(__('The fivewthreehspareto could not be saved. Please, try again.'));
        }
        $fivewthreehs = $this->Fivewthreehsparetos->Fivewthreehs->find('list');
        $paretos = $this->Fivewthreehsparetos->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('fivewthreehspareto', 'fivewthreehs', 'paretos'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Fivewthreehspareto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fivewthreehspareto = $this->Fivewthreehsparetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fivewthreehspareto = $this->Fivewthreehsparetos->patchEntity($fivewthreehspareto, $this->request->getData());
            if ($this->Fivewthreehsparetos->save($fivewthreehspareto)) {
                $this->Flash->success(__('The fivewthreehspareto has been saved.'));

                //return $this->redirect(['action' => 'index']);
                                return $this->redirect(['controller' => 'Fivewthreehs','action' => 'view',$id]);
            }
            $this->Flash->error(__('The fivewthreehspareto could not be saved. Please, try again.'));
        }
        $fivewthreehs = $this->Fivewthreehsparetos->Fivewthreehs->find('list', ['limit' => 200]);
        $paretos = $this->Fivewthreehsparetos->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('fivewthreehspareto', 'fivewthreehs', 'paretos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fivewthreehspareto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fivewthreehspareto = $this->Fivewthreehsparetos->get($id);
        if ($this->Fivewthreehsparetos->delete($fivewthreehspareto)) {
            $this->Flash->success(__('The fivewthreehspareto has been deleted.'));
        } else {
            $this->Flash->error(__('The fivewthreehspareto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
