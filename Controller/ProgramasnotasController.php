<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Programasnotas Controller
 *
 * @property \App\Model\Table\ProgramasnotasTable $Programasnotas
 *
 * @method \App\Model\Entity\Programasnota[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgramasnotasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Notatipos', 'Programas'],
            'conditions' => ['Programasnotas.ativo ='=> true],              
            'order' => [
              'Programasnotas.created' => 'desc']
        ];
        $programasnotas = $this->paginate($this->Programasnotas);

        $this->set(compact('programasnotas'));
    }

    /**
     * View method
     *
     * @param string|null $id Programasnota id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $programasnota = $this->Programasnotas->get($id, [
            'contain' => ['Notatipos', 'Programas']
        ]);

        $this->set('programasnota', $programasnota);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $programasnota = $this->Programasnotas->newEntity();
        if ($this->request->is('post')) {
            $programasnota = $this->Programasnotas->patchEntity($programasnota, $this->request->getData());
            if ($this->Programasnotas->save($programasnota)) {
                $this->Flash->success(__('The programasnota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programasnota could not be saved. Please, try again.'));
        }
        $notatipos = $this->Programasnotas->Notatipos->find('list', ['limit' => 200]);
        $programas = $this->Programasnotas->Programas->find('list', ['limit' => 200]);
        $this->set(compact('programasnota', 'notatipos', 'programas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Programasnota id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $programasnota = $this->Programasnotas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programasnota = $this->Programasnotas->patchEntity($programasnota, $this->request->getData());
            if ($this->Programasnotas->save($programasnota)) {
                $this->Flash->success(__('The programasnota has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programasnota could not be saved. Please, try again.'));
        }
        $notatipos = $this->Programasnotas->Notatipos->find('list', ['limit' => 200]);
        $programas = $this->Programasnotas->Programas->find('list', ['limit' => 200]);
        $this->set(compact('programasnota', 'notatipos', 'programas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Programasnota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $programasnota = $this->Programasnotas->get($id);
        if ($this->Programasnotas->delete($programasnota)) {
            $this->Flash->success(__('The programasnota has been deleted.'));
        } else {
            $this->Flash->error(__('The programasnota could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
