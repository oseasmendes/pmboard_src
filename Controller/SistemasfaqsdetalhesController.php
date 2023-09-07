<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;

use Cake\View\CellTrait;


/**
 * Sistemasfaqsdetalhes Controller
 *
 * @property \App\Model\Table\SistemasfaqsdetalhesTable $Sistemasfaqsdetalhes
 *
 * @method \App\Model\Entity\Sistemasfaqsdetalhe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SistemasfaqsdetalhesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Sistemasfaqs', 'Participantes']
        ];
        $sistemasfaqsdetalhes = $this->paginate($this->Sistemasfaqsdetalhes);

        $this->set(compact('sistemasfaqsdetalhes'));
    }

    /**
     * View method
     *
     * @param string|null $id Sistemasfaqsdetalhe id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sistemasfaqsdetalhe = $this->Sistemasfaqsdetalhes->get($id, [
            'contain' => ['Sistemasfaqs', 'Participantes', 'Sistemasfaqsdetalhesimgs']
        ]);

        $this->set('sistemasfaqsdetalhe', $sistemasfaqsdetalhe);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sistemasfaqsdetalhe = $this->Sistemasfaqsdetalhes->newEntity();
        if ($this->request->is('post')) {
            $sistemasfaqsdetalhe = $this->Sistemasfaqsdetalhes->patchEntity($sistemasfaqsdetalhe, $this->request->getData());
            if ($this->Sistemasfaqsdetalhes->save($sistemasfaqsdetalhe)) {
                $this->Flash->success(__('The sistemasfaqsdetalhe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sistemasfaqsdetalhe could not be saved. Please, try again.'));
        }
        $sistemasfaqs = $this->Sistemasfaqsdetalhes->Sistemasfaqs->find('list', ['limit' => 200]);
        $participantes = $this->Sistemasfaqsdetalhes->Participantes->find('list', ['limit' => 200]);
        $this->set(compact('sistemasfaqsdetalhe', 'sistemasfaqs', 'participantes'));
    }

    public function addid($id = null)
    {
        $sistemasfaqsdetalhe = $this->Sistemasfaqsdetalhes->newEntity();
        $sistemasfaqsdetalhe->sistemasfaq_id = $id;
        if ($this->request->is('post')) {
            $sistemasfaqsdetalhe = $this->Sistemasfaqsdetalhes->patchEntity($sistemasfaqsdetalhe, $this->request->getData());
            if ($this->Sistemasfaqsdetalhes->save($sistemasfaqsdetalhe)) {
                $this->Flash->success(__('The sistemasfaqsdetalhe has been saved.'));

                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Sistemasfaqs','action' => 'view',$id]);
            }
            $this->Flash->error(__('The sistemasfaqsdetalhe could not be saved. Please, try again.'));
        }
        //$sistemasfaqs = $this->Sistemasfaqsdetalhes->Sistemasfaqs->find('list', ['limit' => 200]);
        $sistemasfaqs = $this->Sistemasfaqsdetalhes->Sistemasfaqs->find('list',array('conditions'=>array('Sistemasfaqs.id'=>$id),'order' => array('Sistemasfaqs.descricao' => 'asc')));
        $participantes = $this->Sistemasfaqsdetalhes->Participantes->find('list',array('conditions'=>array('Participantes.empresa_id'=> '8' ),'order' => array('Participantes.nome' => 'asc')));
        $this->set(compact('sistemasfaqsdetalhe', 'sistemasfaqs', 'participantes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sistemasfaqsdetalhe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sistemasfaqsdetalhe = $this->Sistemasfaqsdetalhes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sistemasfaqsdetalhe = $this->Sistemasfaqsdetalhes->patchEntity($sistemasfaqsdetalhe, $this->request->getData());
            $sistemafaqid = $sistemasfaqsdetalhe->sistemasfaq_id;
            if ($this->Sistemasfaqsdetalhes->save($sistemasfaqsdetalhe)) {
                $this->Flash->success(__('The sistemasfaqsdetalhe has been saved.'));


                $reg = $id;

                $caminho = WWW_ROOT.DS.'img'.DS.'sistemasfaqsdetalhes'.DS.$reg;

                $dir = new folder();
                if ($dir->create($caminho,true,0755)) {
                    $this->Flash->success('Pasta de Imagem Criada  com sucesso');
                }


                //return $this->redirect(['action' => 'index']);
                return $this->redirect(['controller' => 'Sistemasfaqs','action' => 'view',$sistemafaqid]);
            }
            $this->Flash->error(__('The sistemasfaqsdetalhe could not be saved. Please, try again.'));
        }
        $sistemasfaqs = $this->Sistemasfaqsdetalhes->Sistemasfaqs->find('list', ['limit' => 200]);
        $participantes = $this->Sistemasfaqsdetalhes->Participantes->find('list',array('conditions'=>array('Participantes.empresa_id'=> '8' ),'order' => array('Participantes.nome' => 'asc')));
        $this->set(compact('sistemasfaqsdetalhe', 'sistemasfaqs', 'participantes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sistemasfaqsdetalhe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sistemasfaqsdetalhe = $this->Sistemasfaqsdetalhes->get($id);
        if ($this->Sistemasfaqsdetalhes->delete($sistemasfaqsdetalhe)) {
            $this->Flash->success(__('The sistemasfaqsdetalhe has been deleted.'));
        } else {
            $this->Flash->error(__('The sistemasfaqsdetalhe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
