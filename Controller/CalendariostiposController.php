<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Calendariostipos Controller
 *
 * @property \App\Model\Table\CalendariostiposTable $Calendariostipos
 *
 * @method \App\Model\Entity\Calendariostipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CalendariostiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $calendariostipos = $this->paginate($this->Calendariostipos);

        $this->set(compact('calendariostipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Calendariostipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $calendariostipo = $this->Calendariostipos->get($id, [
            'contain' => ['Calendariosplanos']
        ]);

        $this->set('calendariostipo', $calendariostipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $calendariostipo = $this->Calendariostipos->newEntity();
        if ($this->request->is('post')) {
            $calendariostipo = $this->Calendariostipos->patchEntity($calendariostipo, $this->request->getData());
            if ($this->Calendariostipos->save($calendariostipo)) {
                $this->Flash->success(__('The calendariostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calendariostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('calendariostipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Calendariostipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $calendariostipo = $this->Calendariostipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $calendariostipo = $this->Calendariostipos->patchEntity($calendariostipo, $this->request->getData());
            if ($this->Calendariostipos->save($calendariostipo)) {
                $this->Flash->success(__('The calendariostipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calendariostipo could not be saved. Please, try again.'));
        }
        $this->set(compact('calendariostipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Calendariostipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $calendariostipo = $this->Calendariostipos->get($id);
        if ($this->Calendariostipos->delete($calendariostipo)) {
            $this->Flash->success(__('The calendariostipo has been deleted.'));
        } else {
            $this->Flash->error(__('The calendariostipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
