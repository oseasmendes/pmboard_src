<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupagenda[]|\Cake\Collection\CollectionInterface $fupagendas
 */
?>

<section class="content">
        <div class="container-fluid">
            <div class="row">     

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">

                       
                        </div>
                            <div class="card-body">
                                    <div class="row" > 
                                    </div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fupagenda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupqueues'), ['controller' => 'Fupqueues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupqueue'), ['controller' => 'Fupqueues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Statusfuncionals'), ['controller' => 'Statusfuncionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Statusfuncional'), ['controller' => 'Statusfuncionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupdeployed'), ['controller' => 'Fupdeployed', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupdeployed'), ['controller' => 'Fupdeployed', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupinprogres'), ['controller' => 'Fupinprogres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupinprogre'), ['controller' => 'Fupinprogres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupnotstarted'), ['controller' => 'Fupnotstarted', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupnotstarted'), ['controller' => 'Fupnotstarted', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupagendas index large-9 medium-8 columns content">
    <h3><?= __('Fupagendas') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fupqueue_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('checkpointdata') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusfuncional_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fupagendas as $fupagenda): ?>
            <tr>
                <td><?= $this->Number->format($fupagenda->id) ?></td>
                <td><?= $fupagenda->has('fupqueue') ? $this->Html->link($fupagenda->fupqueue->descricao, ['controller' => 'Fupqueues', 'action' => 'view', $fupagenda->fupqueue->id]) : '' ?></td>
                <td><?= h($fupagenda->checkpointdata) ?></td>
                <td><?= h($fupagenda->descricao) ?></td>
                <td><?= $fupagenda->has('statusfuncional') ? $this->Html->link($fupagenda->statusfuncional->descricao, ['controller' => 'Statusfuncionals', 'action' => 'view', $fupagenda->statusfuncional->id]) : '' ?></td>
                <td><?= h($fupagenda->created) ?></td>
                <td><?= h($fupagenda->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fupagenda->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fupagenda->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fupagenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupagenda->id)]) ?>
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