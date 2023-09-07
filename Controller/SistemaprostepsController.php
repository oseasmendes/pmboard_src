<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;

use Cake\View\CellTrait;

/**
 * Sistemaprosteps Controller
 *
 * @property \App\Model\Table\SistemaprostepsTable $Sistemaprosteps
 *
 * @method \App\Model\Entity\Sistemaprostep[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemaprostepsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemaproactions', 'Participantes', 'Consultores']
        ];
        $sistemaprosteps = $this->paginate($this->Sistemaprosteps);

        $this->set(compact('sistemaprosteps'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemaprostep id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemaprostep = $this->Sistemaprosteps->get($id, [
            'contain' => [
                    'Sistemaproactions', 
                    'Participantes', 
                    'Consultores', 
                    'Sistemaprostepsfiles',
                    'Sistemaprostepsimgs'=>[
                        'sort' => ['Sistemaprostepsimgs.ordem' => 'ASC'],
                        //'conditions' => ['Sistemaprostepsimgs.ativo =' => true],
                    ]]
        ]);

        $this->set('sistemaprostep', $sistemaprostep);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemaprostep = $this->Sistemaprosteps->newEntity();
        if ($this->request->is('post')) {
            $sistemaprostep = $this->Sistemaprosteps->patchEntity($sistemaprostep, $this->request->getData());
            if ($this->Sistemaprosteps->save($sistemaprostep)) {
                $this->Flash->success(__('The sistemaprostep has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemaprostep could not be saved. Please, try again.'));
        }
        $sistemaproactions = $this->Sistemaprosteps->Sistemaproactions->find('list', ['limit' => 200]);
        $participantes = $this->Sistemaprosteps->Participantes->find('list', ['limit' => 200]);
        $consultores = $this->Sistemaprosteps->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('sistemaprostep', 'sistemaproactions', 'participantes', 'consultores'));
    }

    public function addid($id = null)
    {
        $sistemaprostep = $this->Sistemaprosteps->newEntity();
        if ($this->request->is('post')) {
            $sistemaprostep = $this->Sistemaprosteps->patchEntity($sistemaprostep, $this->request->getData());
            $sistemaprostep->sistemaproaction_id = $id;
            if ($this->Sistemaprosteps->save($sistemaprostep)) {
                $this->Flash->success(__('The sistemaprostep has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemaproactions','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemaprostep could not be saved. Please, try again.'));
        }
        $sistemaproactions = $this->Sistemaprosteps->Sistemaproactions->find('list', ['limit' => 2000]);
        $participantes = $this->Sistemaprosteps->Participantes->find('list',array('conditions'=>array('Participantes.empresa_id'=>'8'),'order' => array('Participantes.nome' => 'asc')));
        $consultores = $this->Sistemaprosteps->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('sistemaprostep', 'sistemaproactions', 'participantes', 'consultores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemaprostep id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemaprostep = $this->Sistemaprosteps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemaprostep = $this->Sistemaprosteps->patchEntity($sistemaprostep, $this->request->getData());
            $idpro = $sistemaprostep->sistemaproaction_id;

            if ($this->Sistemaprosteps->save($sistemaprostep)) {
                $this->Flash->success(__('The sistemaprostep has been saved.'));

                $reg = $id;

                $caminho = WWW_ROOT.DS.'img'.DS.'sistemaprostepsimgs'.DS.$reg;

                $dir = new folder();
                if ($dir->create($caminho,true,0755)) {
                    $this->Flash->success('Pasta de Imagem Criada  com sucesso');
                }


                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller'=>'Sistemaproactions','action' => 'view',$idpro]);
                
            }
            $this->Flash->error(__('The sistemaprostep could not be saved. Please, try again.'));
        }
        $sistemaproactions = $this->Sistemaprosteps->Sistemaproactions->find('list', ['limit' => 200]);
        $participantes = $this->Sistemaprosteps->Participantes->find('list',array('conditions'=>array('Participantes.empresa_id'=>'8'),'order' => array('Participantes.nome' => 'asc')));
        $consultores = $this->Sistemaprosteps->Consultores->find('list', ['limit' => 200]);
        $this->set(compact('sistemaprostep', 'sistemaproactions', 'participantes', 'consultores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemaprostep id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemaprostep = $this->Sistemaprosteps->get($id);
        $idpro = $sistemaprostep->sistemaproaction_id;
        if ($this->Sistemaprosteps->delete($sistemaprostep)) {
            $this->Flash->success(__('The sistemaprostep has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemaprostep could not be deleted. Please, try again.'));
        }

        //return $this->redirect(['action' => 'index']);
        return $this->redirect(['controller'=>'Sistemaproactions','action' => 'view',$idpro]);
    }
}
