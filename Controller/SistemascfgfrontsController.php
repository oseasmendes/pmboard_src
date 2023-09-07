<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemascfgfronts Controller
 *
 * @property \App\Model\Table\SistemascfgfrontsTable $Sistemascfgfronts
 *
 * @method \App\Model\Entity\Sistemascfgfront[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemascfgfrontsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tecnologias', 'Sistemas']
        ];
        $sistemascfgfronts = $this->paginate($this->Sistemascfgfronts);

        $this->set(compact('sistemascfgfronts'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemascfgfront id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemascfgfront = $this->Sistemascfgfronts->get($id, [
            'contain' => ['Tecnologias', 'Sistemas']
        ]);

        $this->set('sistemascfgfront', $sistemascfgfront);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemascfgfront = $this->Sistemascfgfronts->newEntity();
        if ($this->request->is('post')) {
            $sistemascfgfront = $this->Sistemascfgfronts->patchEntity($sistemascfgfront, $this->request->getData());
              $sistemascfgfront->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemascfgfronts->save($sistemascfgfront)) {
                $this->Flash->success(__('The sistemascfgfront has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemascfgfront could not be saved. Please, try again.'));
        }
        $tecnologias = $this->Sistemascfgfronts->Tecnologias->find('list', ['limit' => 200]);
        $sistemas = $this->Sistemascfgfronts->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgfront', 'tecnologias', 'sistemas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemascfgfront id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemascfgfront = $this->Sistemascfgfronts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemascfgfront = $this->Sistemascfgfronts->patchEntity($sistemascfgfront, $this->request->getData());
            if ($this->Sistemascfgfronts->save($sistemascfgfront)) {
                $this->Flash->success(__('The sistemascfgfront has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemascfgfront could not be saved. Please, try again.'));
        }
        $tecnologias = $this->Sistemascfgfronts->Tecnologias->find('list', ['limit' => 200]);
        $sistemas = $this->Sistemascfgfronts->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgfront', 'tecnologias', 'sistemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemascfgfront id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemascfgfront = $this->Sistemascfgfronts->get($id);
        if ($this->Sistemascfgfronts->delete($sistemascfgfront)) {
            $this->Flash->success(__('The sistemascfgfront has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemascfgfront could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
