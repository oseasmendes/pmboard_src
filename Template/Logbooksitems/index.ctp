<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logbooksitem[]|\Cake\Collection\CollectionInterface $logbooksitems
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
        <li><?= $this->Html->link(__('New Logbooksitem'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projetos'), ['controller' => 'Projetos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Projeto'), ['controller' => 'Projetos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultores'), ['controller' => 'Consultores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultore'), ['controller' => 'Consultores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Logbooks'), ['controller' => 'Logbooks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Logbook'), ['controller' => 'Logbooks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logbooksitems index large-9 medium-8 columns content">
    <h3><?= __('Logbooksitems') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('projeto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('consultore_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logbook_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hora') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notificaracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notificarcontato') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsavel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logbooksitems as $logbooksitem): ?>
            <tr>
                <td><?= $this->Number->format($logbooksitem->id) ?></td>
                <td><?= $logbooksitem->has('projeto') ? $this->Html->link($logbooksitem->projeto->descricao, ['controller' => 'Projetos', 'action' => 'view', $logbooksitem->projeto->id]) : '' ?></td>
                <td><?= $logbooksitem->has('consultore') ? $this->Html->link($logbooksitem->consultore->nome, ['controller' => 'Consultores', 'action' => 'view', $logbooksitem->consultore->id]) : '' ?></td>
                <td><?= $logbooksitem->has('logbook') ? $this->Html->link($logbooksitem->logbook->id, ['controller' => 'Logbooks', 'action' => 'view', $logbooksitem->logbook->id]) : '' ?></td>
                <td><?= h($logbooksitem->data) ?></td>
                <td><?= h($logbooksitem->hora) ?></td>
                <td><?= h($logbooksitem->descricao) ?></td>
                <td><?= h($logbooksitem->notificaracao) ?></td>
                <td><?= h($logbooksitem->notificarcontato) ?></td>
                <td><?= h($logbooksitem->responsavel) ?></td>
                <td><?= h($logbooksitem->created) ?></td>
                <td><?= h($logbooksitem->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $logbooksitem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logbooksitem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $logbooksitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logbooksitem->id)]) ?>
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