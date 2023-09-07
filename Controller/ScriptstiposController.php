<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Scriptstipos Controller
 *
 * @property \App\Model\Table\ScriptstiposTable $Scriptstipos
 *
 * @method \App\Model\Entity\Scriptstipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ScriptstiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $scriptstipos = $this->paginate($this->Scriptstipos);

        $this->set(compact('scriptstipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Scriptstipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $scriptstipo = $this->Scriptstipos->get($id, [
            'contain' => ['Sistemascfgscripts']
        ]);

        $this->set('scriptstipo', $scriptstipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $scriptstipo = $this->Scriptstipos->newEntity();
        if ($this->request->is('post')) {
            $scriptstipo = $this->Scriptstipos->patchEntity($scriptstipo, $this->request->getData());
            if ($this->Scriptstipos->save($scriptstipo)) {
                $this->Flash->success(__('The scriptstipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scriptstipo could not be saved. Please, try again.'));
        }
        $this->set(compact('scriptstipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Scriptstipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $scriptstipo = $this->Scriptstipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $scriptstipo = $this->Scriptstipos->patchEntity($scriptstipo, $this->request->getData());
            if ($this->Scriptstipos->save($scriptstipo)) {
                $this->Flash->success(__('The scriptstipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The scriptstipo could not be saved. Please, try again.'));
        }
        $this->set(compact('scriptstipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Scriptstipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $scriptstipo = $this->Scriptstipos->get($id);
        if ($this->Scriptstipos->delete($scriptstipo)) {
            $this->Flash->success(__('The scriptstipo has been deleted.'));
        } else {
            $this->Flash->error(__('The scriptstipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
