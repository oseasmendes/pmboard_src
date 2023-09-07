<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Esupportsetlsistemas Controller
 *
 * @property \App\Model\Table\EsupportsetlsistemasTable $Esupportsetlsistemas
 *
 * @method \App\Model\Entity\Esupportsetlsistema[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EsupportsetlsistemasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Sistemasmodulos']
        ];
        $esupportsetlsistemas = $this->paginate($this->Esupportsetlsistemas);

        $this->set(compact('esupportsetlsistemas'));
    }

    /**
     * View method
     *
     * @param string|null $id Esupportsetlsistema id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $esupportsetlsistema = $this->Esupportsetlsistemas->get($id, [
            'contain' => ['Sistemas', 'Sistemasmodulos']
        ]);

        $this->set('esupportsetlsistema', $esupportsetlsistema);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $esupportsetlsistema = $this->Esupportsetlsistemas->newEntity();
        if ($this->request->is('post')) {
            $esupportsetlsistema = $this->Esupportsetlsistemas->patchEntity($esupportsetlsistema, $this->request->getData());
            if ($this->Esupportsetlsistemas->save($esupportsetlsistema)) {
                $this->Flash->success(__('The esupportsetlsistema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlsistema could not be saved. Please, try again.'));
        }
        $sistemas = $this->Esupportsetlsistemas->Sistemas->find('list', ['limit' => 200]);
        $sistemasmodulos = $this->Esupportsetlsistemas->Sistemasmodulos->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlsistema', 'sistemas', 'sistemasmodulos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Esupportsetlsistema id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $esupportsetlsistema = $this->Esupportsetlsistemas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $esupportsetlsistema = $this->Esupportsetlsistemas->patchEntity($esupportsetlsistema, $this->request->getData());
            if ($this->Esupportsetlsistemas->save($esupportsetlsistema)) {
                $this->Flash->success(__('The esupportsetlsistema has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlsistema could not be saved. Please, try again.'));
        }
        $sistemas = $this->Esupportsetlsistemas->Sistemas->find('list', ['limit' => 200]);
        $sistemasmodulos = $this->Esupportsetlsistemas->Sistemasmodulos->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlsistema', 'sistemas', 'sistemasmodulos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Esupportsetlsistema id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $esupportsetlsistema = $this->Esupportsetlsistemas->get($id);
        if ($this->Esupportsetlsistemas->delete($esupportsetlsistema)) {
            $this->Flash->success(__('The esupportsetlsistema has been deleted.'));
        } else {
            $this->Flash->error(__('The esupportsetlsistema could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
