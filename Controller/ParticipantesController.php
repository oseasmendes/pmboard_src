<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Participantes Controller
 *
 * @property \App\Model\Table\ParticipantesTable $Participantes
 *
 * @method \App\Model\Entity\Participante[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParticipantesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function indexNew()
    {
        $this->paginate = [
            'contain' => ['Departamentos', 'Empresas'],
              'order' => ['Participantes.nome' => 'asc']            
        ];
        $participantes = $this->paginate($this->Participantes);

        $this->set(compact('participantes'));
    }


    /* nOVO iNDEX */

     public function index() 
    {
        $departamentos = $this->Participantes->Departamentos->find('list', ['limit' => 200]);        
        $keyword = $this->request->getQueryParams('nome');
        
       if (!empty($keyword['nome'])) {
                    $this->paginate = [
                     'contain' => ['Departamentos', 'Empresas'],  
                     'conditions' => ['Participantes.nome LIKE '=> '%'.$keyword['nome'].'%'],             
                      'order' => [
                     //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                        'Participantes.nome' => 'asc'
                        ]            
                    ];
                    $participantes = $this->paginate($this->Participantes);
                    } elseif (!empty($keyword['departamento_id'])) 
                            {
                                $this->paginate = [
                                'contain' => ['Departamentos', 'Empresas'],  
                                'conditions' => ['departamento_id = '=> $keyword['departamento_id']],             
                                'order' => [
                                //'Membros.priori' => 'asc', 'Membros.nome' => 'asc'
                                 'Participantes.nome' => 'asc'
                                    ]            
                                ];
                                $participantes = $this->paginate($this->Participantes);
                            } else 
                            {
                                $this->paginate = [
                                 'contain' => ['Departamentos', 'Empresas'],  
                                 /*'limit' => 100, */             
                                  //'conditions' => ['arquivo = '=>false,'propostatecnica = '=>true],       
                                  'order' => [
                                'Participantes.nome' => 'asc']

                            ];
                            $participantes = $this->paginate($this->Participantes);
                            }

        $this->set(compact('participantes','departamentos','empresas'));
    }

    /**
     * View method
     *
     * @param string|null $id Participante id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $participante = $this->Participantes->get($id, [
            'contain' => ['Departamentos', 'Empresas', 'Fivewthreehs']
        ]);

        $this->set('participante', $participante);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $participante = $this->Participantes->newEntity();
        if ($this->request->is('post')) {
            $participante = $this->Participantes->patchEntity($participante, $this->request->getData());
            if ($this->Participantes->save($participante)) {
                $this->Flash->success(__('The participante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participante could not be saved. Please, try again.'));
        }
        $departamentos = $this->Participantes->Departamentos->find('list', ['limit' => 200]);
        $empresas = $this->Participantes->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('participante', 'departamentos', 'empresas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Participante id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $participante = $this->Participantes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $participante = $this->Participantes->patchEntity($participante, $this->request->getData());
            if ($this->Participantes->save($participante)) {
                $this->Flash->success(__('The participante has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The participante could not be saved. Please, try again.'));
        }
        $departamentos = $this->Participantes->Departamentos->find('list', ['limit' => 200]);
        $empresas = $this->Participantes->Empresas->find('list', ['limit' => 200]);
        $this->set(compact('participante', 'departamentos', 'empresas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Participante id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $participante = $this->Participantes->get($id);
        if ($this->Participantes->delete($participante)) {
            $this->Flash->success(__('The participante has been deleted.'));
        } else {
            $this->Flash->error(__('The participante could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
