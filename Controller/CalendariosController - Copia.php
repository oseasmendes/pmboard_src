<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Calendarios Controller
 *
 * @property \App\Model\Table\CalendariosTable $Calendarios
 *
 * @method \App\Model\Entity\Calendario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CalendariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function indexold()
    {
        $this->paginate = [
            'contain' => ['Calendariosplanos', 'Empresas']
        ];
        $calendarios = $this->paginate($this->Calendarios);

        $this->set(compact('calendarios'));
    }

    public function index() {
        
        $calendariosplanos = $this->Calendarios->Calendariosplanos->find('list', ['limit' => 200]);        
        $keyword = $this->request->getQueryParams('mesnome');
        
       if (!empty($keyword['mesnome'])) {
                    $this->paginate = [
                     'contain' => ['Calendariosplanos'],
                     'conditions' => ['Calendarios.mesnome LIKE '=> '%'.$keyword['mesnome'].'%'],             
                      'order' => [
                        'Calendarios.id' => 'asc'
                        ]            
                    ];
                    $calendarios = $this->paginate($this->Calendarios);
                    } elseif (!empty($keyword['calendariosplano_id'])) 
                            {
                                $this->paginate = [
                                'contain' => ['Calendariosplanos'],
                                'conditions' => ['calendariosplano_id = '=> $keyword['calendariosplano_id']],             
                                'order' => [                                
                                 'Calendarios.diaserial' => 'asc'
                                    ]            
                                ];
                                $calendarios = $this->paginate($this->Calendarios);
                            } else 
                            {
                                $this->paginate = [
                                 'contain' => ['Calendariosplanos'],
                                  'order' => [
                                'Calendarios.id' => 'asc'
                                 
                            ]];
                            $calendarios = $this->paginate($this->Calendarios);
                            }

                            $this->set(compact('calendarios','calendariosplanos'));

    }

    /**
     * View method
     *
     * @param string|null $id Calendario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $calendario = $this->Calendarios->get($id, [
            'contain' => ['Calendariosplanos', 'Empresas']
        ]);

        $this->set('calendario', $calendario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $calendario = $this->Calendarios->newEntity();
        if ($this->request->is('post')) {
            $calendario = $this->Calendarios->patchEntity($calendario, $this->request->getData());
            if ($this->Calendarios->save($calendario)) {
                $this->Flash->success(__('The calendario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calendario could not be saved. Please, try again.'));
        }
        $calendariosplanos = $this->Calendarios->Calendariosplanos->find('list', ['limit' => 200]);
        $empresas = $this->Calendarios->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('calendario', 'calendariosplanos', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Calendario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $calendario = $this->Calendarios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $calendario = $this->Calendarios->patchEntity($calendario, $this->request->getData());
            if ($this->Calendarios->save($calendario)) {
                $this->Flash->success(__('The calendario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The calendario could not be saved. Please, try again.'));
        }
        $calendariosplanos = $this->Calendarios->Calendariosplanos->find('list', ['limit' => 200]);
        $empresas = $this->Calendarios->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('calendario', 'calendariosplanos', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Calendario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $calendario = $this->Calendarios->get($id);
        if ($this->Calendarios->delete($calendario)) {
            $this->Flash->success(__('The calendario has been deleted.'));
        } else {
            $this->Flash->error(__('The calendario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
