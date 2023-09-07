<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosprodutosparetos Controller
 *
 * @property \App\Model\Table\ProjetosprodutosparetosTable $Projetosprodutosparetos
 *
 * @method \App\Model\Entity\Projetosprodutospareto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosprodutosparetosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutos', 'Paretos']
        ];
        $projetosprodutosparetos = $this->paginate($this->Projetosprodutosparetos);

        $this->set(compact('projetosprodutosparetos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosprodutospareto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosprodutospareto = $this->Projetosprodutosparetos->get($id, [
            'contain' => ['Projetosprodutos', 'Paretos']
        ]);

        $this->set('projetosprodutospareto', $projetosprodutospareto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetosprodutospareto = $this->Projetosprodutosparetos->newEntity();
        if ($this->request->is('post')) {
            $projetosprodutospareto = $this->Projetosprodutosparetos->patchEntity($projetosprodutospareto, $this->request->getData());
              $projetosprodutospareto->projetosproduto_id = $id;
            if ($this->Projetosprodutosparetos->save($projetosprodutospareto)) {
                $this->Flash->success(__('The projetosprodutospareto has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'projetosprodutos','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetosprodutospareto could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosparetos->Projetosprodutos->find('list', ['limit' => 200]);
        //$paretos = $this->Projetosprodutosparetos->Paretos->find('list', ['limit' => 200]);

        $paretos = $this->Projetosprodutosparetos->Paretos->find('list',
        array('conditions'=>array('Paretos.ativo'=>1),
                        //'fields'=>'Paretos.Kanban',
                        'order'=>'Paretos.Kanban ASC',
                        'limit'=>20,
                        'recursive'=>0));


        $this->set(compact('projetosprodutospareto', 'projetosprodutos', 'paretos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosprodutospareto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosprodutospareto = $this->Projetosprodutosparetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosprodutospareto = $this->Projetosprodutosparetos->patchEntity($projetosprodutospareto, $this->request->getData());
            if ($this->Projetosprodutosparetos->save($projetosprodutospareto)) {
                $this->Flash->success(__('The projetosprodutospareto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosprodutospareto could not be saved. Please, try again.'));
        }
        $projetosprodutos = $this->Projetosprodutosparetos->Projetosprodutos->find('list', ['limit' => 200]);
        //$paretos = $this->Projetosprodutosparetos->Paretos->find('list', ['limit' => 200]);

          $paretos = $this->Projetosprodutosparetos->Paretos->find('list',
        array('conditions'=>array('Paretos.ativo'=>1),
                        //'fields'=>'Paretos.Kanban',
                        'order'=>'Paretos.Kanban ASC',
                        'limit'=>20,
                        'recursive'=>0));
        
        $this->set(compact('projetosprodutospareto', 'projetosprodutos', 'paretos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosprodutospareto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosprodutospareto = $this->Projetosprodutosparetos->get($id);
        if ($this->Projetosprodutosparetos->delete($projetosprodutospareto)) {
            $this->Flash->success(__('The projetosprodutospareto has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosprodutospareto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
