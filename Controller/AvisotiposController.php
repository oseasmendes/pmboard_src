<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Avisotipos Controller
 *
 * @property \App\Model\Table\AvisotiposTable $Avisotipos
 *
 * @method \App\Model\Entity\Avisotipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AvisotiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $avisotipos = $this->paginate($this->Avisotipos);

        $this->set(compact('avisotipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Avisotipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $avisotipo = $this->Avisotipos->get($id, [
            'contain' => []
        ]);

        $this->set('avisotipo', $avisotipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $avisotipo = $this->Avisotipos->newEntity();
        if ($this->request->is('post')) {
            $avisotipo = $this->Avisotipos->patchEntity($avisotipo, $this->request->getData());
            if ($this->Avisotipos->save($avisotipo)) {
                $this->Flash->success(__('The avisotipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avisotipo could not be saved. Please, try again.'));
        }
        $this->set(compact('avisotipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Avisotipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $avisotipo = $this->Avisotipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $avisotipo = $this->Avisotipos->patchEntity($avisotipo, $this->request->getData());
            if ($this->Avisotipos->save($avisotipo)) {
                $this->Flash->success(__('The avisotipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The avisotipo could not be saved. Please, try again.'));
        }
        $this->set(compact('avisotipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Avisotipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $avisotipo = $this->Avisotipos->get($id);
        if ($this->Avisotipos->delete($avisotipo)) {
            $this->Flash->success(__('The avisotipo has been deleted.'));
        } else {
            $this->Flash->error(__('The avisotipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
