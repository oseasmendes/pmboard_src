<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Esupportsetlentregas Controller
 *
 * @property \App\Model\Table\EsupportsetlentregasTable $Esupportsetlentregas
 *
 * @method \App\Model\Entity\Esupportsetlentrega[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EsupportsetlentregasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Entregastipos']
        ];
        $esupportsetlentregas = $this->paginate($this->Esupportsetlentregas);

        $this->set(compact('esupportsetlentregas'));
    }

    /**
     * View method
     *
     * @param string|null $id Esupportsetlentrega id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $esupportsetlentrega = $this->Esupportsetlentregas->get($id, [
            'contain' => ['Entregastipos']
        ]);

        $this->set('esupportsetlentrega', $esupportsetlentrega);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $esupportsetlentrega = $this->Esupportsetlentregas->newEntity();
        if ($this->request->is('post')) {
            $esupportsetlentrega = $this->Esupportsetlentregas->patchEntity($esupportsetlentrega, $this->request->getData());
            if ($this->Esupportsetlentregas->save($esupportsetlentrega)) {
                $this->Flash->success(__('The esupportsetlentrega has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlentrega could not be saved. Please, try again.'));
        }
        $entregastipos = $this->Esupportsetlentregas->Entregastipos->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlentrega', 'entregastipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Esupportsetlentrega id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $esupportsetlentrega = $this->Esupportsetlentregas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $esupportsetlentrega = $this->Esupportsetlentregas->patchEntity($esupportsetlentrega, $this->request->getData());
            if ($this->Esupportsetlentregas->save($esupportsetlentrega)) {
                $this->Flash->success(__('The esupportsetlentrega has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlentrega could not be saved. Please, try again.'));
        }
        $entregastipos = $this->Esupportsetlentregas->Entregastipos->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlentrega', 'entregastipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Esupportsetlentrega id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $esupportsetlentrega = $this->Esupportsetlentregas->get($id);
        if ($this->Esupportsetlentregas->delete($esupportsetlentrega)) {
            $this->Flash->success(__('The esupportsetlentrega has been deleted.'));
        } else {
            $this->Flash->error(__('The esupportsetlentrega could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
