<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosprodutosentrega[]|\Cake\Collection\CollectionInterface $projetosprodutosentregas
 */
?>


<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Deliveries</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 


 <div class="sistemas index large-9 medium-8 columns content"> 

  
    <div class="pos-f-t">
          <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                <div>
                    <div class="col-sm-8 col-md-7 py-4">                   
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Opções
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?= $this->Html->link(__('Nova Entrega'), ['action' => 'add'],['class'=>'dropdown-item'])?>
                                <?= $this->Html->link(__('Listar Produtos'), ['controller' => 'Projetosprodutos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                                <?= $this->Html->link(__('Novo Produto'), ['controller' => 'Projetosprodutos', 'action' => 'add'],['class'=>'dropdown-item'])?>
                                <?= $this->Html->link(__('Listar Sistemas'), ['controller' => 'Sistemas', 'action' => 'index'],['class'=>'dropdown-item'])?>
                                <?= $this->Html->link(__('Novo Sistema'), ['controller' => 'Sistemas', 'action' => 'add'],['class'=>'dropdown-item'])?>                                
                                <?= $this->Html->link(__('Listar Apontamentos'), ['controller' => 'Projetosapontamentos', 'action' => 'index'],['class'=>'dropdown-item'])?>
                                <?= $this->Html->link(__('Novo Apontamento'), ['controller' => 'Projetosapontamentos', 'action' => 'add'],['class'=>'dropdown-item'])?>                              

                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>  
                </div>
                </div>
                <div class="col-sm-8 col-md-7 py-4"> 
                    <ul class="nav navbar-nav" role="navigation" >                           
                                    <?= $this->Form->create("",['class'=>'form-inline my-2 my-lg-0','type'=>'get']) ?>                
                                            <?= $this->Form->control('projetosproduto_id', ['options' => $projetosprodutos,
                                                                            'empty' => 'Produtos',                                          
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
                                                    <?= $this->Form->input('referencia', ['class'=>'form-control mr-sm-2',
                                                                               'style'=>'width:100%',
                                                                               'type'=>'search', 
                                                                               'label'=>['class'=>'col-xs-2 control-label'],
                                                                               'placeholder'=>'Referência',
                                                                               'aria-label'=>'Nome',
                                                                               'label' => false,
                                                                               "autocomplete" => "off",
                                                                               'default'=>$this->request->getQuery('referencia')]); ?>     

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



<div class="projetosprodutosentregas index large-9 medium-8 columns content">
    <h3><?= __('Entregas') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id','Id') ?></th>               
                <th scope="col"><?= $this->Paginator->sort('referencia','Referencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao','Descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosproduto_id','Produto') ?></th>          
                <th scope="col"><?= $this->Paginator->sort('frente_id','Frente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade','Prio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel','Requisitante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kanban','Kanban') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosprodutosentregas as $projetosprodutosentrega): ?>
            <tr>
                <td><?= $this->Number->format($projetosprodutosentrega->id) ?></td>             
                <td><?= h($projetosprodutosentrega->referencia) ?></td>
                <td><?= h($projetosprodutosentrega->descricao) ?></td>
                <td><?= $projetosprodutosentrega->has('projetosproduto') ? $this->Html->link($projetosprodutosentrega->projetosproduto->descricao, ['controller' => 'Projetosprodutos', 'action' => 'view', $projetosprodutosentrega->projetosproduto->id]) : '' ?></td>                
                <td><?= $this->Number->format($projetosprodutosentrega->frente_id) ?></td>
                <td><?= $this->Number->format($projetosprodutosentrega->prioridade) ?></td>
                <td><?= h($projetosprodutosentrega->responsavel) ?></td>
                <td><?= $projetosprodutosentrega->has('pareto') ? $this->Html->link($projetosprodutosentrega->pareto->Kanban, ['controller' => 'Paretos', 'action' => 'view', $projetosprodutosentrega->pareto->id]) : '' ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosprodutosentrega->id],['class'=>'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosprodutosentrega->id],['class'=>'btn btn-warning btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosprodutosentrega->id],['class'=>'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosprodutosentrega->id)]) ?>
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