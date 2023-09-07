<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosparetos Controller
 *
 * @property \App\Model\Table\ProjetosparetosTable $Projetosparetos
 *
 * @method \App\Model\Entity\Projetospareto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosparetosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetos', 'Paretos']
        ];
        $projetosparetos = $this->paginate($this->Projetosparetos);

        $this->set(compact('projetosparetos'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetospareto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetospareto = $this->Projetosparetos->get($id, [
            'contain' => ['Projetos', 'Paretos']
        ]);

        $this->set('projetospareto', $projetospareto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $projetospareto = $this->Projetosparetos->newEntity();
        if ($this->request->is('post')) {
            $projetospareto = $this->Projetosparetos->patchEntity($projetospareto, $this->request->getData());
              $projetospareto->projeto_id = $id;
            if ($this->Projetosparetos->save($projetospareto)) {
                $this->Flash->success(__('The projetospareto has been saved.'));

                //return $this->redirect(['controller'=>'Projetos','action' => 'index']);
                return $this->redirect(['controller'=>'Projetos','action' => 'view',$id]);
            }
            $this->Flash->error(__('The projetospareto could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosparetos->Projetos->find('list', ['limit' => 200]);
        $paretos = $this->Projetosparetos->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('projetospareto', 'projetos', 'paretos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetospareto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetospareto = $this->Projetosparetos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetospareto = $this->Projetosparetos->patchEntity($projetospareto, $this->request->getData());
            $projetoid = $projetospareto->projeto_id;
            if ($this->Projetosparetos->save($projetospareto)) {
                $this->Flash->success(__('The projetospareto has been saved.'));

                //return $this->redirect(['controller'=>'Projetos','action' => 'index']);
                return $this->redirect(['controller'=>'Projetos','action' => 'view',$projetoid]);

            }
            $this->Flash->error(__('The projetospareto could not be saved. Please, try again.'));
        }
        $projetos = $this->Projetosparetos->Projetos->find('list', ['limit' => 200]);
        $paretos = $this->Projetosparetos->Paretos->find('list', ['limit' => 200]);
        $this->set(compact('projetospareto', 'projetos', 'paretos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetospareto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetospareto = $this->Projetosparetos->get($id);
        $projetoid = $projetospareto->projeto_id;
        if ($this->Projetosparetos->delete($projetospareto)) {
            $this->Flash->success(__('The projetospareto has been deleted.'));
        } else {
            $this->Flash->error(__('The projetospareto could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Projetos','action' => 'view',$projetoid]);
    }
}
