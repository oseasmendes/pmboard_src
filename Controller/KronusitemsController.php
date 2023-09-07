<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kronusitems Controller
 *
 * @property \App\Model\Table\KronusitemsTable $Kronusitems
 *
 * @method \App\Model\Entity\Kronusitem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KronusitemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Kronusplans', 'Consultores', 'Projetosprodutos', 'Projetosprodutosentregas', 'Projetos', 'Paretos', 'Flags', 'Fases']
        ];
        $kronusitems = $this->paginate($this->Kronusitems);

        $this->set(compact('kronusitems'));
    }

    /**
     * View method
     *
     * @param string|null $id Kronusitem id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kronusitem = $this->Kronusitems->get($id, [
            'contain' => ['Kronusplans', 'Consultores', 'Projetosprodutos', 'Projetosprodutosentregas', 'Projetos', 'Paretos', 'Flags', 'Fases']
        ]);

        $this->set('kronusitem', $kronusitem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kronusitem = $this->Kronusitems->newEntity();
        if ($this->request->is('post')) {
            $kronusitem = $this->Kronusitems->patchEntity($kronusitem, $this->request->getData());
            if ($this->Kronusitems->save($kronusitem)) {
                $this->Flash->success(__('The kronusitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kronusitem could not be saved. Please, try again.'));
        }
        $kronusplans = $this->Kronusitems->Kronusplans->find('list', ['limit' => 200]);
        $consultores = $this->Kronusitems->Consultores->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Kronusitems->Projetosprodutos->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Kronusitems->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $projetos = $this->Kronusitems->Projetos->find('list', ['limit' => 200]);
        $paretos = $this->Kronusitems->Paretos->find('list', ['limit' => 200]);
        $flags = $this->Kronusitems->Flags->find('list', ['limit' => 200]);
        $fases = $this->Kronusitems->Fases->find('list', ['limit' => 200]);
        $this->set(compact('kronusitem', 'kronusplans', 'consultores', 'projetosprodutos', 'projetosprodutosentregas', 'projetos', 'paretos', 'flags', 'fases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kronusitem id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kronusitem = $this->Kronusitems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kronusitem = $this->Kronusitems->patchEntity($kronusitem, $this->request->getData());
            if ($this->Kronusitems->save($kronusitem)) {
                $this->Flash->success(__('The kronusitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kronusitem could not be saved. Please, try again.'));
        }
        $kronusplans = $this->Kronusitems->Kronusplans->find('list', ['limit' => 200]);
        $consultores = $this->Kronusitems->Consultores->find('list', ['limit' => 200]);
        $projetosprodutos = $this->Kronusitems->Projetosprodutos->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Kronusitems->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $projetos = $this->Kronusitems->Projetos->find('list', ['limit' => 200]);
        $paretos = $this->Kronusitems->Paretos->find('list', ['limit' => 200]);
        $flags = $this->Kronusitems->Flags->find('list', ['limit' => 200]);
        $fases = $this->Kronusitems->Fases->find('list', ['limit' => 200]);
        $this->set(compact('kronusitem', 'kronusplans', 'consultores', 'projetosprodutos', 'projetosprodutosentregas', 'projetos', 'paretos', 'flags', 'fases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kronusitem id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $kronusitem = $this->Kronusitems->get($id);
        if ($this->Kronusitems->delete($kronusitem)) {
            $this->Flash->success(__('The kronusitem has been deleted.'));
        } else {
            $this->Flash->error(__('The kronusitem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
