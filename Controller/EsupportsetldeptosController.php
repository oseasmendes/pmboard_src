<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Esupportsetldeptos Controller
 *
 * @property \App\Model\Table\EsupportsetldeptosTable $Esupportsetldeptos
 *
 * @method \App\Model\Entity\Esupportsetldepto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EsupportsetldeptosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departamentos']
        ];
        $esupportsetldeptos = $this->paginate($this->Esupportsetldeptos);

        $this->set(compact('esupportsetldeptos'));
    }

    /**
     * View method
     *
     * @param string|null $id Esupportsetldepto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $esupportsetldepto = $this->Esupportsetldeptos->get($id, [
            'contain' => ['Departamentos']
        ]);

        $this->set('esupportsetldepto', $esupportsetldepto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $esupportsetldepto = $this->Esupportsetldeptos->newEntity();
        if ($this->request->is('post')) {
            $esupportsetldepto = $this->Esupportsetldeptos->patchEntity($esupportsetldepto, $this->request->getData());
            if ($this->Esupportsetldeptos->save($esupportsetldepto)) {
                $this->Flash->success(__('The esupportsetldepto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetldepto could not be saved. Please, try again.'));
        }
        $departamentos = $this->Esupportsetldeptos->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetldepto', 'departamentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Esupportsetldepto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $esupportsetldepto = $this->Esupportsetldeptos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $esupportsetldepto = $this->Esupportsetldeptos->patchEntity($esupportsetldepto, $this->request->getData());
            if ($this->Esupportsetldeptos->save($esupportsetldepto)) {
                $this->Flash->success(__('The esupportsetldepto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The esupportsetldepto could not be saved. Please, try again.'));
        }
        $departamentos = $this->Esupportsetldeptos->Departamentos->find('list', ['limit' => 200]);
        $this->set(compact('esupportsetldepto', 'departamentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Esupportsetldepto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $esupportsetldepto = $this->Esupportsetldeptos->get($id);
        if ($this->Esupportsetldeptos->delete($esupportsetldepto)) {
            $this->Flash->success(__('The esupportsetldepto has been deleted.'));
        } else {
            $this->Flash->error(__('The esupportsetldepto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
