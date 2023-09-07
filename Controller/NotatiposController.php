<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Notatipos Controller
 *
 * @property \App\Model\Table\NotatiposTable $Notatipos
 *
 * @method \App\Model\Entity\Notatipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NotatiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $notatipos = $this->paginate($this->Notatipos);

        $this->set(compact('notatipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Notatipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notatipo = $this->Notatipos->get($id, [
            'contain' => ['Projetosprodutosnotas']
        ]);

        $this->set('notatipo', $notatipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notatipo = $this->Notatipos->newEntity();
        if ($this->request->is('post')) {
            $notatipo = $this->Notatipos->patchEntity($notatipo, $this->request->getData());
            if ($this->Notatipos->save($notatipo)) {
                $this->Flash->success(__('The notatipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notatipo could not be saved. Please, try again.'));
        }
        $this->set(compact('notatipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Notatipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notatipo = $this->Notatipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notatipo = $this->Notatipos->patchEntity($notatipo, $this->request->getData());
            if ($this->Notatipos->save($notatipo)) {
                $this->Flash->success(__('The notatipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The notatipo could not be saved. Please, try again.'));
        }
        $this->set(compact('notatipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Notatipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notatipo = $this->Notatipos->get($id);
        if ($this->Notatipos->delete($notatipo)) {
            $this->Flash->success(__('The notatipo has been deleted.'));
        } else {
            $this->Flash->error(__('The notatipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
