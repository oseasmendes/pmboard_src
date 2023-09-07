<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasdocs Controller
 *
 * @property \App\Model\Table\SistemasdocsTable $Sistemasdocs
 *
 * @method \App\Model\Entity\Sistemasdoc[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasdocsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Documentos']
        ];
        $sistemasdocs = $this->paginate($this->Sistemasdocs);

        $this->set(compact('sistemasdocs'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasdoc id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasdoc = $this->Sistemasdocs->get($id, [
            'contain' => ['Sistemas', 'Documentos']
        ]);

        $this->set('sistemasdoc', $sistemasdoc);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemasdoc = $this->Sistemasdocs->newEntity();
        if ($this->request->is('post')) {
            $sistemasdoc = $this->Sistemasdocs->patchEntity($sistemasdoc, $this->request->getData());
             $sistemasdoc->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemasdocs->save($sistemasdoc)) {
                $this->Flash->success(__('The sistemasdoc has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemasdoc could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasdocs->Sistemas->find('list', ['limit' => 200]);
        $documentos = $this->Sistemasdocs->Documentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasdoc', 'sistemas', 'documentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasdoc id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasdoc = $this->Sistemasdocs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasdoc = $this->Sistemasdocs->patchEntity($sistemasdoc, $this->request->getData());
            $iddoc = $sistemasdoc->sistema_id;
            if ($this->Sistemasdocs->save($sistemasdoc)) {
                $this->Flash->success(__('The sistemasdoc has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Sistemas','action' => 'view',$iddoc]);
            }
            $this->Flash->error(__('The sistemasdoc could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasdocs->Sistemas->find('list', ['limit' => 200]);
        $documentos = $this->Sistemasdocs->Documentos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasdoc', 'sistemas', 'documentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasdoc id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasdoc = $this->Sistemasdocs->get($id);
        $iddoc = $sistemasdoc->sistema_id;
        if ($this->Sistemasdocs->delete($sistemasdoc)) {
            $this->Flash->success(__('The sistemasdoc has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasdoc could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Sistemas','action' => 'view',$iddoc]);
    }
}
