<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipodocumentos Controller
 *
 * @property \App\Model\Table\TipodocumentosTable $Tipodocumentos
 *
 * @method \App\Model\Entity\Tipodocumento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipodocumentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tipodocumentos = $this->paginate($this->Tipodocumentos);

        $this->set(compact('tipodocumentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipodocumento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipodocumento = $this->Tipodocumentos->get($id, [
            'contain' => ['Atas']
        ]);

        $this->set('tipodocumento', $tipodocumento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipodocumento = $this->Tipodocumentos->newEntity();
        if ($this->request->is('post')) {
            $tipodocumento = $this->Tipodocumentos->patchEntity($tipodocumento, $this->request->getData());
            if ($this->Tipodocumentos->save($tipodocumento)) {
                $this->Flash->success(__('The tipodocumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodocumento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodocumento'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipodocumento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipodocumento = $this->Tipodocumentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipodocumento = $this->Tipodocumentos->patchEntity($tipodocumento, $this->request->getData());
            if ($this->Tipodocumentos->save($tipodocumento)) {
                $this->Flash->success(__('The tipodocumento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipodocumento could not be saved. Please, try again.'));
        }
        $this->set(compact('tipodocumento'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipodocumento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipodocumento = $this->Tipodocumentos->get($id);
        if ($this->Tipodocumentos->delete($tipodocumento)) {
            $this->Flash->success(__('The tipodocumento has been deleted.'));
        } else {
            $this->Flash->error(__('The tipodocumento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
