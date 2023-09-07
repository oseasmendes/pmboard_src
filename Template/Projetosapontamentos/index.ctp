<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projetosapontamento[]|\Cake\Collection\CollectionInterface $projetosapontamentos
 */
?>
<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">Lista de Projetos</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Projetosapontamento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projetosapontamentos index large-9 medium-8 columns content">
    <h3><?= __('Apontamentos') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id','Analista') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projetosprodutosentrega_id','Demanda') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horainicio','HrInicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horafim','HrFim') ?></th>
                <th scope="col"><?= $this->Paginator->sort('temporealizado','Tmp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id','Status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('canal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projetosapontamentos as $projetosapontamento): ?>
            <tr>
                <td><?= $this->Number->format($projetosapontamento->id) ?></td>
                <td><?= $projetosapontamento->has('consultore') ? $this->Html->link($projetosapontamento->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $projetosapontamento->consultore->id]) : '' ?></td>
                <td><?= $projetosapontamento->has('projetosprodutosentrega') ? $this->Html->link($projetosapontamento->projetosprodutosentrega->descricao, ['controller' => 'Projetosprodutosentregas', 'action' => 'view', $projetosapontamento->projetosprodutosentrega->id]) : '' ?></td>
                <td><?= h($projetosapontamento->data) ?></td>
                <td><?= h($projetosapontamento->horainicio) ?></td>
                <td><?= h($projetosapontamento->horafim) ?></td>
                <td><?= $this->Number->format($projetosapontamento->temporealizado) ?></td>
                <td><?= $projetosapontamento->has('statusfuncional') ? $this->Html->link($projetosapontamento->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $projetosapontamento->statusfuncional->id]) : '' ?></td>
                <td><?= h($projetosapontamento->descricao) ?></td>
                <td><?= h($projetosapontamento->canal) ?></td>
                <td><?= h($projetosapontamento->created) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $projetosapontamento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projetosapontamento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projetosapontamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projetosapontamento->id)]) ?>
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
