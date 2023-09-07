<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ViewProjetotimings Controller
 *
 * @property \App\Model\Table\ViewProjetotimingsTable $ViewProjetotimings
 *
 * @method \App\Model\Entity\ViewProjetotiming[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ViewProjetotimingsController extends AppController
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
        $viewProjetotimings = $this->paginate($this->ViewProjetotimings);

        $this->set(compact('viewProjetotimings'));
    }

    /**
     * View method
     *
     * @param string|null $id View Projetotiming id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $viewProjetotiming = $this->ViewProjetotimings->get($id, [
            'contain' => ['Projetos']
        ]);

        $this->set('viewProjetotiming', $viewProjetotiming);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $viewProjetotiming = $this->ViewProjetotimings->newEntity();
        if ($this->request->is('post')) {
            $viewProjetotiming = $this->ViewProjetotimings->patchEntity($viewProjetotiming, $this->request->getData());
            if ($this->ViewProjetotimings->save($viewProjetotiming)) {
                $this->Flash->success(__('The view projetotiming has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The view projetotiming could not be saved. Please, try again.'));
        }
        $projetos = $this->ViewProjetotimings->Projetos->find('list', ['limit' => 200]);
        $this->set(compact('viewProjetotiming', 'projetos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id View Projetotiming id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $viewProjetotiming = $this->ViewProjetotimings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $viewProjetotiming = $this->ViewProjetotimings->patchEntity($viewProjetotiming, $this->request->getData());
            if ($this->ViewProjetotimings->save($viewProjetotiming)) {
                $this->Flash->success(__('The view projetotiming has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The view projetotiming could not be saved. Please, try again.'));
        }
        $projetos = $this->ViewProjetotimings->Projetos->find('list', ['limit' => 200]);
        $this->set(compact('viewProjetotiming', 'projetos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id View Projetotiming id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $viewProjetotiming = $this->ViewProjetotimings->get($id);
        if ($this->ViewProjetotimings->delete($viewProjetotiming)) {
            $this->Flash->success(__('The view projetotiming has been deleted.'));
        } else {
            $this->Flash->error(__('The view projetotiming could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
