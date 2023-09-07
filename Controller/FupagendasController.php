<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Fupagendas Controller
 *
 * @property \App\Model\Table\FupagendasTable $Fupagendas
 *
 * @method \App\Model\Entity\Fupagenda[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FupagendasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Fupqueues', 'Statusfuncionals'],
            'order' => ['Fupagendas.checkpointdata' => 'DESC']            
        ];

        /* $this->paginate = [
            'contain' => ['Fases','Statusfuncionals','Programas'],
            'limit' => 100,             
             'conditions' => ['arquivo = '=>false,'propostatecnica = '=>true,'statusfuncional_id NOT IN '=> [1,2,3,4,6,8,9,10,11,13,14,15,18,19]],       
             'order' => [
           'Projetos.previstodatafim' => 'asc']

       ]; */


        $fupagendas = $this->paginate($this->Fupagendas);

        $this->set(compact('fupagendas'));
    }

    /**
     * View method
     *
     * @param string|null $id Fupagenda id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {    
        
        $fiscalyear = strtotime('2022-03-31');
        $fupagenda = $this->Fupagendas->get($id, [
            'contain' => ['Fupqueues', 'Statusfuncionals', 
            'Fupdeployed' => ['sort' => ['Fupdeployed.lastupdate' => 'DESC'],'conditions' => ['Fupdeployed.lastupdate >' => date("Y-m-d", mktime(0, 0, 0, date("m") -12, date("d"),date("Y")))]], 
            'Fupdeployed' => ['conditions' => ['Fupdeployed.lastupdate >' => $fiscalyear]], 
            'Fupinprogres',
            'Fupchamados'=> ['sort' => ['Fupchamados.lastupdate' => 'ASC']], 
            'Fupnotstarted'=> [
                'sort' => ['Fupnotstarted.departamento' => 'ASC','Fupnotstarted.prio' => 'ASC'],                
            ],]
        ]);

        $this->set('fupagenda', $fupagenda);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fupagenda = $this->Fupagendas->newEntity();
        if ($this->request->is('post')) {
            $fupagenda = $this->Fupagendas->patchEntity($fupagenda, $this->request->getData());
            if ($this->Fupagendas->save($fupagenda)) {
                $this->Flash->success(__('The fupagenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupagenda could not be saved. Please, try again.'));
        }
        $fupqueues = $this->Fupagendas->Fupqueues->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Fupagendas->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('fupagenda', 'fupqueues', 'statusfuncionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fupagenda id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fupagenda = $this->Fupagendas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fupagenda = $this->Fupagendas->patchEntity($fupagenda, $this->request->getData());
            if ($this->Fupagendas->save($fupagenda)) {
                $this->Flash->success(__('The fupagenda has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fupagenda could not be saved. Please, try again.'));
        }
        $fupqueues = $this->Fupagendas->Fupqueues->find('list', ['limit' => 200]);
        $statusfuncionals = $this->Fupagendas->Statusfuncionals->find('list', ['limit' => 200]);
        $this->set(compact('fupagenda', 'fupqueues', 'statusfuncionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fupagenda id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fupagenda = $this->Fupagendas->get($id);
        if ($this->Fupagendas->delete($fupagenda)) {
            $this->Flash->success(__('The fupagenda has been deleted.'));
        } else {
            $this->Flash->error(__('The fupagenda could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
