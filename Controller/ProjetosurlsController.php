<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosurls Controller
 *
 * @property \App\Model\Table\ProjetosurlsTable $Projetosurls
 *
 * @method \App\Model\Entity\Projetosurl[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosurlsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos']
        ];
        $projetosurls = $this->paginate($this->Projetosurls);

        $this->set(compact('projetosurls'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosurl id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosurl = $this->Projetosurls->get($id, [
            'contain' => ['Projetos']
        ]);

        $this->set('projetosurl', $projetosurl);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosurl = $this->Projetosurls->newEntity();
        if ($this->request->is('post')) {
            $projetosurl = $this->Projetosurls->patchEntity($projetosurl, $this->request->getData());
            if ($this->Projetosurls->save($projetosurl)) {
                $this->Flash->success(__('The projetosurl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosurl could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosurls->Projetos->find('list', ['limit' => 200]);
        $this->set(compact('projetosurl', 'projetos'));
    }

    public function addid($id = null)
    {
        $projetosurl = $this->Projetosurls->newEntity();
        if ($this->request->is('post')) {
            $projetosurl = $this->Projetosurls->patchEntity($projetosurl, $this->request->getData());
            $projetosurl->projeto_id = $id;
            if ($this->Projetosurls->save($projetosurl)) {
                $this->Flash->success(__('The projetosurl has been saved.'));

               // return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller'=>'Projetos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetosurl could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosurls->Projetos->find('list',array('conditions'=>array('Projetos.id'=>$id),'order' => array('id' => 'asc')));
        $this->set(compact('projetosurl', 'projetos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosurl id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosurl = $this->Projetosurls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosurl = $this->Projetosurls->patchEntity($projetosurl, $this->request->getData());
            $projetoid = $projetosurl->projeto_id; 
            if ($this->Projetosurls->save($projetosurl)) {
                $this->Flash->success(__('The projetosurl has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Projetos','action' => 'view',$projetoid]);
            }
            $this->Flash->error(__('The projetosurl could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosurls->Projetos->find('list', ['limit' => 200]);
        $this->set(compact('projetosurl', 'projetos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosurl id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosurl = $this->Projetosurls->get($id);
        $projetoid = $projetosurl->projeto_id;
        if ($this->Projetosurls->delete($projetosurl)) {
            $this->Flash->success(__('The projetosurl has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosurl could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Projetos','action' => 'view',$projetoid]);
    }
}
