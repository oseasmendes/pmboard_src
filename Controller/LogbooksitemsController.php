<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Logbooksitems Controller
 *
 * @property \App\Model\Table\LogbooksitemsTable $Logbooksitems
 *
 * @method \App\Model\Entity\Logbooksitem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LogbooksitemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Consultores', 'Logbooks']
        ];
        $logbooksitems = $this->paginate($this->Logbooksitems);

        $this->set(compact('logbooksitems'));
    }

    /**
     * View method
     *
     * @param string|null $id Logbooksitem id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $logbooksitem = $this->Logbooksitems->get($id, [
            'contain' => ['Projetos', 'Consultores', 'Logbooks']
        ]);

        $this->set('logbooksitem', $logbooksitem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $logbooksitem = $this->Logbooksitems->newEntity();
        if ($this->request->is('post')) {
            $logbooksitem = $this->Logbooksitems->patchEntity($logbooksitem, $this->request->getData());
            if ($this->Logbooksitems->save($logbooksitem)) {
                $this->Flash->success(__('The logbooksitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logbooksitem could not be saved. Please, try again.'));
        }
        $projetos = $this->Logbooksitems->Projetos->find('list', ['limit' => 200]);
        $consultores = $this->Logbooksitems->Consultores->find('list', ['limit' => 200]);
        $logbooks = $this->Logbooksitems->Logbooks->find('list', ['limit' => 200]);
        $this->set(compact('logbooksitem', 'projetos', 'consultores', 'logbooks'));
    }

    public function addid($id = null)
    {
        $logbooksitem = $this->Logbooksitems->newEntity();
        if ($this->request->is('post')) {
            $logbooksitem = $this->Logbooksitems->patchEntity($logbooksitem, $this->request->getData());
            
            $logbooksitem->logbook_id = $id;
           
            if ($this->Logbooksitems->save($logbooksitem)) {
                $this->Flash->success(__('The logbooksitem has been saved.'));

               // return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Logbooks','action' => 'view',$id]);
            }
            $this->Flash->error(__('The logbooksitem could not be saved. Please, try again.'));
        }
        $projetos = $this->Logbooksitems->Projetos->find('list', ['limit' => 200]);
        $consultores = $this->Logbooksitems->Consultores->find('list', ['limit' => 200]);
        $logbooks = $this->Logbooksitems->Logbooks->find('list',array('conditions'=>array('Logbooks.id'=>$id),'order' => array('descricao' => 'asc')));
        $this->set(compact('logbooksitem', 'projetos', 'consultores', 'logbooks'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Logbooksitem id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $logbooksitem = $this->Logbooksitems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $logbooksitem = $this->Logbooksitems->patchEntity($logbooksitem, $this->request->getData());
            if ($this->Logbooksitems->save($logbooksitem)) {
                $this->Flash->success(__('The logbooksitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The logbooksitem could not be saved. Please, try again.'));
        }
        $projetos = $this->Logbooksitems->Projetos->find('list', ['limit' => 200]);
        $consultores = $this->Logbooksitems->Consultores->find('list', ['limit' => 200]);
        $logbooks = $this->Logbooksitems->Logbooks->find('list', ['limit' => 200]);
        $this->set(compact('logbooksitem', 'projetos', 'consultores', 'logbooks'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Logbooksitem id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $logbooksitem = $this->Logbooksitems->get($id);
        if ($this->Logbooksitems->delete($logbooksitem)) {
            $this->Flash->success(__('The logbooksitem has been deleted.'));
        } else {
            $this->Flash->error(__('The logbooksitem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
