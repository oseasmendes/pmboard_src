<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosalocsnotas Controller
 *
 * @property \App\Model\Table\ProjetosalocsnotasTable $Projetosalocsnotas
 *
 * @method \App\Model\Entity\Projetosalocsnota[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosalocsnotasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Notatipos', 'Projetosalocs']
        ];
        $projetosalocsnotas = $this->paginate($this->Projetosalocsnotas);

        $this->set(compact('projetosalocsnotas'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosalocsnota id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosalocsnota = $this->Projetosalocsnotas->get($id, [
            'contain' => ['Notatipos', 'Projetosalocs']
        ]);

        $this->set('projetosalocsnota', $projetosalocsnota);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosalocsnota = $this->Projetosalocsnotas->newEntity();
        if ($this->request->is('post')) {
            $projetosalocsnota = $this->Projetosalocsnotas->patchEntity($projetosalocsnota, $this->request->getData());
            if ($this->Projetosalocsnotas->save($projetosalocsnota)) {
                $this->Flash->success(__('The projetosalocsnota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosalocsnota could not be saved. Please, try again.'));
        }
        $notatipos = $this->Projetosalocsnotas->Notatipos->find('list', ['limit' => 200]);
        $projetosalocs = $this->Projetosalocsnotas->Projetosalocs->find('list', ['limit' => 200]);
        $this->set(compact('projetosalocsnota', 'notatipos', 'projetosalocs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosalocsnota id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosalocsnota = $this->Projetosalocsnotas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosalocsnota = $this->Projetosalocsnotas->patchEntity($projetosalocsnota, $this->request->getData());
            if ($this->Projetosalocsnotas->save($projetosalocsnota)) {
                $this->Flash->success(__('The projetosalocsnota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosalocsnota could not be saved. Please, try again.'));
        }
        $notatipos = $this->Projetosalocsnotas->Notatipos->find('list', ['limit' => 200]);
        $projetosalocs = $this->Projetosalocsnotas->Projetosalocs->find('list', ['limit' => 200]);
        $this->set(compact('projetosalocsnota', 'notatipos', 'projetosalocs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosalocsnota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosalocsnota = $this->Projetosalocsnotas->get($id);
        if ($this->Projetosalocsnotas->delete($projetosalocsnota)) {
            $this->Flash->success(__('The projetosalocsnota has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosalocsnota could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
