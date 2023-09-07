<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agendaschannels Controller
 *
 * @property \App\Model\Table\AgendaschannelsTable $Agendaschannels
 *
 * @method \App\Model\Entity\Agendaschannel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgendaschannelsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $agendaschannels = $this->paginate($this->Agendaschannels);

        $this->set(compact('agendaschannels'));
    }

    /**
     * View method
     *
     * @param string|null $id Agendaschannel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agendaschannel = $this->Agendaschannels->get($id, [
            'contain' => ['Agendasnotes']
        ]);

        $this->set('agendaschannel', $agendaschannel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agendaschannel = $this->Agendaschannels->newEntity();
        if ($this->request->is('post')) {
            $agendaschannel = $this->Agendaschannels->patchEntity($agendaschannel, $this->request->getData());
            if ($this->Agendaschannels->save($agendaschannel)) {
                $this->Flash->success(__('The agendaschannel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agendaschannel could not be saved. Please, try again.'));
        }
        $this->set(compact('agendaschannel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agendaschannel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agendaschannel = $this->Agendaschannels->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agendaschannel = $this->Agendaschannels->patchEntity($agendaschannel, $this->request->getData());
            if ($this->Agendaschannels->save($agendaschannel)) {
                $this->Flash->success(__('The agendaschannel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agendaschannel could not be saved. Please, try again.'));
        }
        $this->set(compact('agendaschannel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agendaschannel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agendaschannel = $this->Agendaschannels->get($id);
        if ($this->Agendaschannels->delete($agendaschannel)) {
            $this->Flash->success(__('The agendaschannel has been deleted.'));
        } else {
            $this->Flash->error(__('The agendaschannel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
