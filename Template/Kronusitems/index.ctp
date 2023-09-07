<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kronusitem[]|\Cake\Collection\CollectionInterface $kronusitems
 */
?>
  <section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                        <h3 class="card-title">TO DO List</h3>
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div> 

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Kronusitem'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kronusplans'), ['controller' => 'Kronusplans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kronusplan'), ['controller' => 'Kronusplans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutos'), ['controller' => 'Projetosprodutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosproduto'), ['controller' => 'Projetosprodutos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetosprodutosentregas'), ['controller' => 'Projetosprodutosentregas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projetosprodutosentrega'), ['controller' => 'Projetosprodutosentregas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paretos'), ['controller' => 'Paretos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pareto'), ['controller' => 'Paretos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flags'), ['controller' => 'Flags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Flag'), ['controller' => 'Flags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fases'), ['controller' => 'Fases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fase'), ['controller' => 'Fases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kronusitems index large-9 medium-8 columns content">
    <h3><?= __('Kronusitems') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('ordem') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('referencia') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('atividade') ?></th>                
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kronusitems as $kronusitem): ?>
            <tr>
                <td><?= $this->Number->format($kronusitem->id) ?></td>               
                <td><?= $this->Number->format($kronusitem->ordem) ?></td>                
                <td><?= h($kronusitem->referencia) ?></td>
                <td><?= h($kronusitem->flagname) ?></td>
                <td><?= $kronusitem->has('flag') ? $this->Html->link($kronusitem->flag->id, ['controller' => 'Flags', 'action' => 'view', $kronusitem->flag->id]) : '' ?></td>
                <td><?= $kronusitem->has('fase') ? $this->Html->link($kronusitem->fase->descricao, ['controller' => 'Fases', 'action' => 'view', $kronusitem->fase->id]) : '' ?></td>
                
                <td><?= h($kronusitem->atividade) ?></td>                
                <td><?= h($kronusitem->created) ?></td>
                <td><?= h($kronusitem->modified) ?></td>                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $kronusitem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kronusitem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kronusitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kronusitem->id)]) ?>
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
    </section>