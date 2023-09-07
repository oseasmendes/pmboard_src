<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;

/**
 * Projetosprodutosentregasimgs Controller
 *
 * @property \App\Model\Table\ProjetosprodutosentregasimgsTable $Projetosprodutosentregasimgs
 *
 * @method \App\Model\Entity\Projetosprodutosentregasimg[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosentregasimgsController extends AppController
{
    
    public function initialize() 
    {
        parent::initialize();
        $this->loadComponent('Upload');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosentregas']
        ];
        $projetosprodutosentregasimgs = $this->paginate($this->Projetosprodutosentregasimgs);

        $this->set(compact('projetosprodutosentregasimgs'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosentregasimg id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosentregasimg = $this->Projetosprodutosentregasimgs->get($id, [
            'contain' => ['Projetosprodutosentregas']
        ]);

        $this->set('projetosprodutosentregasimg', $projetosprodutosentregasimg);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
   

     public function add($id = null)
    {
        $projetosprodutosentregasimg = $this->Projetosprodutosentregasimgs->newEntity();
        if ($this->request->is('post')) {

            $this->projetosprodutosentrega_id = $id;
           // $projetosprodutosentregasimg = $this->Projetosprodutosentregasimgs->patchEntity($projetosprodutosentregasimg, $this->request->getData());
           // if ($this->Projetosprodutosentregasimgs->save($projetosprodutosentregasimg)) {
            //    $this->Flash->success(__('The projetosprodutosentregasimg has been saved.'));

              //  $this->Upload->upload($this->request->data['image'],$this->request->data['projetosprodutoentrega_id']);

            $this->Upload->upload($this->request->data['image'],$id);

       //         return $this->redirect(['action' => 'index']);

                return $this->redirect(['controller'=>'projetosprodutosentregas','action' => 'view',$id]);

                
            //}
           // $this->Flash->error(__('The projetosprodutosentregasimg could not be saved. Please, try again.'));
        }
        
        $projetosprodutosentregas = $this->Projetosprodutosentregasimgs->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')));


        $this->set(compact('projetosprodutosentregasimg', 'projetosprodutosentregas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosentregasimg id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosentregasimg = $this->Projetosprodutosentregasimgs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosentregasimg = $this->Projetosprodutosentregasimgs->patchEntity($projetosprodutosentregasimg, $this->request->getData());
            if ($this->Projetosprodutosentregasimgs->save($projetosprodutosentregasimg)) {
                $this->Flash->success(__('The projetosprodutosentregasimg has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosentregasimg could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosprodutosentregasimgs->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosentregasimg', 'projetosprodutosentregas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosentregasimg id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosentregasimg = $this->Projetosprodutosentregasimgs->get($id);
        if ($this->Projetosprodutosentregasimgs->delete($projetosprodutosentregasimg)) {
            $this->Flash->success(__('The projetosprodutosentregasimg has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosentregasimg could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
