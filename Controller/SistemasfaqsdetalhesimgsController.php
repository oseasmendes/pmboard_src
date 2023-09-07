<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasfaqsdetalhesimgs Controller
 *
 * @property \App\Model\Table\SistemasfaqsdetalhesimgsTable $Sistemasfaqsdetalhesimgs
 *
 * @method \App\Model\Entity\Sistemasfaqsdetalhesimg[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasfaqsdetalhesimgsController extends AppController
{
    public function initialize() 
    {
        parent::initialize();
        $this->loadComponent('Uploadimgsistemasfaqsdetalhe');
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemasfaqsdetalhes', 'Imagestipos']
        ];
        $sistemasfaqsdetalhesimgs = $this->paginate($this->Sistemasfaqsdetalhesimgs);

        $this->set(compact('sistemasfaqsdetalhesimgs'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasfaqsdetalhesimg id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasfaqsdetalhesimg = $this->Sistemasfaqsdetalhesimgs->get($id, [
            'contain' => ['Sistemasfaqsdetalhes', 'Imagestipos']
        ]);

        $this->set('sistemasfaqsdetalhesimg', $sistemasfaqsdetalhesimg);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasfaqsdetalhesimg = $this->Sistemasfaqsdetalhesimgs->newEntity();
        if ($this->request->is('post')) {
            $sistemasfaqsdetalhesimg = $this->Sistemasfaqsdetalhesimgs->patchEntity($sistemasfaqsdetalhesimg, $this->request->getData());
            if ($this->Sistemasfaqsdetalhesimgs->save($sistemasfaqsdetalhesimg)) {
                $this->Flash->success(__('The sistemasfaqsdetalhesimg has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasfaqsdetalhesimg could not be saved. Please, try again.'));
        }
        $sistemasfaqsdetalhes = $this->Sistemasfaqsdetalhesimgs->Sistemasfaqsdetalhes->find('list', ['limit' => 200]);
        $imagestipos = $this->Sistemasfaqsdetalhesimgs->Imagestipos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasfaqsdetalhesimg', 'sistemasfaqsdetalhes', 'imagestipos'));
    }


    public function addid($id = null)
    {
        $sistemasfaqsdetalhesimg = $this->Sistemasfaqsdetalhesimgs->newEntity();
                 

           if ($this->request->is('post')) {
             $this->sistemasfaqsdetalhe_id = $id;  
           
            $this->Uploadimgsistemasfaqsdetalhe->upload($this->request->data['image'],$id);
            return $this->redirect(['controller' => 'Sistemasfaqsdetalhes','action' => 'view',$id]);
        
            }

          
            $sistemasfaqsdetalhes = $this->Sistemasfaqsdetalhesimgs->Sistemasfaqsdetalhes->find('list', array('conditions'=>array('Sistemasfaqsdetalhes.id'=>$id),'order' => array('Sistemasfaqsdetalhes.id' => 'asc')));
            
            $imagestipos = $this->Sistemasfaqsdetalhesimgs->Imagestipos->find('list', ['limit' => 200]);
            $this->set(compact('sistemasfaqsdetalhesimg', 'sistemasfaqsdetalhes', 'imagestipos'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasfaqsdetalhesimg id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasfaqsdetalhesimg = $this->Sistemasfaqsdetalhesimgs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasfaqsdetalhesimg = $this->Sistemasfaqsdetalhesimgs->patchEntity($sistemasfaqsdetalhesimg, $this->request->getData());
            $id_detalhe = $sistemasfaqsdetalhesimg-> sistemasfaqsdetalhe_id;
            if ($this->Sistemasfaqsdetalhesimgs->save($sistemasfaqsdetalhesimg)) {
                $this->Flash->success(__('The sistemasfaqsdetalhesimg has been saved.'));


                return $this->redirect(['controller' => 'Sistemasfaqsdetalhes','action' => 'view',$id_detalhe]);
            }
            $this->Flash->error(__('The sistemasfaqsdetalhesimg could not be saved. Please, try again.'));
        }
        $sistemasfaqsdetalhes = $this->Sistemasfaqsdetalhesimgs->Sistemasfaqsdetalhes->find('list', ['limit' => 200]);
        $imagestipos = $this->Sistemasfaqsdetalhesimgs->Imagestipos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasfaqsdetalhesimg', 'sistemasfaqsdetalhes', 'imagestipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasfaqsdetalhesimg id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasfaqsdetalhesimg = $this->Sistemasfaqsdetalhesimgs->get($id);
        $id_detalhe = $sistemasfaqsdetalhesimg-> sistemasfaqsdetalhe_id;  
        if ($this->Sistemasfaqsdetalhesimgs->delete($sistemasfaqsdetalhesimg)) {
            $this->Flash->success(__('The sistemasfaqsdetalhesimg has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasfaqsdetalhesimg could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller' => 'Sistemasfaqsdetalhes','action' => 'view',$id_detalhe]);
    }
}
