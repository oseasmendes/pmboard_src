<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tecnologias Controller
 *
 * @property \App\Model\Table\TecnologiasTable $Tecnologias
 *
 * @method \App\Model\Entity\Tecnologia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TecnologiasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tecnologias = $this->paginate($this->Tecnologias);

        $this->set(compact('tecnologias'));
    }

    /**
     * View method
     *
     * @param string|null $id Tecnologia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tecnologia = $this->Tecnologias->get($id, [
            'contain' => ['Consultoresvrstecnologias', 'Integrations', 'ShApptechno', 'Sistemascfgfronts', 'Sistemascfgintegrations']
        ]);

        $this->set('tecnologia', $tecnologia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tecnologia = $this->Tecnologias->newEntity();
        if ($this->request->is('post')) {
            $tecnologia = $this->Tecnologias->patchEntity($tecnologia, $this->request->getData());
            if ($this->Tecnologias->save($tecnologia)) {
                $this->Flash->success(__('The tecnologia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tecnologia could not be saved. Please, try again.'));
        }
        $this->set(compact('tecnologia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tecnologia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tecnologia = $this->Tecnologias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tecnologia = $this->Tecnologias->patchEntity($tecnologia, $this->request->getData());
            if ($this->Tecnologias->save($tecnologia)) {
                $this->Flash->success(__('The tecnologia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tecnologia could not be saved. Please, try again.'));
        }
        $this->set(compact('tecnologia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tecnologia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tecnologia = $this->Tecnologias->get($id);
        if ($this->Tecnologias->delete($tecnologia)) {
            $this->Flash->success(__('The tecnologia has been deleted.'));
        } else {
            $this->Flash->error(__('The tecnologia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
