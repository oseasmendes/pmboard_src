<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fivewthreehstypes Controller
 *
 * @property \App\Model\Table\FivewthreehstypesTable $Fivewthreehstypes
 *
 * @method \App\Model\Entity\Fivewthreehstype[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FivewthreehstypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $fivewthreehstypes = $this->paginate($this->Fivewthreehstypes);

        $this->set(compact('fivewthreehstypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Fivewthreehstype id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fivewthreehstype = $this->Fivewthreehstypes->get($id, [
            'contain' => ['Fivewthreehs']
        ]);

        $this->set('fivewthreehstype', $fivewthreehstype);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fivewthreehstype = $this->Fivewthreehstypes->newEntity();
        if ($this->request->is('post')) {
            $fivewthreehstype = $this->Fivewthreehstypes->patchEntity($fivewthreehstype, $this->request->getData());
            if ($this->Fivewthreehstypes->save($fivewthreehstype)) {
                $this->Flash->success(__('The fivewthreehstype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fivewthreehstype could not be saved. Please, try again.'));
        }
        $this->set(compact('fivewthreehstype'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fivewthreehstype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fivewthreehstype = $this->Fivewthreehstypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fivewthreehstype = $this->Fivewthreehstypes->patchEntity($fivewthreehstype, $this->request->getData());
            if ($this->Fivewthreehstypes->save($fivewthreehstype)) {
                $this->Flash->success(__('The fivewthreehstype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fivewthreehstype could not be saved. Please, try again.'));
        }
        $this->set(compact('fivewthreehstype'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fivewthreehstype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fivewthreehstype = $this->Fivewthreehstypes->get($id);
        if ($this->Fivewthreehstypes->delete($fivewthreehstype)) {
            $this->Flash->success(__('The fivewthreehstype has been deleted.'));
        } else {
            $this->Flash->error(__('The fivewthreehstype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
