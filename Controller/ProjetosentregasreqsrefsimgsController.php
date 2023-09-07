<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregasreqsrefsimgs Controller
 *
 * @property \App\Model\Table\ProjetosentregasreqsrefsimgsTable $Projetosentregasreqsrefsimgs
 *
 * @method \App\Model\Entity\Projetosentregasreqsrefsimg[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasreqsrefsimgsController extends AppController
{
    public function initialize() 
    {
        parent::initialize();
        $this->loadComponent('Uploadentregasreqsrefsimgs');
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosentregasreqsrefs', 'Imagestipos']
        ];


        $projetosentregasreqsrefsimgs = $this->paginate($this->Projetosentregasreqsrefsimgs);

        $this->set(compact('projetosentregasreqsrefsimgs'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregasreqsrefsimg id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregasreqsrefsimg = $this->Projetosentregasreqsrefsimgs->get($id, [
            'contain' => ['Projetosentregasreqsrefs', 'Imagestipos']
        ]);

        $this->set('projetosentregasreqsrefsimg', $projetosentregasreqsrefsimg);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosentregasreqsrefsimg = $this->Projetosentregasreqsrefsimgs->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasreqsrefsimg = $this->Projetosentregasreqsrefsimgs->patchEntity($projetosentregasreqsrefsimg, $this->request->getData());
            if ($this->Projetosentregasreqsrefsimgs->save($projetosentregasreqsrefsimg)) {
                $this->Flash->success(__('The projetosentregasreqsrefsimg has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregasreqsrefsimg could not be saved. Please, try again.'));
        }
        
        $projetosentregasreqsrefs = $this->Projetosentregasreqsrefsimgs->Projetosentregasreqsrefs->find('list', array('conditions'=>array('Projetosentregasreqsrefs.id'=>$id),'order' => array('Projetosentregasreqsrefs.id' => 'asc')));
        $imagestipos = $this->Projetosentregasreqsrefsimgs->Imagestipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreqsrefsimg', 'projetosentregasreqsrefs', 'imagestipos'));
    }

    public function addid($id = null)
    {
        $projetosentregasreqsrefsimg = $this->Projetosentregasreqsrefsimgs->newEntity();
                 

           if ($this->request->is('post')) {
             $this->projetosentregasreqsref_id = $id;  
           
            $this->Uploadentregasreqsrefsimgs->upload($this->request->data['image'],$id);
            return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$id]);
        
            }

            $projetosentregasreqsrefs = $this->Projetosentregasreqsrefsimgs->Projetosentregasreqsrefs->find('list', array('conditions'=>array('Projetosentregasreqsrefs.id'=>$id),'order' => array('Projetosentregasreqsrefs.id' => 'asc')));
            $this->set(compact('projetosentregasreqsrefsimg', 'projetosentregasreqsrefs', 'imagestipos'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosentregasreqsrefsimg id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregasreqsrefsimg = $this->Projetosentregasreqsrefsimgs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregasreqsrefsimg = $this->Projetosentregasreqsrefsimgs->patchEntity($projetosentregasreqsrefsimg, $this->request->getData());
            if ($this->Projetosentregasreqsrefsimgs->save($projetosentregasreqsrefsimg)) {
                $this->Flash->success(__('The projetosentregasreqsrefsimg has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregasreqsrefsimg->projetosentregasreqsref_id]);
            }
            $this->Flash->error(__('The projetosentregasreqsrefsimg could not be saved. Please, try again.'));
        }
        //$projetosentregasreqsreves = $this->Projetosentregasreqsrefsimgs->Projetosentregasreqsreves->find('list', ['limit' => 200]);
        $projetosentregasreqsrefs = $this->Projetosentregasreqsrefsimgs->Projetosentregasreqsrefs->find('list', array('conditions'=>array('Projetosentregasreqsrefs.id'=>$projetosentregasreqsrefsimg->projetosentregasreqsref_id),'order' => array('Projetosentregasreqsrefs.id' => 'asc')));
        $imagestipos = $this->Projetosentregasreqsrefsimgs->Imagestipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasreqsrefsimg', 'projetosentregasreqsrefs', 'imagestipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregasreqsrefsimg id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregasreqsrefsimg = $this->Projetosentregasreqsrefsimgs->get($id);        

        if ($this->Projetosentregasreqsrefsimgs->delete($projetosentregasreqsrefsimg)) {
            

            $caminhofull = WWW_ROOT.DS.'img'.DS.'entregasreqsrefsimgs'.DS.$projetosentregasreqsrefsimg->projetosentregasreqsref_id.DS.$projetosentregasreqsrefsimg->imagem;

            clearstatcache();
            if (file_exists($caminhofull))
            {
             //   echo "OK".$caminhofull;

                    $arquivo = $projetosentregasreqsrefsimg->imagem;
                    if (!unlink($caminhofull))
                    {
                    echo ("Erro ao deletar $arquivo");
                    }
                    else
                    {
                    $this->Flash->success(__('The projetosentregasreqsrefsimg has been deleted.'));
                    //echo ("Deletado $arquivo com sucesso!");
                    }

            }
            else
            {
                echo "Arquivo não localizado no disco: ".$caminhofull;
            }         


        } else {
            $this->Flash->error(__('The projetosentregasreqsrefsimg could not be deleted. Please, try again.'));
        }  

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Projetosentregasreqsrefs','action' => 'view',$projetosentregasreqsrefsimg->projetosentregasreqsref_id]);

    }
}
