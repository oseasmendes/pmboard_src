<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logbook[]|\Cake\Collection\CollectionInterface $logbooks
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
                            <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Logbook'), ['action' => 'add']) ?></li>        
        <li><?= $this->Html->link(__('List Atividadetipos'), ['controller' => 'Atividadetipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Atividadetipo'), ['controller' => 'Atividadetipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Logbooksitems'), ['controller' => 'Logbooksitems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Logbooksitem'), ['controller' => 'Logbooksitems', 'action' => 'add']) ?></li>
    </ul>
</nav>
</div>
                                    <div class="row" >


<div class="logbooks index large-9 medium-8 columns content">
    <h3><?= __('Logbooks') ?></h3>
    <table class="table table-striped table-responsive">  
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('programa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('atividadetipos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logbooks as $logbook): ?>
            <tr>
                <td><?= $this->Number->format($logbook->id) ?></td>
                <td><?= h($logbook->data) ?></td>
                <td><?= h($logbook->descricao) ?></td>
                <td><?= $logbook->has('programa') ? $this->Html->link($logbook->programa->descricao, ['controller' => 'Programas', 'action' => 'view', $logbook->programa->id]) : '' ?></td>
                <td><?= $logbook->has('atividadetipo') ? $this->Html->link($logbook->atividadetipo->descricao, ['controller' => 'Atividadetipos', 'action' => 'view', $logbook->atividadetipo->id]) : '' ?></td>
                <td><?= h($logbook->created) ?></td>
                <td><?= h($logbook->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $logbook->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logbook->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $logbook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logbook->id)]) ?>
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