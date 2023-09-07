<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Atadetalhedatas Controller
 *
 * @property \App\Model\Table\AtadetalhedatasTable $Atadetalhedatas
 *
 * @method \App\Model\Entity\Atadetalhedata[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtadetalhedatasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Atadetalhes']
        ];
        $atadetalhedatas = $this->paginate($this->Atadetalhedatas);

        $this->set(compact('atadetalhedatas'));
    }

    /**
     * View method
     *
     * @param string|null $id Atadetalhedata id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atadetalhedata = $this->Atadetalhedatas->get($id, [
            'contain' => ['Atadetalhes']
        ]);

        $this->set('atadetalhedata', $atadetalhedata);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atadetalhedata = $this->Atadetalhedatas->newEntity();
        if ($this->request->is('post')) {
            $atadetalhedata = $this->Atadetalhedatas->patchEntity($atadetalhedata, $this->request->getData());
            if ($this->Atadetalhedatas->save($atadetalhedata)) {
                $this->Flash->success(__('The atadetalhedata has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atadetalhedata could not be saved. Please, try again.'));
        }
        $atadetalhes = $this->Atadetalhedatas->Atadetalhes->find('list', ['limit' => 200]);
        $this->set(compact('atadetalhedata', 'atadetalhes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Atadetalhedata id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atadetalhedata = $this->Atadetalhedatas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atadetalhedata = $this->Atadetalhedatas->patchEntity($atadetalhedata, $this->request->getData());
            if ($this->Atadetalhedatas->save($atadetalhedata)) {
                $this->Flash->success(__('The atadetalhedata has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atadetalhedata could not be saved. Please, try again.'));
        }
        $atadetalhes = $this->Atadetalhedatas->Atadetalhes->find('list', ['limit' => 200]);
        $this->set(compact('atadetalhedata', 'atadetalhes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Atadetalhedata id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atadetalhedata = $this->Atadetalhedatas->get($id);
        if ($this->Atadetalhedatas->delete($atadetalhedata)) {
            $this->Flash->success(__('The atadetalhedata has been deleted.'));
        } else {
            $this->Flash->error(__('The atadetalhedata could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
