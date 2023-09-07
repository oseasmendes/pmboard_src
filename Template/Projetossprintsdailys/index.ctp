<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetossprintsdaily[]|\Cake\Collection\CollectionInterface $projetossprintsdailys
 */
?>


 <div class="sistemas index large-9 medium-8 columns content"> 

  
    <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
                <div>
                    <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                
                            <?= $this->Html->link(__('New Projetossprintsdaily'), ['action' => 'add']) ?>
                            <?= $this->Html->link(__('List Projetossprints'), ['controller' => 'Projetossprints', 'action' => 'index']) ?>
                            <?= $this->Html->link(__('New Projetossprint'), ['controller' => 'Projetossprints', 'action' => 'add']) ?>
                            <?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?>
                            <?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?>
                            <?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?>
                            <?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?>
                            <?= $this->Html->link(__('List Agendas'), ['controller' => 'Agendas', 'action' => 'index']) ?>
                            <?= $this->Html->link(__('New Agenda'), ['controller' => 'Agendas', 'action' => 'add']) ?>

                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col"> 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                    <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                            <?= $this->Form->control('consultore_id', ['options' => $consultores,
                                                                            'empty' => 'Consultores',
                                                                            'class'=>['class'=> 'form-control'],
                                                                            'label' => false    
                                                                            ]); ?>         
                                            <?= $this->Form->control('projetossprint_id', ['options' => $projetossprints,
                                                                            'empty' => 'Sprints', 
                                                                            'class'=>['class'=> 'form-control'],
                                                                            'label' => false   
                                                                            ]); ?>    
                                            <div class="input-group">                        
                                                    <?= $this->Form->input('comentario', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:100%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'Comentario',
                                                                               'aria-label'=>'Comentario',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('comentario')]); ?>               
                                                  

                                                     <div class="input-group-btn">
                                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar
                                                        </button>
                                                    </div>            
                                    <?= $this->Form->end() ?>
                                </div>

                        </div>
                    </ul>
                </div>              
            </div>
          </div>
          <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div>

<div class="projetossprintsdailys index large-9 medium-8 columns content">
    <h3><?= __('Daily Feedback') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetossprint_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>                              
                <th scope="col"><?= $this->Paginator->sort('agenda_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetossprintsdailys as $projetossprintsdaily): ?>
            <tr>
                <td><?= $this->Number->format($projetossprintsdaily->id) ?></td>
                <td><?= $projetossprintsdaily->has('projetossprint') ? $this->Html->link($projetossprintsdaily->projetossprint->descricao, ['controller' => 'Projetossprints', 'action' => 'view', $projetossprintsdaily->projetossprint->id]) : '' ?></td>
                <td><?= $projetossprintsdaily->has('consultore') ? $this->Html->link(strtoupper($projetossprintsdaily->consultore->nome), ['controller' => 'Consultores', 'action' => 'view', $projetossprintsdaily->consultore->id]) : '' ?></td>
                <td><?= h($projetossprintsdaily->data) ?></td>                                
                <td><?= $projetossprintsdaily->has('agenda') ? $this->Html->link($projetossprintsdaily->agenda->etiquetaadicional, ['controller' => 'Agendas', 'action' => 'view', $projetossprintsdaily->agenda->id]) : '' ?></td>
                <td><?= h($projetossprintsdaily->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetossprintsdaily->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetossprintsdaily->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetossprintsdaily->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetossprintsdaily->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
