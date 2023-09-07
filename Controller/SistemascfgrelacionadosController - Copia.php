<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemascfgrelacionados Controller
 *
 * @property \App\Model\Table\SistemascfgrelacionadosTable $Sistemascfgrelacionados
 *
 * @method \App\Model\Entity\Sistemascfgrelacionado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemascfgrelacionadosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas']
        ];
        $sistemascfgrelacionados = $this->paginate($this->Sistemascfgrelacionados);

        $this->set(compact('sistemascfgrelacionados'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemascfgrelacionado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemascfgrelacionado = $this->Sistemascfgrelacionados->get($id, [
            'contain' => ['Sistemas']
        ]);

        $this->set('sistemascfgrelacionado', $sistemascfgrelacionado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemascfgrelacionado = $this->Sistemascfgrelacionados->newEntity();
        if ($this->request->is('post')) {
            $sistemascfgrelacionado = $this->Sistemascfgrelacionados->patchEntity($sistemascfgrelacionado, $this->request->getData());
             $sistemascfgrelacionado->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemascfgrelacionados->save($sistemascfgrelacionado)) {
                $this->Flash->success(__('The sistemascfgrelacionado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemascfgrelacionado could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgrelacionados->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgrelacionado', 'sistemas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemascfgrelacionado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemascfgrelacionado = $this->Sistemascfgrelacionados->get($id, [
            'contain' => ['sistemas']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemascfgrelacionado = $this->Sistemascfgrelacionados->patchEntity($sistemascfgrelacionado, $this->request->getData());
            if ($this->Sistemascfgrelacionados->save($sistemascfgrelacionado)) {
                $this->Flash->success(__('The sistemascfgrelacionado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemascfgrelacionado could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemascfgrelacionados->Sistemas->find('list', ['limit' => 200]);
        $this->set(compact('sistemascfgrelacionado', 'sistemas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemascfgrelacionado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemascfgrelacionado = $this->Sistemascfgrelacionados->get($id);
        if ($this->Sistemascfgrelacionados->delete($sistemascfgrelacionado)) {
            $this->Flash->success(__('The sistemascfgrelacionado has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemascfgrelacionado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
