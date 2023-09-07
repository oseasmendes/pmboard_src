<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;


/**
 * Projetosprodutosimgs Controller
 *
 * @property \App\Model\Table\ProjetosprodutosimgsTable $Projetosprodutosimgs
 *
 * @method \App\Model\Entity\Projetosprodutosimg[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosimgsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

      public function initialize() 
    {
        parent::initialize();
        $this->loadComponent('Uploadprojetosprodutos');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutos']
        ];
        $projetosprodutosimgs = $this->paginate($this->Projetosprodutosimgs);

        $this->set(compact('projetosprodutosimgs'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutosimg id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutosimg = $this->Projetosprodutosimgs->get($id, [
            'contain' => ['Projetosprodutos']
        ]);

        $this->set('projetosprodutosimg', $projetosprodutosimg);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosprodutosimg = $this->Projetosprodutosimgs->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutosimg = $this->Projetosprodutosimgs->patchEntity($projetosprodutosimg, $this->request->getData());            
            if ($this->Projetosprodutosimgs->save($projetosprodutosimg)) {
                $this->Flash->success(__('The projetosprodutosimg has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutosimg could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosimgs->Projetosprodutos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosimg', 'projetosprodutos'));
    }


    public function addimg($id = null)
    {
        $projetosprodutosimg = $this->Projetosprodutosimgs->newEntity();
                 

        if ($this->request->is('post')) {
             $this->projetosproduto_id = $id;  
           
            $this->Uploadprojetosprodutos->upload($this->request->data['image'],$id);

       //         return $this->redirect(['action' => 'index']);

                return $this->redirect(['controller'=>'projetosprodutos','action' => 'view',$id]);

                
            //}
           // $this->Flash->error(__('The projetosprodutosentregasimg could not be saved. Please, try again.'));

            
        }
        
        $projetosprodutos = $this->Projetosprodutosimgs->Projetosprodutos->find('list',array('conditions'=>array('Projetosprodutos.id'=>$id),'order' => array('Descricao' => 'asc')));;
        //$imagestipos = $this->Projetosimages->Imagestipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosimg', 'projetosprodutos', 'imagestipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutosimg id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutosimg = $this->Projetosprodutosimgs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutosimg = $this->Projetosprodutosimgs->patchEntity($projetosprodutosimg, $this->request->getData());
            $projetosprodutosimg->imagemoriginalid = $id;
            $produtoid = $projetosprodutosimg->projetosproduto_id;
            if ($this->Projetosprodutosimgs->save($projetosprodutosimg)) {
                $this->Flash->success(__('The projetosprodutosimg has been saved.'));

                //return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller'=>'projetosprodutos','action' => 'view',$produtoid]);
            }
            $this->Flash->error(__('The projetosprodutosimg could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosimgs->Projetosprodutos->find('list', ['limit' => 200]);
        $this->set(compact('projetosprodutosimg', 'projetosprodutos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutosimg id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutosimg = $this->Projetosprodutosimgs->get($id);
        if ($this->Projetosprodutosimgs->delete($projetosprodutosimg)) {
            $this->Flash->success(__('The projetosprodutosimg has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutosimg could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
