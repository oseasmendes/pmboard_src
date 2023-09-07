<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Consultore[]|\Cake\Collection\CollectionInterface $consultores
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Deliverable</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 


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
                                   <?= $this->Html->link(__('New Consultore'), ['action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Superiorimediatos'), ['controller' => 'Superiorimediatos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Superiorimediato'), ['controller' => 'Superiorimediatos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Consultorias'), ['controller' => 'Consultorias', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Consultoria'), ['controller' => 'Consultorias', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Fivewthreehs'), ['controller' => 'Fivewthreehs', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Fivewthreeh'), ['controller' => 'Fivewthreehs', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Projetosalocs'), ['controller' => 'Projetosalocs', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Projetosaloc'), ['controller' => 'Projetosalocs', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Projetosapontamentos'), ['controller' => 'Projetosapontamentos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Projetosapontamento'), ['controller' => 'Projetosapontamentos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('List Sistemasconsultores'), ['controller' => 'Sistemasconsultores', 'action' => 'index'],['class'=>'dropdown-item'])?>
                        <?= $this->Html->link(__('New Sistemasconsultore'), ['controller' => 'Sistemasconsultores', 'action' => 'add'],['class'=>'dropdown-item'])?>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col-sm-8 col-md-7 py-4"> 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                    <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                            <?= $this->Form->control('departamento_id', ['options' => $departamentos,
                                                                            'empty' => 'Departamentos',                                          
                                                                            'class'=>['class'=> 'form-control'],
                                                                            'label' => false                               
                                                                            ]); ?>         
                                                
                                            <div class="input-group">                        
                                                    <?= $this->Form->input('nome', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:100%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'Nome',
                                                                               'aria-label'=>'Nome',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('nome')]); ?>               
                                                  

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
          <nav class="navbar navbar-dark bg-info">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 




<div class="consultores index large-9 medium-8 columns content">
    <h3><?= __('Consultores') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('cargo') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('superiorimediato_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultoria_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chapa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($consultores as $consultore): ?>
            <tr>
                <td><?= $this->Number->format($consultore->id) ?></td>
                <td><?= h($consultore->nome) ?></td>                
                <td><?= h($consultore->cargo) ?></td>                
                <td><?= h($consultore->created) ?></td>                
                <td><?= $consultore->has('superiorimediato') ? $this->Html->link($consultore->superiorimediato->nome, ['controller' => 'Superiorimediatos', 'action' => 'view', $consultore->superiorimediato->id]) : '' ?></td>
                <td><?= $consultore->has('consultoria') ? $this->Html->link($consultore->consultoria->razaosocial, ['controller' => 'Consultorias', 'action' => 'view', $consultore->consultoria->id]) : '' ?></td>
                <td><?= h($consultore->chapa) ?></td>
                <td><?= h($consultore->login) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $consultore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $consultore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $consultore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultore->id)]) ?>
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




</div>                                                                   
                            </div>
                    </div>
                </div>
            </div>
        </div>      
        </div>      
        </div>      
    </section>