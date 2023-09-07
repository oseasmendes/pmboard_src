<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosgroomings Controller
 *
 * @property \App\Model\Table\ProjetosgroomingsTable $Projetosgroomings
 *
 * @method \App\Model\Entity\Projetosgrooming[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosgroomingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetossprints']
        ];
        $projetosgroomings = $this->paginate($this->Projetosgroomings);

        $this->set(compact('projetosgroomings'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosgrooming id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosgrooming = $this->Projetosgroomings->get($id, [
            'contain' => ['Projetossprints', 'Projetosgroomingsitems']
        ]);

        $this->set('projetosgrooming', $projetosgrooming);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosgrooming = $this->Projetosgroomings->newEntity();
        if ($this->request->is('post')) {
            $projetosgrooming = $this->Projetosgroomings->patchEntity($projetosgrooming, $this->request->getData());
            if ($this->Projetosgroomings->save($projetosgrooming)) {
                $this->Flash->success(__('The projetosgrooming has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosgrooming could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Projetosgroomings->Projetossprints->find('list', ['limit' => 200]);
        $this->set(compact('projetosgrooming', 'projetossprints'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosgrooming id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosgrooming = $this->Projetosgroomings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosgrooming = $this->Projetosgroomings->patchEntity($projetosgrooming, $this->request->getData());
            if ($this->Projetosgroomings->save($projetosgrooming)) {
                $this->Flash->success(__('The projetosgrooming has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosgrooming could not be saved. Please, try again.'));
        }
        $projetossprints = $this->Projetosgroomings->Projetossprints->find('list', ['limit' => 200]);
        $this->set(compact('projetosgrooming', 'projetossprints'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosgrooming id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosgrooming = $this->Projetosgroomings->get($id);
        if ($this->Projetosgroomings->delete($projetosgrooming)) {
            $this->Flash->success(__('The projetosgrooming has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosgrooming could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
