<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentregasflw[]|\Cake\Collection\CollectionInterface $projetosprodutosentregasflws
 */
?>

  <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Follow das Atividades/Entregas</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 

 <div class="sistemas index large-9 medium-8 columns content"> 

  
    <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-ligth p-4">
                <div>
                    <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        
                            <?= $this->Html->link(__('New Projetosprodutosentregasflw'), ['action' => 'add']) ?>
                            <?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?>
                            <?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?>
                            <?= $this->Html->link(__('List Motivos'), ['controller' => 'Motivos', 'action' => 'index']) ?>
                            <?= $this->Html->link(__('New Motivo'), ['controller' => 'Motivos', 'action' => 'add']) ?>
                            <?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?>
                            <?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?>
                        

                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col-sm-8 col-md-7 py-4"> 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                    <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                            <?= $this->Form->control('statusfuncional_id', ['options' => $statusfuncionals,
                                                                            'empty' => 'Status',                                          
                                                                            'class'=>['class'=> 'form-control'],
                                                                            'label' => false                               
                                                                            ]); ?>         
                                                
                                            <div class="input-group">                        
                                                    <?= $this->Form->input('descricao', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:100%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'Descricao',
                                                                               'aria-label'=>'Nome',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('descricao')]); ?>               
                                             <div class="input-group">                        
                                                    <?= $this->Form->input('who', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:100%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'Who',
                                                                               'aria-label'=>'Who',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('who')]); ?>     

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
          <nav class="navbar navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>      
            </button>            
          </nav>
    </div> 
<div class="projetosprodutosentregasflws index large-9 medium-8 columns content">
    <h3><?= __('REF Delivery Follows') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id','REF') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('who') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forwho') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>           
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosentregasflws as $projetosprodutosentregasflw): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosentregasflw->id) ?></td>
                <td><?= $projetosprodutosentregasflw->has('projetosprodutosentrega') ? $this->Html->link($projetosprodutosentregasflw->projetosprodutosentrega->referencia, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosprodutosentregasflw->projetosprodutosentrega->id]) : '' ?></td>                
                <td><?= h($projetosprodutosentregasflw->data) ?></td>
                <td><?= h($projetosprodutosentregasflw->who) ?></td>
                <td><?= h($projetosprodutosentregasflw->forwho) ?></td>
                <td><?= h($projetosprodutosentregasflw->descricao) ?></td>
                <td><?= $projetosprodutosentregasflw->has('statusfuncional') ? $this->Html->link($projetosprodutosentregasflw->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosprodutosentregasflw->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosprodutosentregasflw->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosentregasflw->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosentregasflw->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosentregasflw->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentregasflw->id)]) ?>
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
    </section>