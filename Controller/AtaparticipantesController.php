<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ataparticipantes Controller
 *
 * @property \App\Model\Table\AtaparticipantesTable $Ataparticipantes
 *
 * @method \App\Model\Entity\Ataparticipante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtaparticipantesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Atas', 'Participantes']
        ];
        $ataparticipantes = $this->paginate($this->Ataparticipantes);

        $this->set(compact('ataparticipantes'));
    }

    /**
     * View method
     *
     * @param string|null $id Ataparticipante id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ataparticipante = $this->Ataparticipantes->get($id, [
            'contain' => ['Atas', 'Participantes']
        ]);

        $this->set('ataparticipante', $ataparticipante);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $ataparticipante = $this->Ataparticipantes->newEntity();
        if ($this->request->is('post')) {
            $ataparticipante = $this->Ataparticipantes->patchEntity($ataparticipante, $this->request->getData());
            $ataparticipante->ata_id = $id;
            if ($this->Ataparticipantes->save($ataparticipante)) {
                $this->Flash->success(__('The ataparticipante has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Atas','action' => 'view',$id]);

            }
            $this->Flash->error(__('The ataparticipante could not be saved. Please, try again.'));
        }
        $atas = $this->Ataparticipantes->Atas->find('list', array('conditions'=>array('Atas.id'=>$id),'order' => array('resumogeral' => 'asc')) ,['limit' => 2000]);
        $participantes = $this->Ataparticipantes->Participantes->find('list',array('order' => array('nome' => 'asc')),['limit' => 2000]);
        $this->set(compact('ataparticipante', 'atas', 'participantes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ataparticipante id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ataparticipante = $this->Ataparticipantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ataparticipante = $this->Ataparticipantes->patchEntity($ataparticipante, $this->request->getData());
            $ataid = $ataparticipante->ata_id;
            if ($this->Ataparticipantes->save($ataparticipante)) {
                $this->Flash->success(__('The ataparticipante has been saved.'));

             // return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller' => 'Atas','action' => 'view',$ataid]);

            }
            $this->Flash->error(__('The ataparticipante could not be saved. Please, try again.'));
        }
        $atas = $this->Ataparticipantes->Atas->find('list', ['limit' => 200]);
        $participantes = $this->Ataparticipantes->Participantes->find('list', ['limit' => 200]);
        $this->set(compact('ataparticipante', 'atas', 'participantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ataparticipante id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ataparticipante = $this->Ataparticipantes->get($id);
        $ataid = $ataparticipante->ata_id;
        if ($this->Ataparticipantes->delete($ataparticipante)) {
            $this->Flash->success(__('The ataparticipante has been deleted.'));
        } else {
            $this->Flash->error(__('The ataparticipante could not be deleted. Please, try again.'));
        }

    //    return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller' => 'Atas','action' => 'view',$ataid]);
    }
}
