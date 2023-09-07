<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;

/**
 * Sistemaprostepsimgs Controller
 *
 * @property \App\Model\Table\SistemaprostepsimgsTable $Sistemaprostepsimgs
 *
 * @method \App\Model\Entity\Sistemaprostepsimg[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemaprostepsimgsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function initialize() 
    {
        parent::initialize();
        $this->loadComponent('Uploadprostepsimgs');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemaprosteps']
        ];
        $sistemaprostepsimgs = $this->paginate($this->Sistemaprostepsimgs);

        $this->set(compact('sistemaprostepsimgs'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemaprostepsimg id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemaprostepsimg = $this->Sistemaprostepsimgs->get($id, [
            'contain' => ['Sistemaprosteps']
        ]);

        $this->set('sistemaprostepsimg', $sistemaprostepsimg);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemaprostepsimg = $this->Sistemaprostepsimgs->newEntity();
        if ($this->request->is('post')) {
            $sistemaprostepsimg = $this->Sistemaprostepsimgs->patchEntity($sistemaprostepsimg, $this->request->getData());
            if ($this->Sistemaprostepsimgs->save($sistemaprostepsimg)) {
                $this->Flash->success(__('The sistemaprostepsimg has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemaprostepsimg could not be saved. Please, try again.'));
        }
        $sistemaprosteps = $this->Sistemaprostepsimgs->Sistemaprosteps->find('list', ['limit' => 200]);
        $this->set(compact('sistemaprostepsimg', 'sistemaprosteps'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemaprostepsimg id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemaprostepsimg = $this->Sistemaprostepsimgs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemaprostepsimg = $this->Sistemaprostepsimgs->patchEntity($sistemaprostepsimg, $this->request->getData());
            $idspec = $sistemaprostepsimg->sistemaprostep_id; 
            if ($this->Sistemaprostepsimgs->save($sistemaprostepsimg)) {
                $this->Flash->success(__('The sistemaprostepsimg has been saved.'));                
                return $this->redirect(['controller'=>'Sistemaprosteps','action' => 'view',$idspec]);
            }
            $this->Flash->error(__('The sistemaprostepsimg could not be saved. Please, try again.'));
        }
        $sistemaprosteps = $this->Sistemaprostepsimgs->Sistemaprosteps->find('list', ['limit' => 200]);
        $this->set(compact('sistemaprostepsimg', 'sistemaprosteps'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemaprostepsimg id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemaprostepsimg = $this->Sistemaprostepsimgs->get($id);
        $idspec = $sistemaprostepsimg->sistemaprostep_id; 
        if ($this->Sistemaprostepsimgs->delete($sistemaprostepsimg)) {
            $this->Flash->success(__('The sistemaprostepsimg has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemaprostepsimg could not be deleted. Please, try again.'));
        }        
        return $this->redirect(['controller'=>'Sistemaprosteps','action' => 'view',$idspec]);
    }

    public function addimg($id = null)
    {
        $sistemaprostepsimg = $this->Sistemaprostepsimgs->newEntity();
                 

        if ($this->request->is('post')) {
             $this->sistemaprostep_id = $id;  
           
            $this->Uploadprostepsimgs->upload($this->request->data['image'],$id);

       //         return $this->redirect(['action' => 'index']);

                return $this->redirect(['controller'=>'sistemaprosteps','action' => 'view',$id]);

                
            //}
           // $this->Flash->error(__('The projetosprodutosentregasimg could not be saved. Please, try again.'));

            
        }
        
        $sistemaprosteps = $this->Sistemaprostepsimgs->Sistemaprosteps->find('list',array('conditions'=>array('Sistemaprosteps.id'=>$id),'order' => array('Description' => 'asc')));;
        //$imagestipos = $this->Projetosimages->Imagestipos->find('list', ['limit' => 200]);
        $this->set(compact('sistemaprostepsimg', 'sistemaprosteps', 'imagestipos'));
    }
}
