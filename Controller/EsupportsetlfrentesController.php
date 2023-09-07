<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Esupportsetlfrentes Controller
 *
 * @property \App\Model\Table\EsupportsetlfrentesTable $Esupportsetlfrentes
 *
 * @method \App\Model\Entity\Esupportsetlfrente[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EsupportsetlfrentesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Frentes']
        ];
        $esupportsetlfrentes = $this->paginate($this->Esupportsetlfrentes);

        $this->set(compact('esupportsetlfrentes'));
    }

    /**
     * View method
     *
     * @param string|null $id Esupportsetlfrente id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $esupportsetlfrente = $this->Esupportsetlfrentes->get($id, [
            'contain' => ['Frentes']
        ]);

        $this->set('esupportsetlfrente', $esupportsetlfrente);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $esupportsetlfrente = $this->Esupportsetlfrentes->newEntity();
        if ($this->request->is('post')) {
            $esupportsetlfrente = $this->Esupportsetlfrentes->patchEntity($esupportsetlfrente, $this->request->getData());
            if ($this->Esupportsetlfrentes->save($esupportsetlfrente)) {
                $this->Flash->success(__('The esupportsetlfrente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlfrente could not be saved. Please, try again.'));
        }
        $frentes = $this->Esupportsetlfrentes->Frentes->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlfrente', 'frentes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Esupportsetlfrente id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $esupportsetlfrente = $this->Esupportsetlfrentes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $esupportsetlfrente = $this->Esupportsetlfrentes->patchEntity($esupportsetlfrente, $this->request->getData());
            if ($this->Esupportsetlfrentes->save($esupportsetlfrente)) {
                $this->Flash->success(__('The esupportsetlfrente has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetlfrente could not be saved. Please, try again.'));
        }
        $frentes = $this->Esupportsetlfrentes->Frentes->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetlfrente', 'frentes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Esupportsetlfrente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $esupportsetlfrente = $this->Esupportsetlfrentes->get($id);
        if ($this->Esupportsetlfrentes->delete($esupportsetlfrente)) {
            $this->Flash->success(__('The esupportsetlfrente has been deleted.'));
        } else {
            $this->Flash->error(__('The esupportsetlfrente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
