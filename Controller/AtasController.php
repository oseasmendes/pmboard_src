<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Atas Controller
 *
 * @property \App\Model\Table\AtasTable $Atas
 *
 * @method \App\Model\Entity\Ata[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AtasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Agendas', 'Participantes','Conditions','Tipodocumentos','Departamentos']
        ];
        $atas = $this->paginate($this->Atas);

        $this->set(compact('atas'));
    }

    /**
     * View method
     *
     * @param string|null $id Ata id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ata = $this->Atas->get($id, [
            'contain' => ['Agendas','Participantes', 'Conditions', 'Tipodocumentos', 'Ataaprovadores', 'Atasdetalhes', 'Ataparticipantes','Ataconsultores', 'Atarevisaohistoricos', 'Atarevisoes','departamentos']
        ]);

        $this->set('ata', $ata);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $ata = $this->Atas->newEntity();
        if ($this->request->is('post')) {
            $ata = $this->Atas->patchEntity($ata, $this->request->getData());
            $ata->agenda_id = $id;
            if ($this->Atas->save($ata)) {
                $this->Flash->success(__('The ata has been saved.'));

               // return $this->redirect(['action' => 'index']);
                 return $this->redirect(['controller' => 'Agendas','action' => 'view',$id]);
            }
            $this->Flash->error(__('The ata could not be saved. Please, try again.'));
        }
        $agendas = $this->Atas->Agendas->find('list',array('conditions'=>array('Agendas.id'=>$id),'order' => array('Etiquetaadicional' => 'asc')) ,['limit' => 2000]);
        $participantes = $this->Atas->Participantes->find('list',array('order' => array('nome' => 'asc')),['limit' => 2000]);       
        $conditions = $this->Atas->Conditions->find('list', ['limit' => 200]);
        $departamentos = $this->Atas->Departamentos->find('list', ['limit' => 200]);
        $tipodocumentos = $this->Atas->Tipodocumentos->find('list', ['limit' => 200]);
        $this->set(compact('ata','agendas' ,'projetos', 'participantes', 'conditions', 'departamentos', 'tipodocumentos','departamentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ata id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ata = $this->Atas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ata = $this->Atas->patchEntity($ata, $this->request->getData());
            $agendaid = $ata->agenda_id;
            if ($this->Atas->save($ata)) {
                $this->Flash->success(__('The ata has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Agendas','action' => 'view',$agendaid]);
            }
            $this->Flash->error(__('The ata could not be saved. Please, try again.'));
        }
        $agendas = $this->Atas->Agendas->find('list', ['limit' => 200]);
        $participantes = $this->Atas->Participantes->find('list',array('order' => array('nome' => 'asc')) ,['limit' => 200]);       
        $conditions = $this->Atas->Conditions->find('list', ['limit' => 200]);
        $departamentos = $this->Atas->Departamentos->find('list', ['limit' => 200]);
        $tipodocumentos = $this->Atas->Tipodocumentos->find('list', ['limit' => 200]);
        $this->set(compact('ata', 'agendas', 'participantes', 'conditions', 'departamentos', 'tipodocumentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ata id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ata = $this->Atas->get($id);
        $agendaid = $ata->agenda_id;
        if ($this->Atas->delete($ata)) {
            $this->Flash->success(__('The ata has been deleted.'));
        } else {
            $this->Flash->error(__('The ata could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
         return $this->redirect(['controller' => 'Agendas','action' => 'view',$agendaid]);

    }
}
