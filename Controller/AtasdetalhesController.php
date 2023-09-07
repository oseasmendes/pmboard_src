<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Atasdetalhes Controller
 *
 * @property \App\Model\Table\AtasdetalhesTable $Atasdetalhes
 *
 * @method \App\Model\Entity\Atasdetalhe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtasdetalhesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Atas', 'Participantes', 'Etapas', 'Atividades', 'Fivewthreehs', 'Processos']
        ];
        $atasdetalhes = $this->paginate($this->Atasdetalhes);

        $this->set(compact('atasdetalhes'));
    }

    /**
     * View method
     *
     * @param string|null $id Atasdetalhe id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atasdetalhe = $this->Atasdetalhes->get($id, [
            'contain' => ['Atas', 'Participantes', 'Etapas', 'Atividades', 'Fivewthreehs', 'Processos']
        ]);

        $this->set('atasdetalhe', $atasdetalhe);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $atasdetalhe = $this->Atasdetalhes->newEntity();
        if ($this->request->is('post')) {
            $atasdetalhe = $this->Atasdetalhes->patchEntity($atasdetalhe, $this->request->getData());
            //$projetosproduto->projeto_id = $id;
            $atasdetalhe->ata_id = $id;
            if ($this->Atasdetalhes->save($atasdetalhe)) {
                $this->Flash->success(__('The atasdetalhe has been saved.'));

                //return $this->redirect(['action' => 'index']);
                   return $this->redirect(['controller' => 'Atas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The atasdetalhe could not be saved. Please, try again.'));
        }
        $topico = $atasdetalhe->ata_id;
        $atas = $this->Atasdetalhes->Atas->find('list',array('conditions'=>array('Atas.id'=>$id),'order' => array('resumogeral' => 'asc')) ,['limit' => 2000]);
        $participantes = $this->Atasdetalhes->Participantes->find('list',array('order' => array('nome' => 'asc')),['limit' => 2000]);
        $etapas = $this->Atasdetalhes->Etapas->find('list',array('order' => array('descricao' => 'asc')),['limit' => 2000]);
        $atividades = $this->Atasdetalhes->Atividades->find('list',array('order' => array('descricao' => 'asc')),['limit' => 2000]);
        $fivewthreehs = $this->Atasdetalhes->Fivewthreehs->find('list',array('order' => array('description' => 'asc')),['limit' => 2000]);
        $processos = $this->Atasdetalhes->Processos->find('list',array('order' => array('descricao' => 'asc')),['limit' => 2000]);
        $this->set(compact('atasdetalhe', 'atas', 'participantes', 'etapas', 'atividades', 'fivewthreehs', 'processos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Atasdetalhe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atasdetalhe = $this->Atasdetalhes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atasdetalhe = $this->Atasdetalhes->patchEntity($atasdetalhe, $this->request->getData());
            $ataid = $atasdetalhe->ata_id;
            
            if ($this->Atasdetalhes->save($atasdetalhe)) {
                $this->Flash->success(__('The atasdetalhe has been saved.'));

                //return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller' => 'Atas','action' => 'view',$ataid]);
            }
            $this->Flash->error(__('The atasdetalhe could not be saved. Please, try again.'));
        }
        $atas = $this->Atasdetalhes->Atas->find('list', ['limit' => 200]);
        $participantes = $this->Atasdetalhes->Participantes->find('list', ['limit' => 200]);
        $etapas = $this->Atasdetalhes->Etapas->find('list', ['limit' => 200]);
        $atividades = $this->Atasdetalhes->Atividades->find('list', ['limit' => 200]);
        $fivewthreehs = $this->Atasdetalhes->Fivewthreehs->find('list', ['limit' => 200]);
        $processos = $this->Atasdetalhes->Processos->find('list', ['limit' => 200]);
        $this->set(compact('atasdetalhe', 'atas', 'participantes', 'etapas', 'atividades', 'fivewthreehs', 'processos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Atasdetalhe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atasdetalhe = $this->Atasdetalhes->get($id);
          $ataid = $atasdetalhe->ata_id;
        if ($this->Atasdetalhes->delete($atasdetalhe)) {
            $this->Flash->success(__('The atasdetalhe has been deleted.'));
        } else {
            $this->Flash->error(__('The atasdetalhe could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
         return $this->redirect(['controller' => 'Atas','action' => 'view',$ataid]);
    }
}
