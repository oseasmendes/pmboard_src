<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sistemascfgtable[]|\Cake\Collection\CollectionInterface $sistemascfgtables
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Referencia de Tabelas</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 


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
                            <?= $this->Html->link(__('New Sistemascfgtable'), ['action' => 'add'],['class'=>'dropdown-item']) ?>
                            <?= $this->Html->link(__('List Sistemas'), ['controller' => 'Sistemas', 'action' => 'index'],['class'=>'dropdown-item']) ?>
                            <?= $this->Html->link(__('New Sistema'), ['controller' => 'Sistemas', 'action' => 'add'],['class'=>'dropdown-item']) ?>
                            <?= $this->Html->link(__('List Sistemasmodulos'), ['controller' => 'Sistemasmodulos', 'action' => 'index'],['class'=>'dropdown-item']) ?>
                            <?= $this->Html->link(__('New Sistemasmodulo'), ['controller' => 'Sistemasmodulos', 'action' => 'add'],['class'=>'dropdown-item']) ?>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col">                 
                    <ul class="nav navbar-nav" role="navigation" >  
                                <div class="row">  
                                        <div class="input-group">                          
                                                <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                                <?= $this->Form->control('sistema_id', ['options' => $sistemas,
                                                                                'empty' => 'Sistemas',                                          
                                                                                'class'=>['class'=> 'form-control'],
                                                                                'label' => false                               
                                                                                ]); ?>         
                                            
                                        </div>
                                        <div class="input-group">                        
                                                <?= $this->Form->input('descricao', ['class'=>'form-control mr-sm-2',
                                                                        'style'=>'width:100%',
                                                                        'type'=>'search', 
                                                                        'label'=>['class'=>'col-xs-2 control-label'],
                                                                        'placeholder'=>'Descricao',
                                                                        'aria-label'=>'Descrição',
                                                                        'label' => false,
                                                                        "autocomplete" => "off",
                                                                        'default'=>$this->request->getQuery('descricao')]); ?>   
                                        </div>
                                        <div class="input-group">                        
                                                <?= $this->Form->input('nometabela', ['class'=>'form-control mr-sm-2',
                                                                        'style'=>'width:100%',
                                                                        'type'=>'search', 
                                                                        'label'=>['class'=>'col-xs-2 control-label'],
                                                                        'placeholder'=>'Nome da Tabela',
                                                                        'aria-label'=>'Nome da Tabela',
                                                                        'label' => false,
                                                                        "autocomplete" => "off",
                                                                        'default'=>$this->request->getQuery('nometabela')]); ?>                 
                                                
                                        </div>  
                                        <div class="input-group">    
                                                <!-- <?= $this->Form->control('descricao',['default'=>$this->request->getQuery('descricao')]); ?> -->
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

    </div> 

<div class="sistemascfgtables index large-9 medium-8 columns content">
    <h3><?= __('Referencias de Tabelas') ?></h3>
    <table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tabelanome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('versao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sistemasmodulo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chaveprimaria') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sistemascfgtables as $sistemascfgtable): ?>
            <tr>
                <td><?= $this->Number->format($sistemascfgtable->id) ?></td>
                <td><?= $sistemascfgtable->has('sistema') ? $this->Html->link($sistemascfgtable->sistema->codenome, ['controller' => 'Sistemas', 'action' => 'view', $sistemascfgtable->sistema->id]) : '' ?></td>
                <td><?= h($sistemascfgtable->tabelanome) ?></td>
                <td><?= h($sistemascfgtable->descricao) ?></td>
                <td><?= h($sistemascfgtable->created) ?></td>
                <td><?= h($sistemascfgtable->modified) ?></td>
                <td><?= h($sistemascfgtable->versao) ?></td>
                <td><?= h($sistemascfgtable->ativo) ?></td>
                <td><?= $sistemascfgtable->has('sistemasmodulo') ? $this->Html->link($sistemascfgtable->sistemasmodulo->id, ['controller' => 'Sistemasmodulos', 'action' => 'view', $sistemascfgtable->sistemasmodulo->id]) : '' ?></td>
                <td><?= h($sistemascfgtable->chaveprimaria) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sistemascfgtable->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sistemascfgtable->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sistemascfgtable->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sistemascfgtable->id)]) ?>
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