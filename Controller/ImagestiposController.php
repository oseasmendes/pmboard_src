<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Imagestipos Controller
 *
 * @property \App\Model\Table\ImagestiposTable $Imagestipos
 *
 * @method \App\Model\Entity\Imagestipo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImagestiposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $imagestipos = $this->paginate($this->Imagestipos);

        $this->set(compact('imagestipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Imagestipo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagestipo = $this->Imagestipos->get($id, [
            'contain' => ['Projetosimages']
        ]);

        $this->set('imagestipo', $imagestipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagestipo = $this->Imagestipos->newEntity();
        if ($this->request->is('post')) {
            $imagestipo = $this->Imagestipos->patchEntity($imagestipo, $this->request->getData());
            if ($this->Imagestipos->save($imagestipo)) {
                $this->Flash->success(__('The imagestipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagestipo could not be saved. Please, try again.'));
        }
        $this->set(compact('imagestipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagestipo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagestipo = $this->Imagestipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagestipo = $this->Imagestipos->patchEntity($imagestipo, $this->request->getData());
            if ($this->Imagestipos->save($imagestipo)) {
                $this->Flash->success(__('The imagestipo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagestipo could not be saved. Please, try again.'));
        }
        $this->set(compact('imagestipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagestipo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagestipo = $this->Imagestipos->get($id);
        if ($this->Imagestipos->delete($imagestipo)) {
            $this->Flash->success(__('The imagestipo has been deleted.'));
        } else {
            $this->Flash->error(__('The imagestipo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
