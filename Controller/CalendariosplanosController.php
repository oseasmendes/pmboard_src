<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Calendariosplanos Controller
 *
 * @property \App\Model\Table\CalendariosplanosTable $Calendariosplanos
 *
 * @method \App\Model\Entity\Calendariosplano[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CalendariosplanosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Calendariostipos', 'Empresas']
        ];
        $calendariosplanos = $this->paginate($this->Calendariosplanos);

        $this->set(compact('calendariosplanos'));
    }

    /**
     * View method
     *
     * @param string|null $id Calendariosplano id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $calendariosplano = $this->Calendariosplanos->get($id, [
            'contain' => ['Calendariostipos', 'Empresas', 'Calendarios']
        ]);

        $this->set('calendariosplano', $calendariosplano);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $calendariosplano = $this->Calendariosplanos->newEntity();
        if ($this->request->is('post')) {
            $calendariosplano = $this->Calendariosplanos->patchEntity($calendariosplano, $this->request->getData());
            if ($this->Calendariosplanos->save($calendariosplano)) {
                $this->Flash->success(__('The calendariosplano has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calendariosplano could not be saved. Please, try again.'));
        }
        $calendariostipos = $this->Calendariosplanos->Calendariostipos->find('list', ['limit' => 200]);
        $empresas = $this->Calendariosplanos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('calendariosplano', 'calendariostipos', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Calendariosplano id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $calendariosplano = $this->Calendariosplanos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $calendariosplano = $this->Calendariosplanos->patchEntity($calendariosplano, $this->request->getData());
            if ($this->Calendariosplanos->save($calendariosplano)) {
                $this->Flash->success(__('The calendariosplano has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calendariosplano could not be saved. Please, try again.'));
        }
        $calendariostipos = $this->Calendariosplanos->Calendariostipos->find('list', ['limit' => 200]);
        $empresas = $this->Calendariosplanos->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('calendariosplano', 'calendariostipos', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Calendariosplano id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $calendariosplano = $this->Calendariosplanos->get($id);
        if ($this->Calendariosplanos->delete($calendariosplano)) {
            $this->Flash->success(__('The calendariosplano has been deleted.'));
        } else {
            $this->Flash->error(__('The calendariosplano could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
