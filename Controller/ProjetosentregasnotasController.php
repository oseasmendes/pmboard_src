<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Projetosentregasnotas Controller
 *
 * @property \App\Model\Table\ProjetosentregasnotasTable $Projetosentregasnotas
 *
 * @method \App\Model\Entity\Projetosentregasnota[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProjetosentregasnotasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Projetosprodutosentregas', 'Notatipos']
        ];
        $projetosentregasnotas = $this->paginate($this->Projetosentregasnotas);

        $this->set(compact('projetosentregasnotas'));
    }

    /**
     * View method
     *
     * @param string|null $id Projetosentregasnota id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $projetosentregasnota = $this->Projetosentregasnotas->get($id, [
            'contain' => ['Projetosprodutosentregas', 'Notatipos']
        ]);

        $this->set('projetosentregasnota', $projetosentregasnota);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $projetosentregasnota = $this->Projetosentregasnotas->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasnota = $this->Projetosentregasnotas->patchEntity($projetosentregasnota, $this->request->getData());
            if ($this->Projetosentregasnotas->save($projetosentregasnota)) {
                $this->Flash->success(__('The projetosentregasnota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregasnota could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosentregasnotas->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $notatipos = $this->Projetosentregasnotas->Notatipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasnota', 'projetosprodutosentregas', 'notatipos'));
    }

    public function addid($id = null)
    {
        $projetosentregasnota = $this->Projetosentregasnotas->newEntity();
        if ($this->request->is('post')) {
            $projetosentregasnota = $this->Projetosentregasnotas->patchEntity($projetosentregasnota, $this->request->getData());
            $projetosentregasnota->projetosprodutosentrega_id = $id;
            if ($this->Projetosentregasnotas->save($projetosentregasnota)) {
                $this->Flash->success(__('The projetosentregasnota has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'projetosprodutosentregas','action' => 'view',$id]);

            }
            $this->Flash->error(__('The projetosentregasnota could not be saved. Please, try again.'));
        }
        //$projetosprodutosentregas = $this->Projetosentregasnotas->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Projetosentregasnotas->Projetosprodutosentregas->find('list',array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')));
        $notatipos = $this->Projetosentregasnotas->Notatipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasnota', 'projetosprodutosentregas', 'notatipos'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Projetosentregasnota id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $projetosentregasnota = $this->Projetosentregasnotas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $projetosentregasnota = $this->Projetosentregasnotas->patchEntity($projetosentregasnota, $this->request->getData());
            if ($this->Projetosentregasnotas->save($projetosentregasnota)) {
                $this->Flash->success(__('The projetosentregasnota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The projetosentregasnota could not be saved. Please, try again.'));
        }
        $projetosprodutosentregas = $this->Projetosentregasnotas->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $notatipos = $this->Projetosentregasnotas->Notatipos->find('list', ['limit' => 200]);
        $this->set(compact('projetosentregasnota', 'projetosprodutosentregas', 'notatipos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Projetosentregasnota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $projetosentregasnota = $this->Projetosentregasnotas->get($id);
        $identrega = $projetosentregasnota->projetosprodutosentrega_id;
        if ($this->Projetosentregasnotas->delete($projetosentregasnota)) {
            $this->Flash->success(__('The projetosentregasnota has been deleted.'));
        } else {
            $this->Flash->error(__('The projetosentregasnota could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);        
        return $this->redirect(['controller'=>'projetosprodutosentregas','action' => 'view',$identrega]);
    }
}
