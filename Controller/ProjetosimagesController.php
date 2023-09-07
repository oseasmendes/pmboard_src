<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;
/**
 * Projetosimages Controller
 *
 * @property \App\Model\Table\ProjetosimagesTable $Projetosimages
 *
 * @method \App\Model\Entity\Projetosimage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosimagesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

     public function initialize() 
    {
        parent::initialize();
        $this->loadComponent('Uploadprojetos');
    }


    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Imagestipos']
        ];
        $projetosimages = $this->paginate($this->Projetosimages);

        $this->set(compact('projetosimages'));
    }

     public function projetocatalogo($id=null)
    {        
         $this->paginate = [
                                 'contain' => ['Projetos', 'Imagestipos'],
                                 /*'limit' => 100, */             
                                  'conditions' => ['projeto_id = '=>$id],       
                                  'order' => [
                                'Projetosimages.created' => 'desc']];
                        
                            $projetosimages = $this->paginate($this->Projetosimages);
                            

        $this->set(compact('projetosimages','projetos','imagestipos'));
    }


    /**
     * View method
     *
     * @param string|null $id Projetosimage id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosimage = $this->Projetosimages->get($id, [
            'contain' => ['Projetos', 'Imagestipos']
        ]);

        $this->set('projetosimage', $projetosimage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosimage = $this->Projetosimages->newEntity();
        if ($this->request->is('post')) {

            $this->projetos_id = $id;           

            $this->Uploadprojetos->upload($this->request->data['image'],$id);

       //         return $this->redirect(['action' => 'index']);

                return $this->redirect(['controller'=>'projetos','action' => 'view',$id]);

                
            //}
           // $this->Flash->error(__('The projetosprodutosentregasimg could not be saved. Please, try again.'));

            
        }
        
        $projetos = $this->Projetosimages->Projetos->find('list',array('conditions'=>array('Projetos.id'=>$id),'order' => array('Descricao' => 'asc')));;
        //$imagestipos = $this->Projetosimages->Imagestipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosimage', 'projetos', 'imagestipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosimage id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosimage = $this->Projetosimages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosimage = $this->Projetosimages->patchEntity($projetosimage, $this->request->getData());

            $projetoid = $projetosimage->projeto_id;

            if ($this->Projetosimages->save($projetosimage)) {
                $this->Flash->success(__('The projetosimage has been saved.'));

                //return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller'=>'Projetos','action' => 'view',$projetoid]);
            }
            $this->Flash->error(__('The projetosimage could not be saved. Please, try again.'));
        }

       $projetos = $this->Projetosimages->Projetos->find('list',array('conditions'=>array('Projetos.id'=>$projetosimage->projeto_id),'order' => array('Descricao' => 'asc')));
        $imagestipos = $this->Projetosimages->Imagestipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosimage', 'projetos', 'imagestipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosimage id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosimage = $this->Projetosimages->get($id);
        if ($this->Projetosimages->delete($projetosimage)) {
            $this->Flash->success(__('The projetosimage has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosimage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
