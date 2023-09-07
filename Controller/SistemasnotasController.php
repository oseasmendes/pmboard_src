<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sistemasnotas Controller
 *
 * @property \App\Model\Table\SistemasnotasTable $Sistemasnotas
 *
 * @method \App\Model\Entity\Sistemasnota[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasnotasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemas', 'Notatipos']
        ];
        $sistemasnotas = $this->paginate($this->Sistemasnotas);

        $this->set(compact('sistemasnotas'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasnota id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasnota = $this->Sistemasnotas->get($id, [
            'contain' => ['Sistemas', 'Notatipos']
        ]);

        $this->set('sistemasnota', $sistemasnota);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $sistemasnota = $this->Sistemasnotas->newEntity();
         $sistemasnota->sistema_id = $id; 
        if ($this->request->is('post')) {
            $sistemasnota = $this->Sistemasnotas->patchEntity($sistemasnota, $this->request->getData());
            $sistemasnota->sistema_id = $id; //alteração para fazer add da pagina de projetos
            if ($this->Sistemasnotas->save($sistemasnota)) {
                $this->Flash->success(__('The sistemasnota has been saved.'));
                
                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemasnota could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasnotas->Sistemas->find('list', ['limit' => 200]);
        $notatipos = $this->Sistemasnotas->Notatipos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasnota', 'sistemas', 'notatipos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasnota id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasnota = $this->Sistemasnotas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasnota = $this->Sistemasnotas->patchEntity($sistemasnota, $this->request->getData());
            if ($this->Sistemasnotas->save($sistemasnota)) {
                $this->Flash->success(__('The sistemasnota has been saved.'));

                
                return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sistemasnota->sistema_id]);
            }
            $this->Flash->error(__('The sistemasnota could not be saved. Please, try again.'));
        }
        $sistemas = $this->Sistemasnotas->Sistemas->find('list', ['limit' => 200]);
        $notatipos = $this->Sistemasnotas->Notatipos->find('list', ['limit' => 200]);
        $this->set(compact('sistemasnota', 'sistemas', 'notatipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasnota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasnota = $this->Sistemasnotas->get($id);
        if ($this->Sistemasnotas->delete($sistemasnota)) {
            $this->Flash->success(__('The sistemasnota has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasnota could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller'=>'Sistemas','action' => 'view',$sistemasnota->sistema_id]);
    }
}
