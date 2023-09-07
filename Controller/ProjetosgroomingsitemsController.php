<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosgroomingsitems Controller
 *
 * @property \App\Model\Table\ProjetosgroomingsitemsTable $Projetosgroomingsitems
 *
 * @method \App\Model\Entity\Projetosgroomingsitem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosgroomingsitemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosgroomings', 'Projetosprodutosentregas', 'Statusfuntionals']
        ];
        $projetosgroomingsitems = $this->paginate($this->Projetosgroomingsitems);

        $this->set(compact('projetosgroomingsitems'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosgroomingsitem id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosgroomingsitem = $this->Projetosgroomingsitems->get($id, [
            'contain' => ['Projetosgroomings', 'Projetosprodutosentregas', 'Statusfuntionals']
        ]);

        $this->set('projetosgroomingsitem', $projetosgroomingsitem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosgroomingsitem = $this->Projetosgroomingsitems->newEntity();
        if ($this->request->is('post')) {
            $projetosgroomingsitem = $this->Projetosgroomingsitems->patchEntity($projetosgroomingsitem, $this->request->getData());
            if ($this->Projetosgroomingsitems->save($projetosgroomingsitem)) {
                $this->Flash->success(__('The projetosgroomingsitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosgroomingsitem could not be saved. Please, try again.'));
        }
        $projetosgroomings = $this->Projetosgroomingsitems->Projetosgroomings->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosgroomingsitems->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $statusfuntionals = $this->Projetosgroomingsitems->Statusfuntionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosgroomingsitem', 'projetosgroomings', 'projetosprodutosentregas', 'statusfuntionals'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Projetosgroomingsitem id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosgroomingsitem = $this->Projetosgroomingsitems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosgroomingsitem = $this->Projetosgroomingsitems->patchEntity($projetosgroomingsitem, $this->request->getData());
            if ($this->Projetosgroomingsitems->save($projetosgroomingsitem)) {
                $this->Flash->success(__('The projetosgroomingsitem has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosgroomingsitem could not be saved. Please, try again.'));
        }
        $projetosgroomings = $this->Projetosgroomingsitems->Projetosgroomings->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosgroomingsitems->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $statusfuntionals = $this->Projetosgroomingsitems->Statusfuntionals->find('list', ['limit' => 200]);
        $this->set(compact('projetosgroomingsitem', 'projetosgroomings', 'projetosprodutosentregas', 'statusfuntionals'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosgroomingsitem id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosgroomingsitem = $this->Projetosgroomingsitems->get($id);
        if ($this->Projetosgroomingsitems->delete($projetosgroomingsitem)) {
            $this->Flash->success(__('The projetosgroomingsitem has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosgroomingsitem could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
