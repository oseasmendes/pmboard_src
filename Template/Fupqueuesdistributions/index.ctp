<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fupqueuesdistribution[]|\Cake\Collection\CollectionInterface $fupqueuesdistributions
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
        <li><?= $this->Html->link(__('New Fupqueuesdistribution'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fupqueues'), ['controller' => 'Fupqueues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fupqueue'), ['controller' => 'Fupqueues', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participantes'), ['controller' => 'Participantes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participante'), ['controller' => 'Participantes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fupqueuesdistributions index large-9 medium-8 columns content">
    <h3><?= __('Fila de Distribuição') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fupqueue_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fupqueuesdistributions as $fupqueuesdistribution): ?>
            <tr>
                <td><?= $this->Number->format($fupqueuesdistribution->id) ?></td>
                <td><?= $fupqueuesdistribution->has('fupqueue') ? $this->Html->link($fupqueuesdistribution->fupqueue->descricao, ['controller' => 'Fupqueues', 'action' => 'view', $fupqueuesdistribution->fupqueue->id]) : '' ?></td>
                <td><?= $fupqueuesdistribution->has('participante') ? $this->Html->link($fupqueuesdistribution->participante->nome, ['controller' => 'Participantes', 'action' => 'view', $fupqueuesdistribution->participante->id]) : '' ?></td>
                <td><?= h($fupqueuesdistribution->created) ?></td>
                <td><?= h($fupqueuesdistribution->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fupqueuesdistribution->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fupqueuesdistribution->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fupqueuesdistribution->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fupqueuesdistribution->id)]) ?>
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