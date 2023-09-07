<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Apontamentos Controller
 *
 * @property \App\Model\Table\ApontamentosTable $Apontamentos
 *
 * @method \App\Model\Entity\Apontamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ApontamentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Consultores', 'Atividades', 'Projetosprodutosentregas']
        ];
        $apontamentos = $this->paginate($this->Apontamentos);

        $this->set(compact('apontamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Apontamento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $apontamento = $this->Apontamentos->get($id, [
            'contain' => ['Consultores', 'Atividades', 'Projetosprodutosentregas']
        ]);

        $this->set('apontamento', $apontamento);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $apontamento = $this->Apontamentos->newEntity();
        if ($this->request->is('post')) {
            $apontamento = $this->Apontamentos->patchEntity($apontamento, $this->request->getData());
            $apontamento->projetosprodutosentrega_id = $id;
            if ($this->Apontamentos->save($apontamento)) {
                $this->Flash->success(__('The apontamento has been saved.'));

                return $this->redirect(['action' => 'index']);

                 return $this->redirect(['controller'=>'Projetosprodutosentregas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The apontamento could not be saved. Please, try again.'));
        }
        $consultores = $this->Apontamentos->Consultores->find('list', ['limit' => 200]);
        $atividades = $this->Apontamentos->Atividades->find('list', ['limit' => 200]);
        //$projetosprodutosentregas = $this->Apontamentos->Projetosprodutosentregas->find('list', ['limit' => 200]);

        $projetosprodutosentregas = $this->Apontamentos->Projetosprodutosentregas->find('list', array('conditions'=>array('Projetosprodutosentregas.id'=>$id),'order' => array('Descricao' => 'asc')), ['limit' => 2000]);


         //$agendas = $this->Atas->Agendas->find('list',array('conditions'=>array('Agendas.id'=>$id),'order' => array('Etiquetaadicional' => 'asc')) ,['limit' => 2000]);


        $this->set(compact('apontamento', 'consultores', 'atividades', 'projetosprodutosentregas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Apontamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $apontamento = $this->Apontamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $apontamento = $this->Apontamentos->patchEntity($apontamento, $this->request->getData());
            if ($this->Apontamentos->save($apontamento)) {
                $this->Flash->success(__('The apontamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The apontamento could not be saved. Please, try again.'));
        }
        $consultores = $this->Apontamentos->Consultores->find('list', ['limit' => 200]);
        $atividades = $this->Apontamentos->Atividades->find('list', ['limit' => 200]);
        $projetosprodutosentregas = $this->Apontamentos->Projetosprodutosentregas->find('list', ['limit' => 200]);
        $this->set(compact('apontamento', 'consultores', 'atividades', 'projetosprodutosentregas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Apontamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $apontamento = $this->Apontamentos->get($id);
        if ($this->Apontamentos->delete($apontamento)) {
            $this->Flash->success(__('The apontamento has been deleted.'));
        } else {
            $this->Flash->error(__('The apontamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
